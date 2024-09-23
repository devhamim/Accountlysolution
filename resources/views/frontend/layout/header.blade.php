<header id="masthead" class="header ttm-header-style-01">
    <!-- ttm-topbar-wrapper -->
    <div class="top_bar ttm-bgcolor-darkgrey clearfix">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 d-flex flex-row align-items-center justify-content-center">
                    <div class="top_bar_contact_item pl-0">
                        <div class="top_bar_icon"><i class="fa fa-map-o"></i></div>
                            @if ($setting->first()->address != null)
                                Address:<span class="font-weight-500 text-white"> {{ $setting->first()->address }}</span>
                            @endif
                    </div>
                    <div class="top_bar_contact_item ml-auto font-weight-bold padding_left15">

                    </div>
                    <div class="top_bar_contact_item font-weight-bold">
                        <div class="top_bar_icon ttm-highlight-right"><i class="ti ti-email"></i></div>
                        @if ($setting->first()->email != null)
                            Email: <a href="#" class="font-weight-500 text-white">{{ $setting->first()->email }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-topbar end -->
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu ttm-bgcolor-transpatant">
        <div class="site-header-menu-inner ttm-stickable-header ">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex flex-row align-items-center">
                            <!-- site-branding -->
                            <div class="site-branding mr-auto">
                                <a class="home-link" href="{{ url('/') }}" title="Invess" rel="home">
                                    @if ($setting->first()->logo != null)
                                        <img id="logo-img" class="img-center standardlogo" src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="logo-img">
                                    @endif
                                </a>

                            </div><!-- site-branding end -->
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box">
                                    <span class="menubar-inner"></span>
                                </span>
                            </div>
                            <!-- menu -->
                            <nav class="main-menu menu-mobile" id="menu">
                                <ul class="menu">
                                    <li class="mega-menu-item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="mega-menu-item"><a href="{{ route('about_us') }}">About</a></li>
                                    {{-- <li class="mega-menu-item"><a href="{{ route('services') }}">Service</a></li> --}}
                                    <li class="mega-menu-item"><a href="#" class="mega-menu-link">Services</a>
                                        <ul class="mega-submenu">
                                            @foreach ($services as $service)
                                                <li><a href="{{ route('services', $service->slug) }}">{{ $service->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item"><a href="{{ route('our.blog') }}">Blog</a></li>
                                    <li class="mega-menu-item"><a href="{{ route('contect') }}">Contect</a></li>
                                </ul>
                            </nav>
                            <div
                                class="header_extra ttm-textcolor-white d-flex flex-row align-items-center justify-content-end">
                                {{-- <div class="header_search">
                                    <a href="#" class="btn-default search_btn"><i
                                            class="ti ti-search"></i></a>
                                    <div class="header_search_content">
                                        <form id="searchbox" method="get" action="#">
                                            <input class="search_query" type="text" id="search_query_top"
                                                name="s" placeholder="Enter Keyword" value="">
                                            <button type="submit" class="btn close-search"><i
                                                    class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div> --}}
                                <div class="header_btn ttm-textcolor-skincolor">
                                    <a class="ttm-btn btn-inline ttm-btn-color-skincolor"
                                        href="{{ route('contect') }}">Get A Quote</a>
                                </div>
                            </div>

                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- site-header-menu end-->
</header>
