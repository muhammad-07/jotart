<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ __('JotArt - NFT Marketplace HTML5 Responsive Template') }}">
    <meta name="keywords"
        content="{{ __('crypto currency, currency, crypto, nft marketplace, NFT, nft, NFT marketplace') }}">
    <meta name="author" content="{{ __('Muhammad') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:type" content="{{ __('Web Template') }}">
    <meta property="og:title" content="{{ __('JotArt - NFT Marketplace HTML5 Responsive Template') }}">
    <meta property="og:description" content="{{ __('JotArt - NFT Marketplace HTML5 Responsive Template') }}">
    <meta property="og:image" content="{{ asset('assets/user/img/01_preview.png') }}">
    <meta name="twitter:card" content="{{ __('Muhammad') }}">
    <meta name="twitter:title" content="{{ __('JotArt - NFT Marketplace HTML5 Responsive Template') }}">
    <meta name="twitter:description" content="{{ __('JotArt - NFT Marketplace HTML5 Responsive Template') }}">
    <meta name="twitter:image" content="{{ asset('assets/user/img/01_preview.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/user/img/01_preview.png') }}">
    <meta name="msapplication-TileColor" content="rgba(103, 20, 222,.55)">
    <meta name="theme-color" content="#69B756">
    @yield('style')
    <title>@yield('title') {{ __('| JotArt') }}</title>
    <!--=======================================
      All Css Style link
    ===========================================-->
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/user/css/jquery-ui.min.css') }}" rel="stylesheet">

    <!-- Font Awesome for this template -->
    <link href="{{ asset('assets/user/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Flat Icon for this template -->
    <link href="{{ asset('assets/user/vendor/flat-icon/flaticon.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <!-- Animate Css-->
    <link rel="stylesheet" href="{{ asset('assets/user/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/owl.theme.default.min.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/user/vendor/datatable/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/user/vendor/datatable/css/responsive.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/user/css/nice-select.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/user/css/style.css') }}" rel="stylesheet">
    <!-- Extra CSS -->
    <link href="{{ asset('assets/user/css/extra.css') }}" rel="stylesheet">

    <!-- Responsive Css-->
    <link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css') }}">

    @stack('post_styles')

    <!-- FAVICONS -->
    {{-- <link rel="icon" href="{{ asset('assets/user/img/favicon-16x16.png') }}" type="image/png" sizes="16x16')}}">
    <link rel="shortcut icon" href="{{ asset('assets/user/img/favicon-16x16.png') }}" type="image/x-icon')}}">
    <link rel="shortcut icon" href="{{ asset('assets/user/img/favicon.png') }}">

    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="{{ asset('assets/user/img/apple-icon-72x72.png') }}" sizes="72x72" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="{{ asset('assets/user/img/apple-icon-114x114.png') }}" sizes="114x114" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="{{ asset('assets/user/img/apple-icon-144x144.png') }}" sizes="144x144" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="{{ asset('assets/user/img/favicon-16x16.png') }}" /> --}}

    <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
    <script src="https://unpkg.com/moralis/dist/moralis.js"></script>
    <script src="{{ asset('assets/user/js/logic.js') }}"></script>
    <style>
        .btn-grad,
        .theme-button1 {
            color: #ffffff;
            border: none !important;
            -webkit-transition: all 0.4s ease-in-out !important;
            transition: all 0.4s ease-in-out !important;
            background: radial-gradient(100% 100% at 53.13% 0%, #31e7fa 0%, #4477ff 52.6%, #db74ff 100%);
        }

    </style>

    <link rel="stylesheet" href="assets/css/plugins/remixicon.css" />

    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
        .gaming__sidebar {
            position: fixed;
        }

    </style>
</head>

<body class="body ">

    <div class="overflow-hidden">

        @include('user.message')
        <!-- Pre Loader Area start -->
        {{-- <div id="preloader">
            <div id="status"></div>
        </div> --}}
        <!-- Pre Loader Area End -->


        @include('user.menu-new')
        <div class="home__5">
            <div class="d-lg-flex d-md-block">
                @include('user.sidebar')

                <div class="overflow-hidden " style="width: 100%;">
                    <div>
                        {{-- @yield('content') --}}
                        <div class="hero__5">
                            <div class="container">
                                <div class="row align-items-center justify-content-center gx-4">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="swiper_games">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="hero__left slide_1">
                                                        <div class="hero__wrap space-y-20">
                                                            <h2 class="hero__title">
                                                                Trade NFT and Virtual
                                                                In-game Items
                                                            </h2>
                                                            <p class="hero__text txt">Raroin among the
                                                                top six NFT platforms on
                                                                eips.ethereum.org, the DMarket
                                                                marketplace enables millions of gamers
                                                                and Esports fans</p>
                                                            <div>
                                                                <a class="btn btn-grad" href="Marketplace.html">
                                                                    Create Account
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="hero__left slide_2">
                                                        <div class="hero__wrap space-y-20">
                                                            <h2 class="hero__title">
                                                                Discover digital art and collect NFTs
                                                            </h2>
                                                            <p class="hero__text txt">raroin is a shared
                                                                liquidity NFT market smart contract
                                                                which is used by multiple websites to
                                                                provide the users the best possible
                                                                experience.</p>
                                                            <div>
                                                                <a class="btn btn-grad" href="Marketplace.html">View
                                                                    market</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="hero__left slide_3">
                                                        <div class="hero__wrap space-y-20">
                                                            <h2 class="hero__title">
                                                                Pull market data from our digital asset
                                                                API
                                                            </h2>
                                                            <p class="hero__text txt"> raroin is a
                                                                shared
                                                                liquidity NFT market smart contract
                                                                which is used by multiple websites to
                                                                provide the users the best possible
                                                                experience</p>
                                                            <div>
                                                                <a class="btn btn-grad"
                                                                    href="Connect-wallet.html">Connect
                                                                    wallet</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- If we need pagination -->
                                            <div class="swiper-pagination"></div>
                                            <!-- If we need navigation buttons -->
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-button-next"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="box hero__right space-y-20">
                                            <h4>Offers</h4>
                                            <div class="cards space-y-15 position-relative">
                                                <div class="card__item seven mb-0">
                                                    <div class="card_body space-x-10">
                                                        <div class="d-flex space-x-10">
                                                            <div>
                                                                <a href="Item-details.html">
                                                                    <img class="product__img"
                                                                        src="assets/img/all-images/product-one.png"
                                                                        alt="product">
                                                                </a>
                                                            </div>
                                                            <div class="">
                                                                <span
                                                                    class="product__name txt_sm
                                                                    _bold">Clobber
                                                                    Axe</span>
                                                                <span class="offer txt_xs">-20%%</span>
                                                            </div>
                                                        </div>
                                                        <div class="space-x-3">
                                                            <img class="eth__img" src="/assets/img/icons/ETH.svg"
                                                                alt="eth">
                                                            <span class="price txt_sm _bold">365
                                                                ETH</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__item seven mb-0">
                                                    <div class="card_body space-x-10">
                                                        <div class="d-flex space-x-10">
                                                            <div>
                                                                <a href="Item-details.html">
                                                                    <img class="product__img"
                                                                        src="assets/img/all-images/product-two.png"
                                                                        alt="product">
                                                                </a>
                                                            </div>
                                                            <div class="">
                                                                <span
                                                                    class="product__name txt_sm
                                                                    _bold">Clobber
                                                                    Axe</span>
                                                                <span class="offer txt_xs">-20%%</span>
                                                            </div>
                                                        </div>
                                                        <div class="space-x-3">
                                                            <img class="eth__img" src="/assets/img/icons/ETH.svg"
                                                                alt="eth">
                                                            <span class="price txt_sm _bold">365
                                                                ETH</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__item seven mb-0">
                                                    <div class="card_body space-x-10">
                                                        <div class="d-flex space-x-10">
                                                            <div>
                                                                <a href="Item-details.html">
                                                                    <img class="product__img"
                                                                        src="assets/img/all-images/product-three.png"
                                                                        alt="product">
                                                                </a>
                                                            </div>
                                                            <div class="">
                                                                <span
                                                                    class="product__name txt_sm
                                                                    _bold">Clobber
                                                                    Axe</span>
                                                                <span class="offer txt_xs">-20%%</span>
                                                            </div>
                                                        </div>
                                                        <div class="space-x-3">
                                                            <img class="eth__img" src="/assets/img/icons/ETH.svg"
                                                                alt="eth">
                                                            <span class="price txt_sm _bold">365
                                                                ETH</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__item seven mb-0">
                                                    <div class="card_body space-x-10">
                                                        <div class="d-flex space-x-10">
                                                            <div>
                                                                <a href="Item-details.html">
                                                                    <img class="product__img"
                                                                        src="assets/img/all-images/product-one.png"
                                                                        alt="product">
                                                                </a>
                                                            </div>
                                                            <div class="">
                                                                <span
                                                                    class="product__name txt_sm
                                                                    _bold">Clobber
                                                                    Axe</span>
                                                                <span class="offer txt_xs">-20%%</span>
                                                            </div>
                                                        </div>
                                                        <div class="space-x-3">
                                                            <img class="eth__img" src="/assets/img/icons/ETH.svg"
                                                                alt="eth">
                                                            <span class="price txt_sm _bold">365
                                                                ETH</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section__games mt-80">
                            <div class="container">
                                <div class="space-y-30">
                                    <div class="section_head">
                                        <h2 class="section__title">Games</h2>
                                    </div>
                                    <div class="section_body swiper_games2">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper position-relative">
                                            <div class="swiper-slide">
                                                <a class="box card__games game_1" href="#">
                                                    <img class="logo" src="assets/img/logos/game_1.svg">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="box card__games game_2" href="#">
                                                    <img class="logo" src="assets/img/logos/game_2.svg">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="box card__games game_3" href="#">
                                                    <img class="logo" src="assets/img/logos/game_3.svg">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="box card__games game_4" href="#">
                                                    <img class="logo" src="assets/img/logos/game_4.svg">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="box card__games game_5" href="#">
                                                    <img class="logo" src="assets/img/logos/game_5.svg">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="box card__games game_6" href="#">
                                                    <img class="logo" src="assets/img/logos/game_6.svg">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="box card__games game_7" href="#">
                                                    <img class="logo" src="assets/img/logos/game_7.svg">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination"></div>

                                        <!-- If we need navigation buttons -->
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section__deals mt-80">

                            <div class="container">
                                <div class="space-y-30">
                                    <div class="section_head">
                                        <h2 class="section__title">Best CS:GO Deals</h2>
                                    </div>
                                    <div class="swiper_deals">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper position-relative">
                                            <div class="swiper-slide">
                                                <div class="card__item eight">
                                                    <div class="card_body space-y-10">
                                                        <!-- =============== -->
                                                        <div class="card_head space-y-10">
                                                            <span
                                                                class="txt_xs color_text
                                                                    numbering">1/6</span>
                                                            <a href="Item-details.html">
                                                                <img class="product__img"
                                                                    src="assets/img/bg/home5/21.png" alt="">
                                                            </a>
                                                            <div>
                                                                <p class="txt_xs level">Level 3 </p>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width:
                                                                        70%" aria-valuenow="70" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <!-- =============== -->
                                                        <div
                                                            class="card_footer
                                                                justify-content-between">
                                                            <div class="space-y-3">
                                                                <div class="space-x-5 d-flex">
                                                                    <i
                                                                        class="ri-star-fill
                                                                            color_brand txt_xs"></i>
                                                                    <span
                                                                        class="color_brand
                                                                            txt_xs">Karambit</span>
                                                                </div>
                                                                <a href="Profile.html">
                                                                    <p class="product__name txt_sm">Rings Smasher</p>
                                                                </a>
                                                            </div>
                                                            <div class="price__content space-x-5">
                                                                <img class="eth__img"
                                                                    src="assets/img/icons/ETH.svg" alt="eth">
                                                                <p class="price txt_sm _bold">365
                                                                    ETH</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card__item eight">
                                                    <div class="card_body space-y-10">
                                                        <!-- =============== -->
                                                        <div class="card_head space-y-10">
                                                            <span
                                                                class="txt_xs color_text
                                                                    numbering">2/6</span>
                                                            <a href="Item-details.html">
                                                                <img class="product__img"
                                                                    src="assets/img/bg/home5/22.png" alt="">
                                                            </a>
                                                            <div>
                                                                <p class="txt_xs level">Level 3 </p>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width:
                                                                        70%" aria-valuenow="70" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <!-- =============== -->
                                                        <div
                                                            class="card_footer
                                                                justify-content-between">
                                                            <div class="space-y-3">
                                                                <div class="space-x-5 d-flex">
                                                                    <i
                                                                        class="ri-star-fill
                                                                            color_brand txt_xs"></i>
                                                                    <span
                                                                        class="color_brand
                                                                            txt_xs">Karambit</span>
                                                                </div>
                                                                <a href="Profile.html">
                                                                    <p class="product__name txt_sm">Fright Clubs</p>
                                                                </a>
                                                            </div>
                                                            <div class="price__content space-x-5">
                                                                <img class="eth__img"
                                                                    src="assets/img/icons/ETH.svg" alt="eth">
                                                                <p class="price txt_sm _bold">524
                                                                    ETH</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card__item eight">
                                                    <div class="card_body space-y-10">
                                                        <!-- =============== -->
                                                        <div class="card_head space-y-10">
                                                            <span
                                                                class="txt_xs color_text
                                                                    numbering">3/6</span>
                                                            <a href="Item-details.html">
                                                                <img class="product__img"
                                                                    src="assets/img/bg/home5/23.png" alt="">
                                                            </a>
                                                            <div>
                                                                <p class="txt_xs level">Level 3 </p>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width:
                                                                        70%" aria-valuenow="70" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <!-- =============== -->
                                                        <div
                                                            class="card_footer
                                                                justify-content-between">
                                                            <div class="space-y-3">
                                                                <div class="space-x-5 d-flex">
                                                                    <i
                                                                        class="ri-star-fill
                                                                            color_brand txt_xs"></i>
                                                                    <span
                                                                        class="color_brand
                                                                            txt_xs">Karambit</span>
                                                                </div>
                                                                <a href="Profile.html">
                                                                    <p class="product__name txt_sm">Metal Scythe</p>
                                                                </a>
                                                            </div>
                                                            <div class="price__content space-x-5">
                                                                <img class="eth__img"
                                                                    src="assets/img/icons/ETH.svg" alt="eth">
                                                                <p class="price txt_sm _bold">935
                                                                    ETH</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card__item eight">
                                                    <div class="card_body space-y-10">
                                                        <!-- =============== -->
                                                        <div class="card_head space-y-10">
                                                            <span
                                                                class="txt_xs color_text
                                                                    numbering">4/6</span>
                                                            <a href="Item-details.html">
                                                                <img class="product__img"
                                                                    src="assets/img/bg/home5/24.png" alt="">
                                                            </a>
                                                            <div>
                                                                <p class="txt_xs level">Level 3 </p>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width:
                                                                        70%" aria-valuenow="70" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <!-- =============== -->
                                                        <div
                                                            class="card_footer
                                                                justify-content-between">
                                                            <div class="space-y-3">
                                                                <div class="space-x-5 d-flex">
                                                                    <i
                                                                        class="ri-star-fill
                                                                            color_brand txt_xs"></i>
                                                                    <span
                                                                        class="color_brand
                                                                            txt_xs">Karambit</span>
                                                                </div>
                                                                <a href="Profile.html">
                                                                    <p class="product__name txt_sm">Daydream</p>
                                                                </a>
                                                            </div>
                                                            <div class="price__content space-x-5">
                                                                <img class="eth__img"
                                                                    src="assets/img/icons/ETH.svg" alt="eth">
                                                                <p class="price txt_sm _bold">235
                                                                    ETH</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card__item eight">
                                                    <div class="card_body space-y-10">
                                                        <!-- =============== -->
                                                        <div class="card_head space-y-10">
                                                            <span
                                                                class="txt_xs color_text
                                                                    numbering">5/6</span>
                                                            <a href="Item-details.html">
                                                                <img class="product__img"
                                                                    src="assets/img/bg/home5/25.png" alt="">
                                                            </a>
                                                            <div>
                                                                <p class="txt_xs level">Level 3 </p>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width:
                                                                        70%" aria-valuenow="70" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <!-- =============== -->
                                                        <div
                                                            class="card_footer
                                                                justify-content-between">
                                                            <div class="space-y-3">
                                                                <div class="space-x-5 d-flex">
                                                                    <i
                                                                        class="ri-star-fill
                                                                            color_brand txt_xs"></i>
                                                                    <span
                                                                        class="color_brand
                                                                            txt_xs">Karambit</span>
                                                                </div>
                                                                <a href="Profile.html">
                                                                    <p class="product__name txt_sm">Fright Clubs</p>
                                                                </a>
                                                            </div>
                                                            <div class="price__content space-x-5">
                                                                <img class="eth__img"
                                                                    src="assets/img/icons/ETH.svg" alt="eth">
                                                                <p class="price txt_sm _bold">365
                                                                    ETH</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card__item eight">
                                                    <div class="card_body space-y-10">
                                                        <!-- =============== -->
                                                        <div class="card_head space-y-10">
                                                            <span
                                                                class="txt_xs color_text
                                                                    numbering">6/6&quot;</span>
                                                            <a href="Item-details.html">
                                                                <img class="product__img"
                                                                    src="assets/img/bg/home5/26.png" alt="">
                                                            </a>
                                                            <div>
                                                                <p class="txt_xs level">Level 3 </p>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width:
                                                                        70%" aria-valuenow="70" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <!-- =============== -->
                                                        <div
                                                            class="card_footer
                                                                justify-content-between">
                                                            <div class="space-y-3">
                                                                <div class="space-x-5 d-flex">
                                                                    <i
                                                                        class="ri-star-fill
                                                                            color_brand txt_xs"></i>
                                                                    <span
                                                                        class="color_brand
                                                                            txt_xs">Karambit</span>
                                                                </div>
                                                                <a href="Profile.html">
                                                                    <p class="product__name txt_sm">Hot Dogger</p>
                                                                </a>
                                                            </div>
                                                            <div class="price__content space-x-5">
                                                                <img class="eth__img"
                                                                    src="assets/img/icons/ETH.svg" alt="eth">
                                                                <p class="price txt_sm _bold">122
                                                                    ETH</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination"></div>

                                        <!-- If we need navigation buttons -->
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section__deals mt-80">

                            <div class="container">
                                <div class="space-y-30">
                                    <div class="section_head">
                                        <h2 class="section__title">Best TF2 Deals</h2>
                                    </div>
                                    <div class="swiper_deals">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper position-relative">
                                            <div class="swiper-slide">
                                                <div class="card__item eight">
                                                    <div class="card_body space-y-10">
                                                        <!-- =============== -->
                                                        <div class="card_head space-y-10">
                                                            <span
                                                                class="txt_xs color_text
                                                                    numbering">1/6</span>
                                                            <a href="Item-details.html">
                                                                <img class="product__img"
                                                                    src="assets/img/bg/home5/27.png" alt="">
                                                            </a>
                                                        </div>
                                                        <!-- =============== -->
                                                        <div
                                                            class="card_footer
                                                                justify-content-between space-x-20">
                                                            <div class="space-y-3">
                                                                <div class="space-x-5 d-flex">
                                                                    <i
                                                                        class="ri-star-fill
                                                                            color_brand txt_xs"></i>
                                                                    <span
                                                                        class="color_brand
                                                                            txt_xs">Karambit</span>
                                                                </div>
                                                                <a href="Profile.html">
                                                                    <p class="product__name txt_sm">Baba Yoga</p>
                                                                </a>
                                                            </div>
                                                            <div class="price__content space-x-5">
                                                                <img class="eth__img"
                                                                    src="assets/img/icons/ETH.svg" alt="eth">
                                                                <p class="price txt_sm _bold">665
                                                                    ETH</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card__item eight">
                                                    <div class="card_body space-y-10">
                                                        <!-- =============== -->
                                                        <div class="card_head space-y-10">
                                                            <span
                                                                class="txt_xs color_text
                                                                    numbering">2/6</span>
                                                            <a href="Item-details.html">
                                                                <img class="product__img"
                                                                    src="assets/img/bg/home5/28.png" alt="">
                                                            </a>
                                                        </div>
                                                        <!-- =============== -->
                                                        <div
                                                            class="card_footer
                                                                justify-content-between space-x-20">
                                                            <div class="space-y-3">
                                                                <div class="space-x-5 d-flex">
                                                                    <i
                                                                        class="ri-star-fill
                                                                            color_brand txt_xs"></i>
                                                                    <span
                                                                        class="color_brand
                                                                            txt_xs">Karambit</span>
                                                                </div>
                                                                <a href="Profile.html">
                                                                    <p class="product__name txt_sm">Paul Atreides</p>
                                                                </a>
                                                            </div>
                                                            <div class="price__content space-x-5">
                                                                <img class="eth__img"
                                                                    src="assets/img/icons/ETH.svg" alt="eth">
                                                                <p class="price txt_sm _bold">424
                                                                    ETH</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card__item eight">
                                                    <div class="card_body space-y-10">
                                                        <!-- =============== -->
                                                        <div class="card_head space-y-10">
                                                            <span
                                                                class="txt_xs color_text
                                                                    numbering">3/6</span>
                                                            <a href="Item-details.html">
                                                                <img class="product__img"
                                                                    src="assets/img/bg/home5/29.png" alt="">
                                                            </a>
                                                        </div>
                                                        <!-- =============== -->
                                                        <div
                                                            class="card_footer
                                                                justify-content-between space-x-20">
                                                            <div class="space-y-3">
                                                                <div class="space-x-5 d-flex">
                                                                    <i
                                                                        class="ri-star-fill
                                                                            color_brand txt_xs"></i>
                                                                    <span
                                                                        class="color_brand
                                                                            txt_xs">Karambit</span>
                                                                </div>
                                                                <a href="Profile.html">
                                                                    <p class="product__name txt_sm">Ravina</p>
                                                                </a>
                                                            </div>
                                                            <div class="price__content space-x-5">
                                                                <img class="eth__img"
                                                                    src="assets/img/icons/ETH.svg" alt="eth">
                                                                <p class="price txt_sm _bold">935
                                                                    ETH</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card__item eight">
                                                    <div class="card_body space-y-10">
                                                        <!-- =============== -->
                                                        <div class="card_head space-y-10">
                                                            <span
                                                                class="txt_xs color_text
                                                                    numbering">4/6</span>
                                                            <a href="Item-details.html">
                                                                <img class="product__img"
                                                                    src="assets/img/bg/home5/30.png" alt="">
                                                            </a>
                                                        </div>
                                                        <!-- =============== -->
                                                        <div
                                                            class="card_footer
                                                                justify-content-between space-x-20">
                                                            <div class="space-y-3">
                                                                <div class="space-x-5 d-flex">
                                                                    <i
                                                                        class="ri-star-fill
                                                                            color_brand txt_xs"></i>
                                                                    <span
                                                                        class="color_brand
                                                                            txt_xs">Karambit</span>
                                                                </div>
                                                                <a href="Profile.html">
                                                                    <p class="product__name txt_sm">Jil valentine</p>
                                                                </a>
                                                            </div>
                                                            <div class="price__content space-x-5">
                                                                <img class="eth__img"
                                                                    src="assets/img/icons/ETH.svg" alt="eth">
                                                                <p class="price txt_sm _bold">235
                                                                    ETH</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card__item eight">
                                                    <div class="card_body space-y-10">
                                                        <!-- =============== -->
                                                        <div class="card_head space-y-10">
                                                            <span
                                                                class="txt_xs color_text
                                                                    numbering">5/6</span>
                                                            <a href="Item-details.html">
                                                                <img class="product__img"
                                                                    src="assets/img/bg/home5/31.png" alt="">
                                                            </a>
                                                        </div>
                                                        <!-- =============== -->
                                                        <div
                                                            class="card_footer
                                                                justify-content-between space-x-20">
                                                            <div class="space-y-3">
                                                                <div class="space-x-5 d-flex">
                                                                    <i
                                                                        class="ri-star-fill
                                                                            color_brand txt_xs"></i>
                                                                    <span
                                                                        class="color_brand
                                                                            txt_xs">Karambit</span>
                                                                </div>
                                                                <a href="Profile.html">
                                                                    <p class="product__name txt_sm">Potassius</p>
                                                                </a>
                                                            </div>
                                                            <div class="price__content space-x-5">
                                                                <img class="eth__img"
                                                                    src="assets/img/icons/ETH.svg" alt="eth">
                                                                <p class="price txt_sm _bold">265
                                                                    ETH</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card__item eight">
                                                    <div class="card_body space-y-10">
                                                        <!-- =============== -->
                                                        <div class="card_head space-y-10">
                                                            <span
                                                                class="txt_xs color_text
                                                                    numbering">6/6&quot;</span>
                                                            <a href="Item-details.html">
                                                                <img class="product__img"
                                                                    src="assets/img/bg/home5/32.png" alt="">
                                                            </a>
                                                        </div>
                                                        <!-- =============== -->
                                                        <div
                                                            class="card_footer
                                                                justify-content-between space-x-20">
                                                            <div class="space-y-3">
                                                                <div class="space-x-5 d-flex">
                                                                    <i
                                                                        class="ri-star-fill
                                                                            color_brand txt_xs"></i>
                                                                    <span
                                                                        class="color_brand
                                                                            txt_xs">Karambit</span>
                                                                </div>
                                                                <a href="Profile.html">
                                                                    <p class="product__name txt_sm">The Batman</p>
                                                                </a>
                                                            </div>
                                                            <div class="price__content space-x-5">
                                                                <img class="eth__img"
                                                                    src="assets/img/icons/ETH.svg" alt="eth">
                                                                <p class="price txt_sm _bold">132
                                                                    ETH</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination"></div>

                                        <!-- If we need navigation buttons -->
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section__buy__sell mt-80">
                            <div class="container">
                                <div class="row justify-content-center sm:space-y-30">
                                    <div class="col-md-6 col-sm-10">
                                        <div class="box space-y-50">
                                            <div class="space-y-10">
                                                <h2>Buyers</h2>
                                                <p>ItemHerald has a wide range of items
                                                    available, from CS:GO to DotA to
                                                    TF2.</p>
                                            </div>
                                            <div>
                                                <a href="Marketplace.html" class="btn btn-grad">To Market</a>
                                                <img class="icon" src="assets/img/icons/Buyers.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-10">
                                        <div class="box space-y-50">
                                            <div class="space-y-10">
                                                <h2>Sellers</h2>
                                                <p>ItemHerald is the easiest and most
                                                    secure way to sell your skins.</p>
                                            </div>
                                            <div>
                                                <a href="Marketplace.html" class="btn btn-grad">Start Selling</a>
                                                <img class="icon" src="assets/img/icons/Sellers.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section__shop mt-80">

                            <div class="container">
                                <div class="space-y-30">
                                    <h2 class="section__title">Mintables</h2>
                                    
                                    <div class="row mb-30_reset">
                                        <?php 
                                        $items = App\Model\Mintable::where('status', '!=', SOLD)->get();
                                        // print_r($items);
                                        foreach ($items as $data) {
                                           
                                        ?>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card__item eight">

                                                <div class="card_body space-y-10">
                                                    <!-- =============== -->
                                                    <div class="card_head space-y-10">
                                                        {{-- {{$data->price_dollar}}
                                                        <span class="txt_xs color_text
                                                        numbering">$</span> --}}
                                                        <div class="price__content space-x-5">
                                                            <img class="eth__img d-inline" style="max-width: 25px" src="assets/img/icons/ETH.svg" alt="eth">
                                                            <p class="price txt_sm _bold d-inline">{{$data->price_dollar}}
                                                                ETH</p>
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
                    @include('user.modal')

                    @include('user.footer-new')
                </div>
            </div>
        </div>



    </div>
    <!-- 🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈 SCRIPTS -->
    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/sticky-sidebar.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
    <script src="https://unpkg.com/moralis/dist/moralis.js"></script>
    <script src="assets/js/nft.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>



<!-- Bootstrap core JavaScript -->
<script src="{{ asset('assets/user/vendor/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/user/vendor/jquery/popper.min.js') }}"></script>
<script src="{{ asset('assets/user/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- ==== Plugin JavaScript ==== -->

<script src="{{ asset('assets/user/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<script src="{{ asset('assets/user/js/jquery-ui.min.js') }}"></script>

<!--WOW JS Script-->
<script src="{{ asset('assets/user/js/wow.min.js') }}"></script>

<!--WayPoints JS Script-->
<script src="{{ asset('assets/user/js/waypoints.min.js') }}"></script>

<!--Counter Up JS Script-->
<script src="{{ asset('assets/user/js/jquery.counterup.min.js') }}"></script>

<script src="{{ asset('assets/user/js/owl.carousel.min.js') }}"></script>

<!--Countdown Script-->
@if (Route::is('login'))
    <script src="{{ asset('assets/user/js/multi-countdown.js') }}"></script>
@endif

<!--niceSelect JS Script-->
<script src="{{ asset('assets/user/js/jquery.nice-select.min.js') }}"></script>

<script src="{{ asset('assets/user/js/TweenMax.min.js') }}"></script>

<!-- Range Slider -->
<script src="{{ asset('assets/user/js/price_range_script.js') }}"></script>

<!-- Menu js -->
<script src="{{ asset('assets/user/js/menu.js') }}"></script>

<!-- Datatables js -->
<script src="{{ asset('assets/user/vendor/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/user/vendor/datatable/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/user/vendor/datatable/js/dataTables.responsive.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('assets/user/js/custom.js') }}"></script>

<script src="{{ asset('assets/user/js/qrcode.min.js') }}"></script>

<!-- Bootstrap core JavaScript -->
@include('user.common')
@yield('script')

</body>

</html>
