<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MintableCreateRequest;
use App\Model\Bid;
use App\Model\BidHistory;
use App\Model\Category;
use App\Model\Earning;
use App\Model\Mintable;
use App\Model\Transaction;
use App\Model\TransferToken;
use App\Model\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class MintController
 */
class MintableController extends Controller
{

    public function addMintable()
    {
        $categories = Category::orderBy('title', 'ASC')->get();
        // return view('user.pages.mintable-create', ['title' => __('Mintable Artwork'), 'categories' => $categories]);
        return view('admin.mintable.add', ['title' => __('Mintable Artwork'), 'categories' => $categories]);
    }
    public function serviceStore(MintableCreateRequest $request)
    {
        // $expired_at = $request->expired_date.' '.$request->expired_time;
        $expired_at = null;

        if (!empty($request->thumbnail)) {
            $thumb = uploadimage($request['thumbnail'], IMG_MINTABLE_PATH);
        }
        $is_unlock = checkBoxValue($request->is_unlockable);
        try {

            $action = Mintable::create([
                'title' => $request->title,
                'description' => $request->description,
                'type' => $request->type,
                'network' => $request->network,
                'expired_at' => $expired_at,
                'price_dollar' => $request->price_dollar,
                'fees_percentage' => 2,
                'fees_fixed' => 20,
                'fees_type' => FEES_FIXED,
                'available_item' => $request->available_item,
                'category_id' => $request->category_id,
                'created_by' => Auth::id(),
                'status' => APPROVED,
                'thumbnail' => $thumb,
                'video_link' => $request->video_link,
                'color' => $request->color,
                'origin' => $request->origin,
                'mint_address' => $request->mint_address,
                'max_bid_amount' => $request->max_bid_amount,
                'min_bid_amount' => $request->min_bid_amount,
                'is_unlockable' => $is_unlock,
            ]);
        } catch (\Exception $e) {
            return ['status' => false, 'message' => errorHandle($e->getMessage())];
        }


        if (!empty($action)) {
            return redirect()->route('admin_mintable_list')->with('success', __('Added Successfully'));
            // return response()->json(['success' => true, 'message' => __('Added Successfully'), 'data' => ['redirect' => true, 'type' => 'success', 'returnRoute' => route('my_service_data')]]);
        } else {
            return ['status' => false, 'message' => __('Service not added!')];
        }
    }

