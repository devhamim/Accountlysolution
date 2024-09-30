<footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-bg clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="first-footer">
            <div class="row">
                <div class="widget-area col-sm-3 col-md-3 col-lg-3">
                    <div class="widget newsletter_widget clearfix">
                        <h3>Sign up to <br> Get Latest Updates</h3>
                    </div>
                </div>
                <div class="widget-area col-sm-9 col-md-9 col-lg-5">
                    {{-- <form id="subscribe-form" class="newsletter-form" method="post" action="#"
                        data-mailchimp="true">
                        <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                            <p>
                                <input type="email" name="email" placeholder="Your Email Address..."
                                    required="">
                            </p>
                            <p>
                                <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Subscribe Now!
                                    <i class="flaticon flaticon-right-arrow"></i>
                                </button>
                            </p>
                        </div>
                        <div id="subscribe-msg"></div>
                    </form> --}}
                </div>
                <div class="widget-area col-sm-12 col-md-12 col-lg-4 text-right">
                    <div class="featured-box float-right res-991-padding_top20 ">
                        <div class="featured-title">
                            <h3>Call Us On</h3>
                            @if ($setting->first()->number != null)
                                <p>+88{{ $setting->first()->number }}</p>
                            @endif
                        </div>
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon  flaticon-phone-call-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="row">
                <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="widget widget_text  clearfix">
                        <div class="footer-logo">
                            @if ($setting->first()->footer_logo != null)
                                <a href="{{ url('/') }}">
                                    <img id="logo-img-1" class="img-center standardlogo" src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt="logo-img">
                                </a>
                            @endif

                        </div>
                        @if ( $setting->first()->about != null)
                            <p>{{ $setting->first()->about }}</p>
                        @endif
                    </div>
                    <div class="widget d-flex padding_top15 res-575-margin_bottom20">
                        <h3 class="widget-title margin_right10">Social Share:</h3>
                        <div class="social-icons">
                            <ul class="list-inline d-flex">
                                <li>
                                    <a class="tooltip-top" target="_blank"
                                        href="{{ $setting->first()->facebook }}"
                                        data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="tooltip-top" target="_blank"
                                        href="{{ $setting->first()->twitter }}" data-tooltip="Twitter"><i
                                            class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class=" tooltip-top" target="_blank"
                                        href="{{ $setting->first()->instagram }}"
                                        data-tooltip="instagram"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="tooltip-top" target="_blank"
                                        href="{{ $setting->first()->linkedin }}" data-tooltip="linkedin"><i
                                            class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="widget widget_nav_menu clearfix">
                        <h3 class="widget-title">Explore</h3>
                        <ul class="menu-footer-quick-links">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('our.blog') }}">About</a></li>
                            <li><a href="{{ route('services', $services->first()->slug) }}">Service</a></li>

                        </ul>
                    </div>
                </div>
                <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="widget widget_nav_menu res-991-margin_top30 clearfix">
                        <h3 class="widget-title">Useful Links</h3>
                        <ul class="menu-footer-quick-service-links">
                            <li><a href="{{ route('our.blog') }}">Blog</a></li>
                            <li><a href="{{ route('our.privacy.policy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('our.privacy.policy') }}">Terms and Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="widget widget-recent-post res-991-margin_top30 clearfix">
                        <h3 class="widget-title">Recent Posts</h3>
                        <ul class="widget-post ttm-recent-post-list">
                        @foreach ($blogs->take(2) as $blog)
                            <li>
                                <a href="{{ route('our.blog.details', $blog->slug) }}"><img class="img-fluid"
                                        src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="post-img"></a>
                                <div class="post-detail">
                                    <span class="post-date"><i class="fa fa-calendar"></i>{{ $blog->created_at->format('d,M,Y') }}</span>
                                    <a href="{{ route('our.blog.details', $blog->slug) }}">{{ $blog->title }}</a>

                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text ">
            <div class="row copyright text-center">
                <div class="col-lg-12 col-md-12 col-sm-12 d-md-flex d-sm-block justify-content-center">
                    @if ($setting->first()->footer != null)
                        <span>{{ $setting->first()->footer }}  Design & Development by <a href="https://nugortech.com/" class="text-primary">Nugortechit</a></span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
