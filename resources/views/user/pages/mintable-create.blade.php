@extends('user.master')
@section('title', isset($title) ? $title : __('Marketplace'))
@section('content')
    <style>
        /* #target1, */
        #target2,
        #target1_video,
        #target2_video {
            display: none
        }

        .target {
            background: #161515;
            height: 300px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-content: center;
        }

        .countdown-box {
            bottom: auto;
            background-color: #fff;
            border-radius: 55px;
            width: 347px;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .main-item-img {
            border: 1px solid #E6E8EC;
            border-radius: 12px;
            padding: 30px;

        }

        .nice-select .list:hover {
            background-color: #535353;
        }

        .nice-select .option,
        .nice-select .option,
        .nice-select .option.selected,
        .nice-select .option.focus,
        .nice-select .option.selected.focus,
        .nice-select .option:hover,
        .nice-select .option.hover,
        .nice-select .option.selected.hover {
            background-color: #3b3a3a;
        }

    </style>



    <!-- Page Banner Area start here  -->
    <section class="page-banner-area p-0"
        style="background-image: url({{ is_null(allsetting()['dashboard_image']) || allsetting()['dashboard_image'] == ''? asset(IMG_STATIC_PATH . 'page-banner.png'): asset(IMG_PATH . allsetting()['dashboard_image']) }});">
        <div class="container">
            <!-- Page Banner element -->
            <div class="inner-page-single-dot1 position-absolute"><img
                    src="{{ asset('assets/user/img/footer-img/footer-dot1.png') }}" alt="{{ __('dot') }}"></div>
            <div class="inner-page-single-dot2 position-absolute"><img
                    src="{{ asset('assets/user/img/footer-img/footer-dot2.png') }}" alt="{{ __('dot') }}"></div>
            <div class="inner-page-single-dot3 position-absolute"><img
                    src="{{ asset('assets/user/img/footer-img/footer-dot3.png') }}" alt="{{ __('dot') }}"></div>
            <!-- Page Banner element -->
            <div class="row page-banner-top-space">
                <div class="col-12 col-lg-12">
                    <div class="page-banner-content text-center">
                        <h1 class="page-banner-title">{{ __('Upload Artwork') }}</h1>
                        <p class="page-banner-para">
                            {{ __('Choose you want your collectible to be one of a kind or if you want
                                                                                                                                                                                                                                                                                                                                                                                                        to sell one collectible multiple times') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Banner Area end here  -->
    <!-- Page Breadcrumb Area start here  -->
    <section class="breadcrumb-section p-0">
        <div class="container">
            <div class="row">
                <!-- Breadcrumb Area -->
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="breadcrumb-area">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('login') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Upload Artwork') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumb Area end here  -->
    <!-- Upload Page Area start here  -->
    <section class="create-new-page-area section-t-space">
        <div class="container">

            {{ Form::open(['route' => 'mintable_store','files' => true,'data-handler' => 'showMessage','class' => 'ajax']) }}
            <div class="row">
                <div class="col-12 col-md-7 col-lg-7">
                    <!-- Create New Box Start -->
                    <div class="create-new-page-box">
                        {{-- <h6 class="create-new-page-box-title font-weight-bold">{{ __('Item Details') }}</h6>
                        <div class="form-group">
                            <label for="item-name">{{ __('Service Type') }}</label>
                            <div class="common-radio d-flex align-items-center">

                                <div class="radiobox-wrap">
                                    <label class="custom-radio" for="type1">
                                        <input id="type1" type="radio" name="type" value="{{ FIXED_PRICE }}">

                                        <span class="label-text">
                                            <img src="{{ asset('assets/user/img/upload-img/1.svg') }}"
                                                alt="{{ __('upload') }}">
                                            {{ __(' Fixed Price') }}
                                        </span>
                                    </label>
                                </div>

                                <div class="radiobox-wrap">
                                    <label class="custom-radio" for="type2">
                                        <input id="type2" type="radio" name="type" value="{{ BID_PRICE }}">

                                        <span class="label-text">
                                            <img src="{{ asset('assets/user/img/upload-img/2.svg') }}"
                                                alt="{{ __('upload') }}">
                                            {{ __('Bid') }}
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div> --}}
@php
    $network = $service->network ?? null;
    
@endphp
                        <div class="form-group">
                            <label for="">{{ __('Network') }}</label>
                            <select id="network" name="network" class="form-control">
                                <option value="BSC" @php echo $network == "BSC" ? "selected='selected'" : "" @endphp>BSC</option>
                                <option value="ETH" @php echo $network == "ETH" ? "selected='selected'" : "" @endphp>Etherium</option>
                                <option value="Polygon" @php echo $network == "Polygon" ? "selected='selected'" : "" @endphp>Polygon</option>
                               
                            </select>
                        </div>

                        {{-- <div class="form-group">
                            <label for="item-name">{{ __('Supply') }}</label>
                            <input type="text" class="form-control" id="supply" name="title"
                                placeholder="{{ __('1') }}'">
                        </div> --}}

                        <div class="form-group">
                            <label for="item-name">{{ __('Item name') }}</label>
                            <input type="text" class="form-control" id="item-name" name="title" value="{{$service->title ?? null}}"
                                placeholder="{{ __("e. g. 'Redeemable Bitcoin Card with logo") }}'">
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('DESCRIPTION') }}</label>
                            <textarea class="form-control" id="description" name="description" rows="3"  value="{{$service->description ?? null}}"
                                placeholder="{{ __("e. g. 'After purchasing you will able to recived the logo...'") }}"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label for="category">{{ __('Category') }}</label>
                                    <select class="form-control" id="category" name="category_id">
                                        <option value="">{{ __('---SELECT A CATEGORY---') }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id ==  ($service->category_id ?? null) ? 'selected="selected"' : '' }}>{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12" id="price-d">
                                <div class="form-group">
                                    <label for="price">{{ __('Price') }}</label>
                                    <input type="number" step="0.01" min="0" class="form-control" id="price" value="{{$service->price_dollar ?? null}}"
                                        name="price_dollar" placeholder="{{ __('Price') }}">
                                </div>
                            </div>
                            {{-- <input type="hidden" value="1" id="available_item" name="available_item">
                            <div class="col-12 col-lg-6 d-none" id="max_bid_d">
                                <div class="form-group">
                                    <label for="max_bid_amount">{{ __('Max Bid Amount') }}</label>
                                    <input type="number" step="0.01" min="0" class="form-control" id="max_bid_amount"
                                        name="max_bid_amount" value="999999">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 d-none" id="min_bid_d">
                                <div class="form-group">
                                    <label for="min_bid_amount">{{ __('Min Bid Amount') }}</label>
                                    <input type="number" step="0.01" min="0" class="form-control" id="min_bid_amount"
                                        name="min_bid_amount" value="0.01">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="color">{{ __('Color') }}</label>
                                    <select class="form-control" id="color" name="color">
                                        <option value="">{{ __('---SELECT COLOR---') }}</option>
                                        @foreach (colors() as $color)
                                            <option value="{{ $color }}">{{ $color }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="origin">{{ __('Origin') }}</label>
                                    <select class="form-control" id="origin" name="origin">
                                        <option value="">{{ __('---SELECT ORIGIN---') }}</option>
                                        @foreach (country() as $origin)
                                            <option value="{{ $origin }}">{{ $origin }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label for="video_link">{{ __('Video Link') }} </label>
                                    <input type="text" class="form-control" id="video_link" name="video_link"
                                        placeholder="{{ __('Video Link') }}">
                                </div>
                            </div> --}}
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label for="video_link">{{ __('Mint Address') }} </label>
                                    <input type="text" class="form-control" id="mint_address" name="mint_address"
                                        placeholder="{{ __('Mint Address') }}" value="12345" readonly>
                                </div>
                            </div>
                            {{-- <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="expired_date">{{ __('Expired Date') }} </label>
                                    <input type="date" class="form-control" id="expired_date" name="expired_date"
                                        placeholder="{{ __('Expired Date') }}">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="expired_time">{{ __('Expired Time') }} </label>
                                    <input type="time" class="form-control" id="expired_time" name="expired_time"
                                        placeholder="{{ __('Expired Time') }}">
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <!-- Create New Box End -->
                    <!-- Create New Box Start -->
                    {{-- <div class="create-new-page-box">
                        <div class="create-new-page-box-inner d-flex justify-content-between">
                            <div>
                                <h6 class="create-new-page-box-title font-weight-bold">{{ __('Unlock once purchased') }}
                                </h6>
                                <p>{{ __('Content will be unlocked after successful transaction') }}
                                </p>
                            </div>
                            <div>
                                <label class="switch">
                                    <input type="checkbox" value="1" name="is_unlockable">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Create New Box End -->
                    <!-- Create New Box Start -->
                    <div class="ajax-alert">
                    </div>
                    <!-- Create New Box End -->
                    <!-- Create New Box Start -->
                    <div class="create-new-page-box">
                        <div class="create-new-page-box-inner d-flex justify-content-between align-items-center">
                            <div>
                                <button id="upload" onclick="upload_my();" id="mint" type="button"
                                    class="theme-button1">{{ __('Mint') }}</button>
                                <button style="display:none" type="submit" id="sub1"
                                    class="theme-button1">{{ __('Create Item') }}</button>
                                <button type="button" class="theme-button2" data-toggle="modal"
                                    data-target="#mainItemPreviewModal" id="show-prev">
                                    {{ __('Show Preview') }}</button>
                            </div>
                            <div class="save-or-not-msg" id="file-saved">{{ __('File Saved !') }}</div>
                        </div>
                    </div>
                    <!-- Create New Box End -->
                </div>
                <div class="col-12 col-md-5 col-lg-5">
                    <!-- Create New Box Start -->
                    <div class="create-new-page-box">
                        <h6 class="create-new-page-box-title font-weight-bold">{{ __('Upload file') }}</h6>
                        <p>{{ __('Drag or choose your file to upload') }}</p>
                        <div class="form-group custom-file-upload">
                            <input type="file" class="custom-file-inputxxx putImage1" id="customFile" name="thumbnail">
                            <input type="hidden" id="customFile_hidden" name="thumbnail_hidden" value="{{ $service->thumbnail != "" ? asset(IMG_MINTABLE_PATH . $service->thumbnail) : asset('assets/user/img/main-item-img/create-new-preview.jpg') }}">
                            <span
                                class="d-block color-green">{{ __('JPG, PNG, GIF, SVG, MP4, WEBM, MP3, WAV, OGG, GLB, GLTF. Max 1Gb.') }}</span>
                            {{-- <div class="custom-file">
                                <input type="file" class="custom-file-input putImage1" id="customFile" name="thumbnail">
                                <label class="custom-file-label" for="customFile">
                                    <i class="fas fa-cloud-download-alt"></i>
                                    <span
                                        class="d-block color-green">{{ __('JPG, PNG, GIF, SVG, MP4, WEBM, MP3, WAV, OGG, GLB, GLTF. Max 1Gb.') }}</span>
                                    <span class="d-block color-green">{{ __('Width: 613px, height: 703') }}</span>
                                </label>
                            </div> --}}
                        </div>
                    </div>
                    <!-- Create New Box End -->
                    <!-- Create New Box Start -->
                    <div class="create-new-page-box">
                        <div class="create-new-page-box-inner d-flex justify-content-between">
                            <div>
                                <h6 class="create-new-page-box-title font-weight-bold">{{ __('Preview') }}</h6>
                            </div>
                            <div>
                                <button type="button" class="color-green show-full-preview" data-toggle="modal"
                                    data-target="#mainItemPreviewModal">
                                    {{ __('Show Full Preview') }}</button>
                            </div>
                        </div>
                        <div class="target">
                            <img src="{{ $service->thumbnail != "" ? asset(IMG_MINTABLE_PATH . $service->thumbnail) : asset('assets/user/img/main-item-img/create-new-preview.jpg') }}"
                                alt="{{ __('preview') }}" class="img-fluid preview-img" id="target1">

                            {{-- <video id="target1_video" width="300" height="300" controls muted></video> --}}
                        </div>


                    </div>
                    <!-- Create New Box End -->
                </div>
            </div>
            {{ Form::close() }}
            <span id="resultSpace"></span>
        </div>
    </section>
    <!-- Upload Page Area end here  -->
@endsection
@section('script')
    <script src="{{ asset('assets/user/js/pages/service-create.js') }}"></script>
@endsection