    public function mintableDelete($id)
    {
        $service_id = decrypt($id);
        try {
            $action = Mintable::find($service_id)->delete();
        } catch (\Exception $e) {
            return ['status' => false, 'message' => errorHandle($e->getMessage())];
        }

        if (!empty($action)) {
            return redirect()->back()->with('success', __('Deleted Successfully'));
        } else {
            return ['status' => false, 'message' => __('Could not deleted!')];
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View|mixed
     * @throws \Exception
     */
    public function mintList(Request $request)
    {
        // $items = Mintable::where('status', '!=', DRAFT);
        // print_r($items);
        // exit();
        if ($request->ajax()) {
            $items = Mintable::where('status', '!=', DRAFT);

            // if ($request->type == 'service_request') {
            //     $items = Mintable::where('status', ON_ADMIN_APPROVAL);
            // } elseif ($request->type == 'fixed_purchase') {
            //     $items = Mintable::where('type', 1);
            // }
            return datatables($items)
                ->addColumn('price', function ($data) {
                    return number_format($data->price_dollar, 2);
                })
                // ->editColumn('mint_address', function ($data) {
                //     return '<a href="' . MINT_URL . $data->mint_address . '" target="_blank">' . __('Click here') . '</a>';
                // })
                ->addColumn('owner', function ($data) {
                    return $data->author->first_name . ' ' . $data->author->last_name;
                })
                ->addColumn('category', function ($data) {
                    return $data->category->title;
                })
                // ->editColumn('type', function ($data) {
                //     $type = '';
                //     if ($data->type == 1) {
                //         $type = 'Price Fixed';
                //     } elseif ($data->type == 2) {
                //         $type = 'Bid';
                //     }
                //     return $type;
                // })
                // ->editColumn('available_item', function ($data) {
                //     return $data->is_resellable == 1 ? __('Resell') : __('First Time Sell');
                // })
                ->editColumn('thumbnail', function ($data) {
                    return '<img src="' . asset(IMG_MINTABLE_PATH . $data->thumbnail) . '" class="img-50" />';
                })
                // ->addColumn('bid_amount', function ($data) {
                //     if ($data->type == 2) {
                //         return $data->max_bid_amount . ' - ' . $data->min_bid_amount;
                //     } else {
                //         return __('N/A');
                //     }
                // })
                // ->addColumn('slider', function ($data) {
                //     if ($data->isSlider == 1) {
                //         return '<a href="' . route('admin_update_service_slider', ['id' => encrypt($data->id), 'update' => 0]) . '" class="btn btn-warning text-white rounded">' . __('Remove Slider') . '</a>';
                //     } else {
                //         return '<a href="' . route('admin_update_service_slider', ['id' => encrypt($data->id), 'update' => 1]) . '" class="btn btn-success rounded">' . __('Add Slider') . '</a>';
                //     }
                // })
                ->editColumn('status', function ($data) {
                    $status = '';
                    if ($data->status == DRAFT) {
                        $status = 'Draft';
                    } elseif ($data->status == ON_ADMIN_APPROVAL) {
                        $status = 'Mint Request';
                    } elseif ($data->status == APPROVED) {
                        $status = 'Approved';
                    } elseif ($data->status == PROCESSING) {
                        $status = 'Processing';
                    } elseif ($data->status == UNSOLD) {
                        $status = 'Unsold';
                    } elseif ($data->status == USER_CANCEL) {
                        $status = 'Cancel by User';
                    } elseif ($data->status == ADMIN_CANCEL) {
                        $status = 'Cancel by Admin';
                    } elseif ($data->status == SOLD) {
                        $status = 'Sold';
                    }
                    return $status;
                })
                ->addColumn('action', function ($data) {
                    return $this->btnShowByStatus($data->status, $data->id, $data->type);
                })
                ->rawColumns(['action', 'thumbnail', 'slider', 'mint_address'])
                ->make(true);
        }
        return view('admin.mintable.list', ['title' => __('All Collections')]);
    }

    /**
     * @param $status
     * @param $id
     * @param $type
     * @return string
     */
    public function btnShowByStatus($status, $id, $type)
    {
        $btn = '';
        if ($status == ON_ADMIN_APPROVAL) {
            $btn = $btn . '
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle dropdown-icon rounded" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </button>
                  <div class="dropdown-menu top-0 ">
                    <a class="dropdown-item" href="' . route('admin_approve_service', encrypt($id)) . '">' . __('Approve Request') . '</a>
                    <a class="dropdown-item" href="' . route('admin_edit_service', encrypt($id)) . '">' . __('Edit') . '</a>
                    <a class="dropdown-item" href="' . route('admin_cancel_service', encrypt($id)) . '">' . __('Cancel') . '</a>
                    <a class="dropdown-item" href="' . route('mintable_delete', encrypt($id)) . '">' . __('Delete') . '</a>
                  </div>
                </div>
            ';
        } elseif ($status == APPROVED) {
            if ($type !== 1) {
                $btn = $btn . '
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle dropdown-icon rounded" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </button>
                      <div class="dropdown-menu top-0 ">
                        <a class="dropdown-item" href="' . route('product_view', encrypt($id)) . '" target="_blank">' . __('View') . '</a>
                        <a class="dropdown-item" href="' . route('admin_cancel_service', encrypt($id)) . '">' . __('Cancel') . '</a>
                        <a class="dropdown-item" href="' . route('mintable_delete', encrypt($id)) . '">' . __('Delete') . '</a>
                      </div>
                    </div>
                ';
            } elseif ($type == 2) {
                $btn = $btn . '
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle dropdown-icon rounded" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </button>
                      <div class="dropdown-menu top-0 ">
                        <a class="dropdown-item" href="' . route('admin_show_bid', encrypt($id)) . '" target="_blank">' . __('Show Bid') . '</a>
                        <a class="dropdown-item" href="' . route('product_view', encrypt($id)) . '" target="_blank">' . __('View') . '</a>
                        <a class="dropdown-item" href="' . route('admin_cancel_service', encrypt($id)) . '">' . __('Cancel') . '</a>
                        <a class="dropdown-item" href="' . route('mintable_delete', encrypt($id)) . '">' . __('Delete') . '</a>
                      </div>
                    </div>
                ';
            }
        } elseif ($status == SOLD) {
            if ($type == 2) {
                $btn = $btn . '
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle dropdown-icon rounded" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </button>
                      <div class="dropdown-menu top-0 ">
                        <a class="dropdown-item" href="' . route('admin_show_bid', encrypt($id)) . '" target="_blank">' . __('Show Bid') . '</a>
                        <a class="dropdown-item" href="' . route('mintable_delete', encrypt($id)) . '">' . __('Delete') . '</a>
                        </div>
                    </div>
                ';
            } else {
                $btn = $btn . '
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle dropdown-icon rounded" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </button>
                      <div class="dropdown-menu top-0 ">
                        <a class="dropdown-item" href="' . route('product_view', encrypt($id)) . '" target="_blank">' . __('View') . '</a>
                        <a class="dropdown-item" href="' . route('mintable_delete', encrypt($id)) . '">' . __('Delete') . '</a>
                        </div>
                    </div>
                ';
            }
        } else {
            $btn = $btn . '
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle dropdown-icon rounded" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </button>
                  <div class="dropdown-menu top-0 ">
                    <a class="dropdown-item" href="' . route('product_view', encrypt($id)) . '" target="_blank">' . __('View') . '</a>
                    <a class="dropdown-item" href="' . route('mintable_delete', encrypt($id)) . '">' . __('Delete') . '</a>
                    </div>
                </div>
            ';
        }
        return $btn;
    }

    public function updateMintSlider(Request $request, $id)
    {
        $id = decrypt($id);
        if ($request->update == 1) {
            Mintable::whereId($id)->update([
                'isSlider' => 1,
            ]);
            return redirect()->back()->with('success', 'This artwork is added to slider!');
        } elseif ($request->update == 0) {
            Mintable::whereId($id)->update([
                'isSlider' => 0,
            ]);
            return redirect()->back()->with('success', 'This artwork is removed from slider!');
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editMint($id)
    {
        $id = decrypt($id);
        $service = Mintable::whereId($id)->with('category', 'author')->first();
        $categories = Category::orderBy('title', 'DESC')->get();
        return view('admin.mintable.edit', ['title' => __('Edit Mint'), 'service' => $service, 'categories' => $categories]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateMint(Request $request, $id)
    {
        $id = decrypt($id);
        $isSlider = checkBoxValue($request->isSlider);
        $action = Mintable::whereId($id)->update([
            'isSlider' => $isSlider,
            'comment' => $request->comment,
        ]);
        if (!empty($action)) {
            return redirect()->back()->with('success', 'Comment is added!');
        }
        return redirect()->back()->with('success', 'Something were wrong!');
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function approveMint(Request $request, $id)
    {
        $id = decrypt($id);
        $action = Mintable::whereId($id)->update([
            'STATUS' => APPROVED,
        ]);
        if (!empty($action)) {
            return redirect()->back()->with('success', 'Mint is approved!');
        }
        return redirect()->back()->with('success', 'Something were wrong!');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cancelMint($id)
    {
        $id = decrypt($id);
        $action = Mintable::whereId($id)->update([
            'STATUS' => ADMIN_CANCEL,
        ]);
        if (!empty($action)) {
            return redirect()->back()->with('success', 'Mint is canceled by admin!');
        }
        return redirect()->back()->with('success', 'Something were wrong!');
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View|mixed
     * @throws \Exception
     */
    public function showBid(Request $request, $id)
    {
        $id = decrypt($id);
        if ($request->ajax()) {
            $items = Bid::where('service_id', $id)->latest();
            return datatables($items)
                ->addColumn('user', function ($data) {
                    return $data->bid_holder->first_name . ' ' . $data->bid_holder->last_name;
                })
                ->addColumn('bid_amount', function ($data) {
                    if (highestBidMint($data->service_id) == $data->bid_amount) {
                        return '<div class="text-success">' . visual_number_format($data->bid_amount) . '</div>';
                    }
                    return visual_number_format($data->bid_amount);
                })
                ->editColumn('coin_amount', function ($data) {
                    return $data->transaction_id;
                })
                ->editColumn('conversion_rate', function ($data) {
                    return Carbon::parse($data->created_at)->toDateTimeString();
                })
                ->addColumn('action', function ($data) {
                    if ($data->status == 1) {
                        if (highestBidMint($data->service_id) == $data->bid_amount) {
                            return '<a href="' . route('admin_bid_success', [encrypt($data->service_id), encrypt($data->id)]) . '" class="btn btn-success">Bid Success</a>';
                        } else {
                            return '<a href="' . route('admin_bid_success', [encrypt($data->service_id), encrypt($data->id)]) . '" class="btn btn-secondary success-warning">Bid Success</a>';
                        }
                    } else {
                        if ($data->is_sale_bid == 1) {
                            return '<div class="text-success">' . __('Bid Winner') . '</div>';
                        } else {
                            return '<div class="text-danger">' . __('Bid Holder') . '</div>';
                        }
                    }
                })
                ->rawColumns(['user', 'action', 'bid_amount'])
                ->make(true);
        }
        $bid_details = Mintable::where('id', $id)->first();
        return view('admin.service.bid', ['title' => __('Bids'), 'id' => $id, 'bid_details' => $bid_details]);
    }

    /**
     * @param $service_id
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function bidSuccess($service_id, $id)
    {
        DB::beginTransaction();
        try {
            $service_id = decrypt($service_id);
            $service = Mintable::whereId($service_id)->first();
            $id = decrypt($id);
            $win_bid = Bid::whereId($id)->first();
            $bid_cut = BidHistory::where('service_id', $win_bid->service_id)->where('user_id', $win_bid->user_id)->with('wallet')->get();
            foreach ($bid_cut as $bc) {
                $coinsc = bcadd($bc->coin_amount, $bc->service_charge_coin);
                $wc = Wallet::whereId($bc->wallet_id)->first();
                $wc->decrement('on_hold', $coinsc);
                $receiver_charge = serviceChargeSeller($bc->coin_amount);
                $receiver_cut_coin = $bc->coin_amount - $receiver_charge;
                $receiver_wallet = Wallet::where('coin_id', $bc->coin_id)->where('user_id', $service->created_by)->first();
                $receiver_wallet->increment('balance', $receiver_cut_coin);
                Earning::create([
                    'bid_id' => $id,
                    'user_id' => $wc->user_id,
                    'coin_id' => $bc->coin_id,
                    'user_to_platform' => 1,
                    'platform_to_user' => 0,
                    'trans_amount' => $bc->coin_amount,
                    'amount' => $bc->service_charge_coin,
                    'coin_type' => $bc->coin_type,
                    'comments' => __('Bid win done. BIDID: ') . $id,
                    'status' => STATUS_ACTIVE,
                ]);
                Earning::create([
                    'bid_id' => $id,
                    'user_id' => $receiver_wallet->user_id,
                    'coin_id' => $bc->coin_id,
                    'user_to_platform' => 0,
                    'platform_to_user' => 1,
                    'trans_amount' => $bc->coin_amount,
                    'amount' => $receiver_charge,
                    'coin_type' => $bc->coin_type,
                    'comments' => 'Transaction complete. BIDID: ' . $id,
                    'status' => STATUS_ACTIVE,
                ]);
            }
            $action = Bid::whereId($id)->update([
                'is_sale_bid' => 1,
                'status' => 2,
            ]);
            Mintable::whereId($service_id)->update([
                'buyer_id' => $win_bid->user_id,
                'available_item' => 0,
                'status' => SOLD,
            ]);
            Transaction::where('bid_id', $id)->where('buyer_id', $win_bid->user_id)->update([
                'status' => TRANS_BID_WIN,
            ]);
            if ($service->is_resellable == 0) {
                TransferToken::create([
                    'service_id' => $service->id,
                    'prev_mint_address' => $service->mint_address,
                    'new_mint_address' => MINT_TOKEN_1,
                ]);
            } elseif ($service->is_resellable == 1) {
                TransferToken::create([
                    'service_id' => $service->resell_service_id,
                    'resell_service_id' => $service->id,
                    'prev_mint_address' => $service->mint_address,
                    'new_mint_address' => MINT_TOKEN_1,
                ]);
            }
            $bid_refunders = BidHistory::where('service_id', $win_bid->service_id)->where('user_id', '!=', $win_bid->user_id)->with('wallet')->get();
            foreach ($bid_refunders as $br) {
                $ref_bid = Bid::where('service_id', $win_bid->service_id)->where('user_id', $br->user_id)->first();
                $coins = bcadd($br->coin_amount, $br->service_charge_coin);
                $wl = Wallet::whereId($br->wallet_id)->first();
                $br->wallet->increment('balance', $coins);
                $br->wallet->decrement('on_hold', $coins);
                Bid::whereId($br->id)->update([
                    'status' => 2,
                ]);
                Transaction::where('bid_id', $ref_bid->id)->where('buyer_id', $br->user_id)->update([
                    'status' => TRANS_BID_REFUND,
                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('dismiss', errorHandle($e->getMessage()));
        }
        if (!empty($action)) {
            return redirect()->back()->with('success', __('Product successfully transferred!'));
        }
        return redirect()->back()->with('dismiss', __('Something were wrong!'));
    }
}
