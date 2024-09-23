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
                        <h2 class="title">Service</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>Home</a>
                        </span>
                        <span>Service</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->

<!--site-main start-->
<div class="site-main">
    <div class="ttm-row sidebar ttm-sidebar-left  ttm-bgcolor-grey clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-4 widget-area sidebar-left">
                    <aside class="widget widget-download with-title">
                        <h3 class="widget-title">Download</h3>
                        <ul class="download">
                            <li><i class="fa fa-file-pdf-o"></i>
                                <a href="#"> Download .zip (5.2mb)</a>
                            </li>
                            <li><i class="fa fa-file-text-o"></i>
                                <a href="#"> Download .txt (6.8kb)</a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget widget-banner">
                        <div
                            class="ttm-col-bgcolor-yes ttm-bgcolor-darkgrey col-bg-img-thirteen ttm-col-bgimage-yes ttm-bg padding_top50 padding_left25 padding_right20 padding_bottom50">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="widget-banner-inner">
                                    <h3>First-Class<br>Finance Authority</h3>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur.</p>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor font-weight-600"
                                        href="{{ route('contect') }}">Get in Touch<i
                                            class="flaticon flaticon-right-arrow font-weight-bold"></i></a>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget contact-widget with-title">
                        <h3 class="widget-title">Get in touch</h3>
                        <ul class="contact-widget-wrapper">
                            @if ($settings->first()->address != null)
                                <li><i class="ttm-textcolor-skincolor ti ti-location-pin"></i>{{ $settings->first()->address }}</li>
                            @endif
                            @if ($settings->first()->email != null)
                                <li><i class="ttm-textcolor-skincolor ti ti-email"></i><a href="mailto:{{ $settings->first()->email }}" target="_blank">{{ $settings->first()->email }}</a></li>
                            @endif
                            @if ($settings->first()->number != null)
                                <li><i class="ttm-textcolor-skincolor ti ti-mobile"></i>{{ $settings->first()->number }}</li>
                            @endif
                            <li><i class="ttm-textcolor-skincolor ti ti-alarm-clock"></i>Mon to Sat - 9:00am to
                                6:00pm <br> (Sunday Closed)</li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-8 content-area">
                    <div class="ttm-service-single-content-area">
                        <div class="ttm-service-description">
                            <div class="padding_bottom25">
                                <div class="ttm_fatured_image-wrapper">
                                    <img class="img-fluid" src="{{ asset('uploads/service') }}/{{ $services->image }}"
                                        alt="services-1">
                                </div>
                            </div>
                            <h3>{{ $services->title }}</h3>
                            <div class="padding_bottom5">
                               {!! $services->description !!}
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style16 text-center">
                                        <div class="featured-icon">
                                            <div
                                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon flaticon-money-bag"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Business Solution</h3>
                                            </div>
                                            <div class="featured-desc">
                                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id,
                                                lorem. Maecenas nec odio
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-4">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style16 text-center">
                                        <div class="featured-icon">
                                            <div
                                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon flaticon-light-bulb"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Best Consulting</h3>
                                            </div>
                                            <div class="featured-desc">
                                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id,
                                                lorem. Maecenas nec odio
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-4">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style16 text-center">
                                        <div class="featured-icon">
                                            <div
                                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon flaticon-time"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Corporate Solution</h3>
                                            </div>
                                            <div class="featured-desc">
                                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id,
                                                lorem. Maecenas nec odio
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                            <div class="padding_top20 margin_bottom25">
                                <h3>Our Leadership Management Team</h3>
                            </div>
                            <div class="row">
                                @foreach ($teams->take(3) as $team)
                                    <div class="col-md-4 ttm-box-col-wrapper">
                                        <!-- featured-imagebox-team -->
                                        <div class="featured-imagebox featured-imagebox-team style1">
                                            <div class="ttm-box-view-overlay">
                                                <div class="featured-iconbox ttm-media-link">
                                                    <div class="media-block">
                                                        <a class="media-btn"><i
                                                                class="ti ti-plus"></i></a>
                                                        <ul class="social-icons list-inline">
                                                            <li class="social-facebook">
                                                                <a href="{{ $team->facebook }}" target="_blank">
                                                                    <i class="ti ti-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social-instagram">
                                                                <a href="{{ $team->instagram }}" target="_blank">
                                                                    <i class="ti ti-instagram"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social-facebook">
                                                                <a href="{{ $team->linkedin }}" target="_blank">
                                                                    <i class="ti ti-linkedin"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social-twitter">
                                                                <a href="{{ $team->github }}" target="_blank">
                                                                    <i class="ti ti-github"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="featured-thumbnail">
                                                    <img class="img-fluid" src="{{ asset('uploads/team') }}/{{ $team->image }}"
                                                        alt="image">
                                                </div>
                                            </div>
                                            <div class="featured-content featured-content-team">
                                                <div class="featured-title">
                                                    <h3><a>{{ $team->name }}</a></h3>
                                                </div>
                                                <div class="team-position">{{ $team->post }}</div>
                                                {{-- <a href="team-detail.html"
                                                    class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right fs-18 rajdhani">

                                                </a> --}}
                                            </div>
                                        </div><!-- featured-imagebox-team end-->
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="padding_top50 margin_bottom15">
                                        <h3>Why Choose Invess</h3>
                                    </div>
                                    <div class="margin_bottom20">
                                        Lorem Ipsum has been the industry’s standard dummy text ever since the
                                        1500s, when an unknown printer.
                                    </div>
                                    <ul
                                        class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor margin_top15">
                                        <li><i class="fa fa-dot-circle-o"></i>
                                            <div class="ttm-list-li-content">Sed ut perspiciatis unde omnis
                                                Advance Analytics</div>
                                        </li>
                                        <li><i class="fa fa-dot-circle-o"></i>
                                            <div class="ttm-list-li-content">iste natus error sit voluptatem
                                                multiple services</div>
                                        </li>
                                        <li><i class="fa fa-dot-circle-o"></i>
                                            <div class="ttm-list-li-content">Our services are more affordable
                                                than you think</div>
                                        </li>
                                        <li><i class="fa fa-dot-circle-o"></i>
                                            <div class="ttm-list-li-content">Lorem Ipsum has been the
                                                industry's standard</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="padding_top45">
                                        <div class="ttm_fatured_image-wrapper">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/images/services/services-03-1024x550.jpg"
                                                alt="services-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </div>
</div>
@endsection
