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
                        <h2 class="title">Blog</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>Home</a>
                        </span>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- page-title end -->

<!--site-main start-->
<div class="site-main">
    <div class="ttm-row sidebar ttm-sidebar-right ttm-bgcolor-grey overflow-hidden clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-lg-4">
                                <!-- featured-imagebox-blog -->
                                <div class="featured-imagebox featured-imagebox-post style1 box-shadow">
                                    <div class="ttm-box-view-overlay">
                                        <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                            <img class="img-fluid" src="{{ asset('uploads/blog') }}/{{ $blog->image }}"
                                                alt="">
                                        </div>
                                        <div class="ttm-media-link">
                                            <a href="{{ route('our.blog.details', $blog->slug) }}" tabindex="0"
                                                class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                                <i class="flaticon flaticon-right-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="featured-content"><!-- featured-content -->
                                        <div class="post-meta post-category"><!-- post-meta -->
                                            @if ($blog->rel_to_user->id != null)
                                                <span class="ttm-meta-line category">{{ $blog->rel_to_user->name }}</span>
                                            @endif
                                            <span class="ttm-entry-date">
                                                <time class="entry-date">
                                                    <span class="entry-month entry-year">{{ $blog->created_at->format('d,M,Y') }}</span></time>
                                            </span>
                                        </div>
                                        <div class="featured-title"><!-- featured-title -->
                                            <h3><a href="{{ route('our.blog.details', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                        </div>
                                    </div>
                                </div><!-- featured-imagebox-blog end -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </div>
</div><!--site-main end-->

@endsection
