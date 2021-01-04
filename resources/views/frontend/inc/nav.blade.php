<!-- Top Bar -->
<div class="top-navbar topbar border-bottom border-soft-secondary z-1035 d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col">
               
            </div>
<div class="col-4 text-center d-none d-lg-block">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                            <a href="javascript:void(0);" class="text-reset py-2 d-inline-block text_bold">{{ translate('KulPay')}}</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="text-reset py-2 d-inline-block text_bold">{{ translate('i-Sure')}}</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="text-reset py-2 d-inline-block text_bold">{{ translate('K-Airtime')}}</a>
                        </li>
                </ul>
            </div>
            <div class="col-4 text-right d-none d-lg-block">
                <ul class="list-inline mb-0">
                    @auth
                        @if(isAdmin())
                            <li class="list-inline-item mr-3">
                                <a href="{{ route('admin.dashboard') }}" class="text-reset py-2 d-inline-block text_bold"> <i class="mdi mdi-monitor-dashboard"></i> &nbsp; {{ translate('Admin Dashboard')}}</a>
                            </li>
                        @else
                            <li class="list-inline-item mr-3">
                                <a href="{{ route('dashboard') }}" class="text-reset py-2 d-inline-block text_bold"><i class="mdi mdi-monitor-dashboard"></i> &nbsp; {{ translate('My Dashboard')}}</a>
                            </li>
                        @endif
                         <li class="list-inline-item">
                            <a href="{{ route('logout') }}" class="text-reset py-2 d-inline-block text_bold"> <i class="mdi mdi-logout-variant"></i> &nbsp; {{ translate('Logout')}}</a>
                        </li>
                    @endauth
                       
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END Top Bar -->
<header class="@if(get_setting('header_stikcy') == 'on') sticky-top @endif bg-white border-bottom shadow-sm">
    <div class="position-relative logo-bar-area">
        <div class="container">
            <div class="d-flex align-items-center">
                @if(Route::currentRouteName() != 'home')
                <div class="d-none d-xl-block align-self-stretch category-menu-icon-box ml-auto mr-0">
                    <div class="h-100 d-flex align-items-center" id="category-menu-icon">
                            <span class="mdi mdi-menu text_bold" style="font-size: 2em ; padding-right: 1em;"></span>
                    </div>
                </div>
            @endif
                <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-left">
                    <a class="d-block py-20px" href="{{ route('home') }}">
                        @php
                            $header_logo = get_setting('header_logo');
                        @endphp
                        @if($header_logo != null)
                            <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}" class="mw-100" height="40">
                        @else
                            <img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" class="mw-100" height="40">
                        @endif
                    </a>
                </div>
                <div class="d-lg-none ml-auto mr-0">
                    <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                        <i class="las la-search la-flip-horizontal la-2x"></i>
                    </a>
                </div>

                <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white">
                    <div class="position-relative flex-grow-1">
                        <form action="{{ route('search') }}" method="GET" class="stop-propagation">
                            <div class="d-flex position-relative align-items-center">
                                <div class="d-lg-none" data-toggle="class-toggle" data-target=".front-header-search">
                                    <button class="btn px-2" type="button"><i class="la la-2x la-long-arrow-left"></i></button>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="border-0 border-lg form-control text_bold_search" id="search" name="q" placeholder=" {{translate('Search products, brands and categories')}}" aria-label="search" autocomplete="off">
                                    <div class="input-group-append d-none d-lg-block">
                                        &nbsp;
                                        <button class="btn btn-primary rbutton" type="submit">
                                            <span class="text_bold_white">SEARCH</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100" style="min-height: 200px">
                            <div class="search-preloader absolute-top-center">
                                <div class="dot-loader"><div></div><div></div><div></div></div>
                            </div>
                            <div class="search-nothing d-none p-3 text-center fs-16">

                            </div>
                            <div id="search-content" class="text-left">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-none d-lg-none ml-3 mr-0">
                    <div class="nav-search-box">
                        <a href="#" class="nav-box-link">
                            <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                        </a>
                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0 text_bold">
                    <div class="" id="compare">
                        @include('frontend.partials.compare')
                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0 text_bold">
                    <div class="" id="wishlist">
                        @include('frontend.partials.wishlist')
                    </div>
                </div>

                <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0 text_bold" data-hover="dropdown">
                    <div class="nav-cart-box dropdown h-100" id="cart_items">
                        @include('frontend.partials.cart')
                    </div>
                </div>

            </div>
        </div>
        @if(Route::currentRouteName() != 'home')
        <div class="hover-category-menu position-absolute w-100 top-100 left-0 left-0 d-none z-3" id="hover-category-menu">
            <div class="container">
                <div class="row gutters-10 position-relative">
                    <div class="col-lg-3 position-static">
                        @include('frontend.partials.category_menu')
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</header>
