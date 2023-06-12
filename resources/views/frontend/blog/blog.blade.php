@extends('frontend.master')

@section('content')
<!-- Banner -->
<section class="banner-section">
    <img src="{{ asset('/frontend/') }}/assets/images/banner-img.jpg">
    <div class="banner-content-outer">
        <h1 class="title">
            Blog
        </h1>
        <div class="breadcrumb-outer">
            <a href="{{ url('/') }}" class="breadcrumbs_item">Home</a>
            <span class="separator"></span>
            <a href="javascript:void(0)" class="breadcrumbs_item active">Blog</a>
        </div>
    </div>
</section>
<!-- /Banner -->
<!-- Blog -->
<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <a href="{{ url('/blog-details') }}" class="blog-item-outer">
                    <img src="{{ asset('/frontend') }}/assets/images/banner.jpg" class="blog-item-image">
                    <h5 class="blog-item-name">Digital Marketing</h5>
                    <p class="blog-item-text">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal dist
                    </p>
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <a href="#" class="blog-item-outer">
                    <img src="{{ asset('/frontend') }}/assets/images/banner.jpg" class="blog-item-image">
                    <h5 class="blog-item-name">Digital Marketing</h5>
                    <p class="blog-item-text">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal dist
                    </p>
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <a href="#" class="blog-item-outer">
                    <img src="{{ asset('/frontend') }}/assets/images/banner.jpg" class="blog-item-image">
                    <h5 class="blog-item-name">Digital Marketing</h5>
                    <p class="blog-item-text">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal dist
                    </p>
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <a href="#" class="blog-item-outer">
                    <img src="{{ asset('/frontend') }}/assets/images/banner.jpg" class="blog-item-image">
                    <h5 class="blog-item-name">Digital Marketing</h5>
                    <p class="blog-item-text">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal dist
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /Blog -->
@endsection