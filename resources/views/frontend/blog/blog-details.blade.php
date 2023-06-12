@extends('frontend.master')

@section('content')
<section class="banner-section">
    <img src="{{ asset('/frontend/') }}/assets/images/banner-img.jpg">
    <div class="banner-content-outer">
        <h1 class="title">
            Blog Details
        </h1>
        <div class="breadcrumb-outer">
            <a href="{{ url('/') }}" class="breadcrumbs_item">Home</a>
            <span class="separator"></span>
            <a href="javascript:void(0)" class="breadcrumbs_item active">Details</a>
        </div>
    </div>
</section>
<section class="blog-details-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-details-wrapper">
                    <img src="{{ asset('/frontend') }}/assets/images/banner.jpg" class="blog-details-image">
                    <h3 class="blog-details-title">
                        If your water heater is still fairly
                    </h3>
                    <p class="blog-details-des">                           
                        If your water heater is still fairly new (less than six years old) and the tank itself is in good condition, then replacing the heating element is usually the best choice. This is a much smaller job than replacing the tank outright, which makes it far more economical.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="recent-blog-wrapper">
                    <div class="recent-blog-title-inner">
                        <h3 class="title">
                            Recent Blog
                        </h3>
                    </div>
                    <div class="recent-blog-outer">
                        <div class="recent-blog-image-inner">
                            <a href="#" class="recent-blog-image">
                                <img src="https://webcoder-it.com/blog/1676888343.jpg" class="recent-blog-img">
                            </a>
                        </div>
                        <div class="recent-blog-content">
                            <h4 class="recent-blog-content-title">
                                <a href="#" class="recent-blog-title">
                                    Web Design এবং Web Development কি?
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="recent-blog-outer">
                        <div class="recent-blog-image-inner">
                            <a href="#" class="recent-blog-image">
                                <img src="https://webcoder-it.com/blog/1675504858.jpg" class="recent-blog-img">
                            </a>
                        </div>
                        <div class="recent-blog-content">
                            <h4 class="recent-blog-content-title">
                                <a href="#" class="recent-blog-title">
                                    Digital Marketing Guideline In 2023
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="recent-blog-outer">
                        <div class="recent-blog-image-inner">
                            <a href="#" class="recent-blog-image">
                                <img src="https://webcoder-it.com/blog/1670243338.png" class="recent-blog-img">
                            </a>
                        </div>
                        <div class="recent-blog-content">
                            <h4 class="recent-blog-content-title">
                                <a href="#" class="recent-blog-title">
                                    Best Search Engine Marketing Platform
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="recent-blog-outer">
                        <div class="recent-blog-image-inner">
                            <a href="#" class="recent-blog-image">
                                <img src="https://webcoder-it.com/blog/1670243169.jpg" class="recent-blog-img">
                            </a>
                        </div>
                        <div class="recent-blog-content">
                            <h4 class="recent-blog-content-title">
                                <a href="#" class="recent-blog-title">
                                    What Is Social Media Marketing &amp; Best Social Media Marketing Platfrom
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="recent-blog-outer">
                        <div class="recent-blog-image-inner">
                            <a href="#" class="recent-blog-image">
                                <img src="https://webcoder-it.com/blog/1670243187.jpg" class="recent-blog-img">
                            </a>
                        </div>
                        <div class="recent-blog-content">
                            <h4 class="recent-blog-content-title">
                                <a href="#" class="recent-blog-title">
                                    What Is Digital Marketing &amp; How To Start Digital Marketing
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
