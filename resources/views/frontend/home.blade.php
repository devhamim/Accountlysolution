@extends('frontend.layout.app')

@section('content')
<!-- Banner -->
<div class="banner_slider banner_slider_1 banner_slider_wide">
    @foreach ($banners as $banner)
        <div class="slide s1">
            <div class="slide_img" style="background-image: url({{ asset('uploads/banner') }}/{{ $banner->image }});">
            </div>
            <div class="slide__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slide__content--headings ttm-textcolor-white text-left">
                                <h3 data-animation="fadeInRight" data-delay="0.2s">
                                    <span class="ttm-textcolor-skincolor">*</span>{{ $banner->title }}
                                </h3>
                                {{-- <h2 data-animation="fadeInRight" data-delay="0.5s">Giving you a <br> <span
                                        class="ttm-textcolor-skincolor"> Financial </span> Power.
                                </h2> --}}
                                <p data-animation="fadeInRight" data-delay="1s">{{ $banner->description }}</p>
                                <div class="d-inline-block margin_top30 res-575-margin_top0"
                                    data-animation="fadeInUp" data-delay="1.4s">
                                    <a class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor"
                                        href="{{ route('about_us') }}">Discover More<i
                                            class="flaticon flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- Banner end-->
<!--site-main start-->
<div class="site-main">

    <!-- aboutus-section -->
    <section class="ttm-row aboutus-section ttm-bgcolor-white clearfix">
        <div class="container">
            <div class="row"><!-- row -->
                <div class="col-lg-5 col-md-7 col-sm-12">
                    <div class="ttm_single_image-wrapper padding_right30 res-991-padding_right0">
                        <img class="img-fluid" src="{{ asset('uploads/about') }}/{{ $abouts->first()->image }}" title="single-img-one"
                            alt="single-img">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 res-1024-w-100">
                    <!-- section title -->
                    <div class="section-title res-1024-padding_top40 clearfix">
                        <div class="title-header">
                            <h3>{{ $abouts->first()->subtitle }}</h3>
                            <h2 class="title">{{ $abouts->first()->title }}</h2>
                        </div>
                        <div class="title-desc padding_right35 res-991-padding_right0">
                            <p>{!! $abouts->first()->description !!}
                                <strong><a href="{{ route('about_us') }}"> Read More!</a></strong>
                            </p>
                        </div>
                    </div><!-- section title end -->
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="">
                                <!-- ttm-fid -->
                                <div
                                    class="ttm-fid inside ttm-fid-without-icon ttm-highlight-fid ttm-bgcolor-skincolor">
                                    <div class="ttm-fid-contents">
                                        <h4 class="ttm-fid-inner">
                                            <span data-appear-animation="animateDigits" data-from="0"
                                                data-to="25" data-interval="5" data-before=""
                                                data-before-style="sub" data-after="+" data-after-style="sup"
                                                class="numinate">25
                                            </span>
                                            <span>+</span>
                                        </h4>
                                        <h3 class="ttm-fid-title">Years<br> Experience</h3>
                                    </div>
                                </div>
                                <div class="featured-icon-box icon-align-before-content style1">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-graph"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h2>79%</h2>
                                            <span>Success Rate</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-6">
                            <div class="ttm_single_image-wrapper res-575-margin_top30">
                                <img class="img-fluid" src="{{ asset('frontend') }}/images/single-img-2.jpg" title="single-img-two"
                                    alt="single-img" width="334" height="258">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- aboutus-section end -->

    <section
        class="ttm-row services-section bg-img1 ttm-bg ttm-bgimage-yes ttm-bgcolor-grey padding_bottom125  clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <!--row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>WHAT WE DO</h3>
                            <h2 class="title">Where Dreams Get Wings!</h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <!--row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="ttm-bgcolor-white featured-icon-box icon-align-top-content box-shadow style2">
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-style-round ttm-icon_element-size-md">
                                <i class="flaticon flaticon-checklist"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="financial-advise.html" tabindex="-1">Financial Planning</a></h3>
                            </div>
                            <div class="featured-desc">
                                The process of estimating determining process of planning phase.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ttm-bgcolor-white featured-icon-box icon-align-top-content box-shadow style2">
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-style-round ttm-icon_element-size-md">
                                <i class="flaticon flaticon-money-1"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="accounting-service.html" tabindex="-1">Investment Solution</a>
                                </h3>
                            </div>
                            <div class="featured-desc">
                                We build a diversified and investment portfolio for all over our client.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ttm-bgcolor-white featured-icon-box icon-align-top-content box-shadow style2">
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-style-round ttm-icon_element-size-md">
                                <i class="flaticon flaticon-calendar"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="conflict-management.html" tabindex="-1">Transaction Service</a>
                                </h3>
                            </div>
                            <div class="featured-desc">
                                Implications can significantly the values to the all transactions.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ttm-bgcolor-white featured-icon-box icon-align-top-content box-shadow style2">
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-style-round ttm-icon_element-size-md">
                                <i class="flaticon flaticon-bank"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="banking-consulting.html" tabindex="-1">Banking Consulting</a>
                                </h3>
                            </div>
                            <div class="featured-desc">
                                We send you newsletter with the up to date tax tips and more yours details.
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
            <!--row -->
            <div class="row">
                <div class=" col-lg-7 col-md-10 col-sm-12 m-auto">
                    <div
                        class="rajdhani margin_top35 res-991-margin_bottom30 text-center font-weight-600 fs-18">
                        <span class="ttm-textcolor-darkgrey">Here are our best services and methods for
                            business</span>
                        <a href="{{ route('services') }}"
                            class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right fs-18 padding_right10">
                            <strong>More Services<i class="flaticon flaticon-right-arrow"></i></strong></a>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>

    <section class="ttm-row padding_zero-section position-relative mt_50 clearfix">
        <div class="container">
            <div class="row no-gutters"><!-- row -->
                <div class="col-lg-6">
                    <!-- col-img-img-one -->
                    <div
                        class="col-bg-img-one ttm-col-bgimage-yes ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-skincolor ttm-left-span spacing-1">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                            <div class="ttm-bg-layer-inner"></div>
                        </div>
                        <div class="layer-content">
                            <div class="">
                                <!-- section title -->
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h3>WORK PROCESS</h3>
                                        <h2 class="title">How We Works</h2>
                                    </div>
                                </div><!-- section title end -->
                                <div class="featuredbox-number">
                                    <!-- featured-icon-box -->
                                    <div
                                        class="featured-icon-box icon-align-before-content style3 icon-ver_align-top">
                                        <div class="featured-icon">
                                            <div
                                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-xs ttm-icon_element-style-rounded">
                                                <i class="ttm-num ti-info"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Accounting Service</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Expert accountants will look deep bit of your company’s
                                                    accounts to give the best results in each area.</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end -->
                                    <div class="ttm-horizontal_sep width-100 mt-10 mb-10"></div>
                                    <!-- featured-icon-box -->
                                    <div
                                        class="featured-icon-box icon-align-before-content style3 icon-ver_align-top">
                                        <div class="featured-icon">
                                            <div
                                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-xs ttm-icon_element-style-rounded">
                                                <i class="ttm-num ti-info"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Financial Service</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>The process of the estimating the capital determining process
                                                    or planning financial amounts.</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end -->
                                </div>
                            </div>
                        </div>
                    </div><!-- col-img-img-one -->
                </div>
                <div class="col-lg-6">
                    <!-- col-img-img-two -->
                    <div class="col-bg-img-two ttm-col-bgimage-yes ttm-bg ttm-right-span spacing-2">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content"></div>
                    </div>

                    <!-- col-img-img-two responsive-img-->
                    <img src="{{ asset('frontend') }}/images/bg-img/col-bgimage-2.jpg" class="ttm-equal-height-image" alt="bg-image">
                </div>
            </div><!-- row -->
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-">
                    <div class="featured-icon-box icon-align-before-content style4">
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-square ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                <i class="flaticon flaticon-users"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Let’s Get To <span>Work Together</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ttm-row padding_zero-section clearfix">
        <div class="container">
            <!--row -->
            <div class="row">
                <div class="col-md-8 col-sm-8 col-12 mx-auto">
                    <div
                        class="text-center ttm-bg ttm-bgcolor-grey padding_top140 res-991-padding_top60 padding_bottom15 ">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h3>NEWS Articles</h3>
                                    <h2 class="title">Our Featured Cases</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm-bgcolor-white box-shadow position-relative p-30">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row slick_slider"
                                    data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":1199,"settings": {"slidesToShow": 3}}, {"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":620,"settings":{"slidesToShow": 1}}]}'>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                                            <div class="featured-thumbnail">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend') }}/images/portfolio/project-01-700x600.jpg"
                                                    alt="portfolio_img">
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3><a href="Single-Case-Studies.html">Startup Funding</a>
                                                    </h3>
                                                </div>
                                                <div class="category">
                                                    <span>Finance, Growth</span>
                                                </div>
                                                <div class="featured-iconbox">
                                                    <a href="Single-Case-Studies.html"
                                                        class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-grey ttm-icon_element-size-sm"><i
                                                            class="flaticon flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                                            <div class="featured-thumbnail">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend') }}/images/portfolio/project-02-700x600.jpg"
                                                    alt="portfolio_img">
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3><a href="Single-Case-Studies.html">Bitcoin Farming</a>
                                                    </h3>
                                                </div>
                                                <div class="category">
                                                    <span>Business, Finance</span>
                                                </div>
                                                <div class="featured-iconbox">
                                                    <a href="Single-Case-Studies.html"
                                                        class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-grey ttm-icon_element-size-sm"><i
                                                            class="flaticon flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                                            <div class="featured-thumbnail">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend') }}/images/portfolio/project-03-700x600.jpg"
                                                    alt="portfolio_img">
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3><a href="Single-Case-Studies.html">Business Tie-Ups</a>
                                                    </h3>
                                                </div>
                                                <div class="category">
                                                    <span>Banking, Strategy</span>
                                                </div>
                                                <div class="featured-iconbox">
                                                    <a href="Single-Case-Studies.html"
                                                        class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-grey ttm-icon_element-size-sm"><i
                                                            class="flaticon flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                                            <div class="featured-thumbnail">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend') }}/images/portfolio/project-04-700x600.jpg"
                                                    alt="portfolio_img">
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3><a href="Single-Case-Studies.html">Personal Banking</a>
                                                    </h3>
                                                </div>
                                                <div class="category">
                                                    <span>Banking, Finance</span>
                                                </div>
                                                <div class="featured-iconbox">
                                                    <a href="Single-Case-Studies.html"
                                                        class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-grey ttm-icon_element-size-sm"><i
                                                            class="flaticon flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="featured-imagebox featured-imagebox-portfolio  style1">
                                            <div class="featured-thumbnail">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend') }}/images/portfolio/project-05-700x600.jpg"
                                                    alt="portfolio_img">
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3><a href="Single-Case-Studies.html">Merger &
                                                            Acquisition</a></h3>
                                                </div>
                                                <div class="category">
                                                    <span>Growth, Strategy</span>
                                                </div>
                                                <div class="featured-iconbox">
                                                    <a href="Single-Case-Studies.html"
                                                        class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-grey ttm-icon_element-size-sm"><i
                                                            class="flaticon flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- row end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end-->
            <!--row -->
            <div class="row">
                <div class="col-md-8 col-sm-8 col-12 mx-auto">
                    <div
                        class="text-center ttm-bg ttm-bgcolor-grey padding_bottom145 res-991-padding_bottom115 padding_top50">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <a class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor"
                                href="case-studies-1.html">More Case Study<i
                                    class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>

    <section class="ttm-row padding_zero-section ttm-bgcolor-grey position-relative clearfix">
        <div class="container">
            <div class="row no-gutters"><!-- row -->
                <div class="col-lg-6">
                    <!-- col-img-img-two -->
                    <div
                        class="col-bg-img-three bg-darkgrey ttm-col-bgimage-yes ttm-bg ttm-left-span mt_55 z-index-45">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content"></div>
                    </div>

                    <!-- col-img-img-two responsive-img-->
                    <img src="{{ asset('frontend') }}/images/bg-img/col-bgimage-3.jpg" class="ttm-equal-height-image" alt="bg-image">
                </div>
                <div class="col-lg-6">
                    <!-- col-img-img-one -->
                    <div
                        class="col-bg-img-four ttm-col-bgimage-yes ttm-bg ttm-col-bgcolor-yes  ttm-bgcolor-darkgrey ttm-right-span ml_190">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                            <div class="ttm-bg-layer-inner"></div>
                        </div>
                        <div class="layer-content">
                            <div class="spacing-3">
                                <!-- section title -->
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h3>TESTIMONIAL</h3>
                                        <h2 class="title">What Our Clients Say!</h2>
                                    </div>
                                </div><!-- section title end -->
                                <div class="row slick_slider slick-arrows-style3"
                                    data-slick='{"slidesToShow": 1, "slidesToScroll": 1,"arrows":true,"dots":false, "autoplay":true, "infinite":true,
                                "responsive": [{"breakpoint":1360,"settings":{"slidesToShow": 1}},
                                {"breakpoint":1100,"settings":{"slidesToShow": 1}},
                                {"breakpoint":992,"settings":{"slidesToShow": 1}},
                                {"breakpoint":630,"settings":{"slidesToShow": 1}}]}'>
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
            </div><!-- row -->
        </div>
    </section>

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
                                            <a href="https://youtu.be/7e90gBu4pas" target="_self"
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

    <!-- article-section -->
    <section class="ttm-row article-section bg-img2 ttm-bg ttm-bgimage-yes padding_bottom150 clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <!--row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>News Articles</h3>
                            <h2 class="title">Latest News and Articles</h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <div class="row slick_slider"
                data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":1199,"settings": {"slidesToShow": 3}}, {"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":620,"settings":{"slidesToShow": 1}}]}'>
                @foreach ($blogs->take(6) as $blog)
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-imagebox-blog -->
                        <div class="featured-imagebox featured-imagebox-post style1 box-shadow">
                            <div class="ttm-box-view-overlay">
                                <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                    <img class="img-fluid" src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="">
                                </div>
                                <div class="ttm-media-link">
                                    <a href="{{ route('our.blog.details', $blog->slug) }}" tabindex="0"
                                        class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                        <i class="flaticon flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="featured-content"><!-- featured-content -->
                                <div class="featured-title"><!-- featured-title -->
                                    <h3><a href="{{ route('our.blog.details', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                </div>

                            </div>
                        </div><!-- featured-imagebox-blog end -->
                    </div>
                @endforeach
            </div>
            <!--row -->
            <div class="row">
                <div class=" col-lg-7 col-md-10 col-sm-12 m-auto">
                    <div
                        class="rajdhani margin_top35 res-991-margin_bottom50 text-center font-weight-600 fs-18">
                        <span class="ttm-textcolor-darkgrey">To Provide Exceptional Financial and</span>
                        <a href="{{ route('services') }}"
                            class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right fs-18 padding_right10">
                            <strong>Professional Services <i
                                    class="flaticon flaticon-right-arrow"></i></strong></a>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section><!-- article-section end -->

    <!-- client-section -->
    <section class="ttm-row client-section ttm-bgcolor-skincolor padding_bottom65 clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div
                        class="ttm-bgcolor-grey  padding_lr15 mt_160 res-991-margin_top_130  overflow-hidden margin_bottom65 res-991-margin_bottom45 border-rad_5">
                        <!-- slick_slider -->
                        <div class="row slick_slider"
                            data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}},{"breakpoint":575,"settings":{"slidesToShow": 2}}]}'>
                            @foreach ($clients as $client)
                                <div class="col-lg-12">
                                    <div class="client-box style1">
                                        <div class="ttm-client-logo">
                                            <div class="client-thumbnail">
                                                <img class="img-fluid" src="{{ asset('uploads/client') }}/{{ $client->image }}"
                                                    alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div><!-- slick_slider end -->
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row"><!-- row -->
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <!-- section title -->
                    <div class="section-title margin_bottom5">
                        <div class="title-header">
                            <h2 class="title margin_bottom0">Talk to our best financial expert</h2>
                        </div>
                    </div><!-- section title end -->
                    <div class="title-desc">
                        <p class="ttm-textcolor-white margin_bottom0">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    {{-- <div class="margin_top20 d-flex justify-content-md-end justify-content-center">
                        <a class="ttm-btn ttm-btn-size-lg  ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-white rajdhani font-weight-600"
                            href="our-team.html">Meet Our Team<i
                                class="flaticon flaticon-right-arrow margin_top5"></i></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </section><!-- client-section end -->

</div>

@endsection
