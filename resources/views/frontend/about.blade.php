@extends('frontend.layout.app')

@section('content')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">About Us</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>Home</a>
                        </span>
                        <span>About Us One</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->

<!--site-main start-->
<div class="site-main">
    <!-- aboutus-section -->
    @if ( $abouts->first() != null)
    <section class="ttm-row aboutus-section ttm-bgcolor-white clearfix">
        <div class="container">
            <div class="row row-equal-height"><!-- row -->
                <div class="col-lg-6 col-md-7 col-sm-12">
                    <div class="ttm_single_image-wrapper">
                        <img class="img-fluid" src="{{ asset('uploads/about') }}/{{ $abouts->first()->image }}" title="single-img-one"
                            alt="single-img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 res-1024-w-100">
                    <div
                        class="padding_left30 res-1024-padding_lr15 res-1024-padding_top40 padding_top20
                ">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h3>ABOUT INVESS</h3>
                                <h2 class="title res-1024-br-none">{{ $abouts->first()->title }}</h2>
                            </div>
                            <div class="title-desc padding_right40">
                                <p>{!! $abouts->first()->description !!}
                                </p>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div
                            class="ttm-fid inside ttm-fid-without-icon ttm-highlight-fid style2 ttm-bgcolor-white">
                            <div class="ttm-fid-contents">
                                <h4 class="ttm-fid-inner">
                                    <span data-appear-animation="animateDigits" data-from="0" data-to="{{ $abouts->first()->subtitle }}"
                                        data-interval="1" data-before="" data-before-style="sub"
                                        data-after="+" data-after-style="sup" class="numinate">{{ $abouts->first()->subtitle }}
                                    </span>
                                    <span>+</span>
                                </h4>
                                <h3 class="ttm-fid-title top-15">Years </h3>
                            </div>
                            <div class="ml_15">
                                <h3 class="ttm-fid-title">Of Our Work Experience</h3>
                            </div>
                            <div class="ttm_single_image-wrapper">
                                <img class="img-center" src="{{ asset('uploads/setting') }}/{{ $settings->first()->logo }}" title="single-img-one"
                                    alt="single-img">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="ttm_single_image-wrapper res-575-margin_top30">
                        <img class="img-fluid" src="{{ asset('uploads/about') }}/{{ $abouts->first()->second_image }}" title="single-img-eight"
                            alt="single-img">
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <ul class="ttm-list ttm-list-style-icon style2 res-991-margin_top20">
                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">Consectetur
                                adipisicing elit sed do eiusmod tempor.</span></li>
                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">Sed ut
                                perspiciatis unde omnis iste natus error sit voluptatem</span></li>
                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">Ut enim ad
                                minim veniam quis nostrud exercitation ullamco laboris</span></li>
                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">Consectetur
                                adipisicing elit sed do eiusmod tempor.</span></li>
                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">Incididunt ut
                                labore et dolore magna aliqua</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- aboutus-section end -->
    @endif

    <!-- services-section -->
    <section class="ttm-row services-section ttm-bgcolor-grey  clearfix">
        <div class="container">
            <!--row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>HOW WE WORK</h3>
                            <h2 class="title">Invess Working Process!</h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <!--row -->
            <div class="row featuredbox-number">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content style13">
                        <div class="featured-icon text-center">
                            <div
                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-xl ttm-icon_element-color-white ttm-icon_element-style-round">
                                <i class="flaticon flaticon-tv-monitor"></i>
                            </div>
                            <span class="fea_num ttm-textcolor-darkgrey">
                                <i class="ttm-num ti-info"></i>
                            </span>
                        </div>
                        <div class="featured-content text-center">
                            <div class="featured-title">
                                <h3>LLP Registration</h3>
                            </div>
                            <div class="featured-desc">
                                LLP can starts it's business immediately after issuing of the Certification
                            </div>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content style13">
                        <div class="featured-icon text-center">
                            <div
                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-xl ttm-icon_element-color-white ttm-icon_element-style-round">
                                <i class="flaticon flaticon-money-1"></i>
                            </div>
                            <span class="fea_num ttm-textcolor-darkgrey">
                                <i class="ttm-num ti-info"></i>
                            </span>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Accounting Servies</h3>
                            </div>
                            <div class="featured-desc">
                                Expert accountants will look deep bit your company accounts to give
                            </div>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content style13">
                        <div class="featured-icon text-center">
                            <div
                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-xl ttm-icon_element-color-white ttm-icon_element-style-round">
                                <i class="flaticon flaticon-tax"></i>
                            </div>
                            <span class="fea_num ttm-textcolor-darkgrey">
                                <i class="ttm-num ti-info"></i>
                            </span>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>GST Registration</h3>
                            </div>
                            <div class="featured-desc">
                                A unique TIN & service tax registration number by Central Government
                            </div>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
            </div><!-- row end -->
        </div>
    </section><!-- services-section end  -->


    <section
        class="ttm-row padding_zero-section position-relative padding_top50 ttm-bgcolor-grey bg-img6 ttm-bg ttm-bgimage-yes clearfix">
        <div class="container">
            <div class="row no-gutters"><!-- row -->
                <div class="col-lg-6">
                    <!-- col-img-img-one -->
                    <div class="ttm-col-bgimage-yes ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-skincolor ttm-left-span spacing-1">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                            <div class="ttm-bg-layer-inner"></div>
                        </div>
                        <div class="layer-content">
                            <div class="padding_bottom30 res-991-padding_bottom0">
                                <!-- section title -->
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h3>TESTIMONIAL</h3>
                                        <h2 class="title">What Our Clients Say!</h2>
                                    </div>
                                </div><!-- section title end -->
                                <div class="row slick_slider slick-arrows-style3" data-slick='{"slidesToShow": 1, "slidesToScroll": 1,"arrows":true,"dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1360,"settings":{"slidesToShow": 1}}, {"breakpoint":1100,"settings":{"slidesToShow": 1}}, {"breakpoint":992,"settings":{"slidesToShow": 1}}, {"breakpoint":630,"settings":{"slidesToShow": 1}}]}'>
                                    @foreach ($customerSays as $customer)
                                        <div class="col-12">
                                            <!-- testimonials -->
                                            <div class="testimonials style1">
                                                <div class="testimonial-content">
                                                    <blockquote>{{ $customer->description }}
                                                    </blockquote>
                                                    <div class="ttm-author-box">
                                                        <div class="testimonial-avatar">
                                                            <div class="testimonial-img">
                                                                <img class="img-center"
                                                                    src="{{ asset('uploads/customersay') }}/{{ $customer->image }}"
                                                                    alt="testimonial-img">
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-caption">
                                                            <h4>{{ $customer->name }}</h4>
                                                            <label>{{ $customer->post }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- testimonials end -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div><!-- col-img-img-one -->
                </div>
                <div class="col-lg-6">
                    <!-- col-img-img-two -->
                    <div
                        class="col-bg-img-twelve ttm-col-bgimage-yes ttm-bg ttm-right-span mt_50 res-991-margin_top0">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content"></div>
                    </div>

                    <!-- col-img-img-two responsive-img-->
                    <img src="{{ asset('frontend') }}/images/bg-img/col-bgimage-12.png" class="ttm-equal-height-image"
                        alt="bg-image">
                </div>
            </div><!-- row -->
        </div>
    </section>

    <!-- team-section -->
    <section
        class="ttm-row team-section bg-img6 ttm-bg ttm-bgimage-yes ttm-bgcolor-white mt_60 res-991-margin_top0 padding_top150 clearfix">
        <div class="container">
            <!--row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>OUR TEAM</h3>
                            <h2 class="title">Our Financial Expertise</h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <!-- row -->
            <div class="row slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":1199,"settings": {"slidesToShow": 4}}, {"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":767,"settings":{"slidesToShow": 1}}]}'>
                @foreach ($teams as $team)
                    <div class="ttm-box-col-wrapper col-lg-3 col-md-6 col-sm-12">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team style1">
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <div class="media-block">
                                        <a class="media-btn" tabindex="0"><i class="ti ti-plus"></i></a>
                                        <ul class="social-icons list-inline">
                                            <li class="social-facebook"><a href="{{ $team->facebook }}" target="_blank" tabindex="0"><i class="ti ti-facebook"></i></a></li>
                                            <li class="social-linkedin"><a href="{{ $team->linkedin }}" target="_blank" tabindex="0"><i class="ti ti-linkedin"></i></a></li>
                                            <li class="social-instagram"><a href="{{ $team->instagram }}" target="_blank" tabindex="0"><i class="ti ti-instagram"></i></a></li>
                                            <li class="social-instagram"><a href="{{ $team->github }}" target="_blank" tabindex="0"><i class="ti ti-github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{ asset('uploads/team') }}/{{ $team->image }}" alt="image">
                                </div>
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h3><a>{{ $team->name }}</a></h3>
                                </div>
                                <div class="team-position">{{ $team->post }}</div>
                                {{-- <a href="team-details.html"
                                    class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right fs-18 rajdhani">
                                    <strong>View Profile<i class="flaticon flaticon-right-arrow"></i></strong>
                                </a> --}}
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- team-section end -->
        <!-- skill-section -->
    <section class="ttm-row skill-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row"><!-- row -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- section title -->
                    <div class="section-title clearfix">
                        <div class="title-header">
                            <h3>OUR SKILLS</h3>
                            <h2 class="title">Professional Main Services</h2>
                        </div>
                        <div class="title-desc padding_right35">
                            <p>We provide an extensive range of professional services and a high degree of
                                specialization. See our exceptional service.
                            </p>
                            <div class="border-bottom margin_bottom10  margin_top25"></div>
                        </div>
                    </div><!-- section title end -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 res-767-mt-20">
                            <!-- featured-iconbox -->
                            <div class="featured-icon-box icon-align-before-title text-left style5">
                                <div class="featured-icon">
                                    <div
                                        class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-presentation"></i>
                                    </div>
                                </div>
                                <div class="featured-title">
                                    <h3>Financial Services</h3>
                                    <span>25+ years experience</span>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-desc">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                        <a href="#"
                                            class="ttm-btn btn-inline ttm-btn-color-dark ttm-icon-btn-right padding_right10 fs-18 rajdhani">
                                            <strong>View More<i
                                                    class="flaticon flaticon-right-arrow"></i></strong>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- featured-iconbox end-->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 res-767-mt-20">
                            <!-- featured-iconbox -->
                            <div class="featured-icon-box icon-align-before-title text-left style5">
                                <div class="featured-icon">
                                    <div
                                        class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-money-bag"></i>
                                    </div>
                                </div>
                                <div class="featured-title">
                                    <h3>Investment Tips</h3>
                                    <span>Estimating the capital</span>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-desc">
                                        <p>We build a diversified and investment portfolio for over our client.
                                        </p>
                                        <a href="#"
                                            class="ttm-btn btn-inline ttm-btn-color-dark ttm-icon-btn-right padding_right10 fs-18 rajdhani">
                                            <strong>View More<i
                                                    class="flaticon flaticon-right-arrow"></i></strong>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- featured-iconbox end-->
                        </div>
                    </div>
                    <div class="padding_top30">
                        <!-- ttm-progress-bar -->
                        <div class="ttm-progress-bar style1" data-percent="85%">
                            <div class="progressbar-title">Investment Plan</div>
                            <div class="progress-bar-inner">
                                <div class="progress-bar progress-bar-color-bar_skincolor"
                                    style="width: 85%;"></div>
                            </div>
                            <div class="progress-bar-percent" data-percentage="85">85%</div>
                        </div><!-- ttm-progress-bar end -->
                        <!-- ttm-progress-bar -->
                        <div class="ttm-progress-bar style1 res-991-padding_bottom30" data-percent="80%">
                            <div class="progressbar-title">Consulting Experience</div>
                            <div class="progress-bar-inner">
                                <div class="progress-bar progress-bar-color-bar_skincolor"
                                    style="width: 80%;"></div>
                            </div>
                            <div class="progress-bar-percent" data-percentage="80">80%</div>
                        </div><!-- ttm-progress-bar end -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="col-bg-img-five ttm-col-bgimage-yes ttm-bg break-991-colum">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <div class="d-flex align-items-center">
                                <div
                                    class="ttm-bgcolor-skincolor p-40 mr_30 margin_top30 res-991-margin_top0 res-991-margin_right0">
                                    <div class="ttm-play-icon-btn margin_top10">
                                        <div class="ttm-play-icon-animation">
                                            <a href="{{ $videos->first()->link }}" target="_self"
                                                class="ttm_prettyphoto">
                                                <div
                                                    class="ttm-icon ttm-icon_element-fill  ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                                    <i class="fa fa-play ttm-textcolor-white"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-overlay-content">
                                <div class="ttm-bottom-view-overlay d-flex">
                                    <span class="ttm-textcolor-white font-weight-500">
                                        <strong class="font-weight-600 highlight-line position-relative">99.9%
                                            Customer satisfaction</strong>
                                        based on
                                        <strong class="ttm-textcolor-skincolor font-weight-600">600+</strong>
                                        <strong class="font-weight-600">Reviews</strong> and
                                        <strong class="ttm-textcolor-skincolor font-weight-600">14,530</strong>
                                        <strong class="font-weight-600">Objective</strong> Resource
                                        <span class="text-left ttm-textcolor-skincolor fs-15 margin_left10">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- skill-section end -->
</div>
@endsection
