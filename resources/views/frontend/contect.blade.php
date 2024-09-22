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
                        <h2 class="title">Contact Us</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>Home</a>
                        </span>
                        <span>Contact Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->

<!--site-main start-->
<div class="site-main">
    <!--- conatact-section -->
    <section class="ttm-row conatact-section ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row row-equal-height">
                <div class="col-xl-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.242931146893!2d-0.08187978422864274!3d51.54544427964142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761c903640c869%3A0xe9bd89dfec683ad1!2sTottenham%20Rd%2C%20London%2C%20UK!5e0!3m2!1sen!2sin!4v1616562073091!5m2!1sen!2sin"></iframe>
                </div>
                <div class="col-xl-6">
                    <div class="padding_left30 res-1199-padding_left0 padding_top20 res-1199-padding_top40">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h3>CONTACT US</h3>
                                <h2 class="title">Needs Help? Let’s Get <br>in Touch</h2>
                            </div>
                            <div class="title-desc padding_right30">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod temp
                                    incididunt ut labore et dolor.lorem ipsum dolor sit amet</p>
                            </div>
                        </div><!-- section title end -->

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-border ttm-icon_element-color-skincolor
                                    ttm-icon_element-style-round ttm-icon_element-size-sm ">
                                            <i
                                                class="flaticon flaticon-phone-call ttm-textcolor-skincolor"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content padding_left25">
                                        <div class="featured-title text-left">
                                            @if ($settings->first()->number != null)
                                                <h3 class="margin_bottom0">Call Us: <span> {{ $settings->first()->number }} </span></h3>
							                @endif
                                        </div>
                                        {{-- <div class="featured-desc text-left">Office Time : 09:30 to 06:45 on Weekdays</div> --}}
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-border ttm-icon_element-color-skincolor
                                    ttm-icon_element-style-round ttm-icon_element-size-sm ">
                                            <i class="flaticon flaticon-email-1 ttm-textcolor-skincolor"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content padding_left25">
                                        @if ($settings->first()->email != null)
                                            <div class="featured-title text-left">
                                                <h3 class="margin_bottom0">Email:</h3>
                                            </div>
                                            <div class="featured-desc text-left">{{ $settings->first()->email }}</div>
                                        @endif
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-border ttm-icon_element-color-skincolor
                                    ttm-icon_element-style-round ttm-icon_element-size-sm ">
                                            <i class="flaticon flaticon-location ttm-textcolor-skincolor"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content padding_left25">
                                        @if ($settings->first()->address != null)
                                            <div class="featured-title text-left">
                                                <h3 class="margin_bottom0">Address:</h3>
                                            </div>
                                            <div class="featured-desc text-left">{{ $settings->first()->address }}</div>
                                        @endif
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <p class="padding_top30 rajdhani fs-18 padding_right30">Follow us on <a
                                        href="{{ $setting->first()->facebook }}"><strong>Facebook,</strong></a> Follow us on <a
                                        href="{{ $setting->first()->twitter }}"><strong>Twitter,</strong></a> Follow us on <a
                                        href="{{ $setting->first()->linkedin }}"><strong>Linkedin</strong></a> and also Follow us on <a
                                        href="{{ $setting->first()->instagram }}"><strong>Instagram</strong></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section><!-- conatact-section end -->

    <section class="ttm-row form-section ttm-bgcolor-grey bg-img11 ttm-bg ttm-bgimage-yes clearfix">
        <div class="container">
            <!--row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h2 class="title">Get In Touch!</h2>
                        </div>
                        <div class="title-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore. et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
            <!--row -->
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="{{ route('customerMessage.store') }}" class="request_qoute_form wrap-form clearfix">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <span class="text-input">
                                    <input name="name" type="text" value="{{ old('name') }}" placeholder="Your Name*" required="required">
                                </span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input">
                                    <input name="subject" type="text" value="{{ old('subject') }}" placeholder="Your Subject*" required="required">
                                </span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input">
                                    <input name="phone" type="text" value="{{ old('phone') }}" placeholder="Phone Number*" required="required">
                                </span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input">
                                    <input name="email" type="email" value="{{ old('email') }}" placeholder="Your Email*" required="required">
                                </span>
                            </div>
                            <div class="col-lg-12">
                                <span class="text-input">
                                    <textarea name="message" rows="4" placeholder="Message" required="required">{{ old('message') }}</textarea>
                                </span>
                            </div>
                            <div class="col-lg-12">
                                <div class="padding_top15 text-center">
                                    <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor"
                                        type="submit">Send Message
                                        <i class="flaticon flaticon-right-arrow"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ttm-row services-section ttm-bgcolor-white clearfix">
        <div class="container">
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
                                <h3>Read Our Articles</h3>
                            </div>
                            <div class="featured-desc">
                                Lacus faucibus interdum posuere turpis lorem ipsum dolor sit amet.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ttm-bgcolor-white featured-icon-box icon-align-top-content box-shadow style2">
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-style-round ttm-icon_element-size-md">
                                <i class="fa fa-headphones"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Support Center</h3>
                            </div>
                            <div class="featured-desc">
                                Et malesuada fames ac turpis egestas integer eget aliquet consectetur.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ttm-bgcolor-white featured-icon-box icon-align-top-content box-shadow style2">
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-style-round ttm-icon_element-size-md">
                                <i class="ti ti-comment"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Chat To Us Online</h3>
                            </div>
                            <div class="featured-desc">
                                Augue mauris augue fermentum et. Non tellus orci ac auctor mauris.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ttm-bgcolor-white featured-icon-box icon-align-top-content box-shadow style2">
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-style-round ttm-icon_element-size-md">
                                <i class="flaticon flaticon-time"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Business Hours</h3>
                            </div>
                            <div class="featured-desc">
                                Mon to Fri: 09:30 am – 06:45 pm Sat: 09:00 am – 02:00 pm. Sunday : Closed
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
</div>

@endsection
