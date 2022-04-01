@extends('user.master-logged')
@section('title', isset($title) ? $title : __('Marketplace'))
@section('content')
    <!--Main Menu/Navbar Area Start -->
    @include('user.components.dashboard-breadcumb')
    <!-- Connect Your Wallet Page Area start here  -->
    <section class="profile-page-area section-t-space section-b-90-space">
        <div class="container">
            <div class="row">
                <!-- Profile Sidebar Area Start -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="search-sidebar-wrap user-profile-sidebar-wrap">
                        <!-- User Dashboard Sidebar Menu Start-->
                        @include('user.components.user-sidebar')
                        <!-- User Dashboard Sidebar Menu End -->
                    </div>
                </div>
                <!-- Profile Sidebar Area End -->
                <!-- Profile rightside Area -->
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="search-rightside-area">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card user-dashboard-page-card mb-3">
                                    <div class="card-header">{{ __('Deposit') }}</div>
                                    <div class="card-body">
                                        <h1 class="card-title mb-0">{{ visual_number_format($deposit_sum) }}</h1>
                                        <div class="user-dashboard-card-icon">
                                            <i class="fas fa-shopping-bag"></i>
                                        </div>
                                    </div>
                                    <a href="{{ route('deposit_data') }}" class="card-footer text-muted">
                                        More Info <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card user-dashboard-page-card mb-3">
                                    <div class="card-header">{{ __('Withdraw') }}</div>
                                    <div class="card-body">
                                        <h1 class="card-title mb-0">{{ visual_number_format($withdraw_sum) }}</h1>
                                        <div class="user-dashboard-card-icon">
                                            <i class="far fa-chart-bar"></i>
                                        </div>
                                    </div>
                                    <a href="{{ route('withdraw_data') }}" class="card-footer text-muted">
                                        More Info <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card user-dashboard-page-card mb-3">
                                    <div class="card-header">{{ __('Purchase') }}</div>
                                    <div class="card-body">
                                        <h1 class="card-title mb-0">{{ $purchase_sum }}</h1>
                                        <div class="user-dashboard-card-icon">
                                            <i class="fas fa-store"></i>
                                        </div>
                                    </div>
                                    <a href="{{ route('purchase_history') }}" class="card-footer text-muted">
                                        More Info <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card user-dashboard-page-card mb-3">
                                    <div class="card-header">{{ __('Products') }}</div>
                                    <div class="card-body">
                                        <h1 class="card-title mb-0">{{ $service_sum }}</h1>
                                        <div class="user-dashboard-card-icon">
                                            <i class="fas fa-box-open"></i>
                                        </div>
                                    </div>
                                    <a href="{{ route('my_service_data') }}" class="card-footer text-muted">
                                        More Info <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="section__shop mt-10">

                        <div class="container">
                            <div class="space-y-30">
                                <h2 class="section__title">JotArt Mintables</h2>
                                
                                <div class="row mb-30_reset">
                                    <?php 
                                    $items = App\Model\Mintable::where('status', '!=', SOLD)->get();
                                    // print_r($items);
                                    foreach ($items as $data) {
                                       
                                    ?>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card__item eight">

                                            <div class="card_body space-y-10">
                                                <!-- =============== -->
                                                <div class="card_head space-y-10">
                                                    <div class="price__content space-x-5">
                                                        {{-- <img class="eth__img d-inline" style="max-width: 25px" src="assets/img/icons/ETH.svg" alt="eth"> --}}
                                                        <p class="price txt_sm _bold d-inline">{{$data->price_dollar}}
                                                            {{$data->network}}</p>
                                                    </div>
                                                    <a href="{{route('mintable_create', encrypt($data->id))  }}">
                                                        <img class="product__img"
                                                            src="{{ asset(IMG_MINTABLE_PATH . $data->thumbnail) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <!-- =============== -->
                                                <div
                                                    class="card_footer justify-content-between
                                                        space-x-20">
                                                    <div class="space-y-3">
                                                        <a href="Profile.html">
                                                            <p class="product__name txt_sm">{{ $data->title }}
                                                            </p>
                                                        </a>
                                                        <div class="space-x-5 d-flex">
                                                            <i
                                                                class="ri-star-fill color_brand
                                                                    txt_xs"></i>
                                                            <span
                                                                class="color_brand txt_xs">{{ $data->description }}</span>
                                                        </div>

                                                    </div>
                                                    <div class="space-x-5">
                                                        <a class="btn btn-grad" href="{{route('mintable_create', encrypt($data->id))  }}">
                                                            Mint
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    
                                    }
                                    ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile rightside Area -->
            </div>
        </div>
    </section>
    <!-- Connect Your Wallet Page Area end here  -->
@endsection
