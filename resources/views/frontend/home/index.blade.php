@extends('frontend.master')

@section('content')
    <section class="home-slider-section">
        <div class="slider-items-wrapper owl-carousel">
            <div class="slider-item">
                <img src="{{ asset('/frontend/') }}/assets/images/homeSlider/slide-01.webp" alt="images not found">
                <div class="slider-content-outer">
                    <div class="container">
                        <div class="slider-content">
                            <div class="line"></div>
                            <h2>Teimagine Digital Experience with</h2>
                            <h1><span style="color: #FC9D01;">Start-ups</span> and solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <img src="{{ asset('/frontend/') }}/assets/images/homeSlider/slide-02.webp" alt="images not found">
                <div class="slider-content-outer">
                    <div class="container">
                        <div class="slider-content">
                            <div class="line"></div>
                            <h2>Peimagine Digital Experience with</h2>
                            <h1><span style="color: #FC9D01;">Intelligent</span> Solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <img src="{{ asset('/frontend/') }}/assets/images/homeSlider/slide-03.webp" alt="images not found">
                <div class="slider-content-outer">
                    <div class="container">
                        <div class="slider-content">
                            <div class="line"></div>
                            <h2>Reimagine Digital Experience with</h2>
                            <h1><span style="color: #FC9D01;">Intelligent</span> solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <img src="{{ asset('/frontend/') }}/assets/images/homeSlider/slide-02.jpg" alt="images not found">
                <div class="slider-content-outer">
                    <div class="container">
                        <div class="slider-content">
                            <div class="line"></div>
                            <h2>Reimagine Digital Experience with</h2>
                            <h1><span style="color: #FC9D01;">Intelligent</span> solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <img src="{{ asset('/frontend/') }}/assets/images/homeSlider/slide-03.jpg" alt="images not found">
                <div class="slider-content-outer">
                    <div class="container">
                        <div class="slider-content">
                            <div class="line"></div>
                            <h2>Reimagine Digital Experience with</h2>
                            <h1><span style="color: #FC9D01;">Intelligent</span> solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Slider -->

    <!-- service -->
    <section class="service-section" id="service">
        <div class="container">
            <div class="section-heading-outer">
                <h3 class="section-heading">
                    Our Services
                </h3>
            </div>
            <div class="service-items-wrapper">
                @foreach($services as $service)
                <div class="service-item-outer">
                    <a href="{{ url('/service/details/'.$service->id . '/' . $service->slug) }}" class="service-item-inner">
                        <div class="service-item-img">
                            <img src="{{ asset('/service/'.$service->image) }}" alt="service">
                        </div>
                        <h4 class="service-item-title"> {{ $service->title }} </h4>
                        <p class="service-item-des"> {{ $service->short_description }} </p>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="view-btn-outer">
                <a href="{{ url('/service-list') }}" class="view-btn-inner">All Service</a>
            </div>
        </div>
    </section>
    <!-- /service -->

    <!-- Project -->
    <section class="project-section" id="project">
        <div class="container">
            <div class="section-heading-outer">
                <h3 class="section-heading">
                    Latest Project
                </h3>
            </div>
            <div class="image-grid-inner gallery">
                @foreach($projects as $project)
                    <div class="item">
                        <a href="{{ asset('/portfolio/'.$project->image) }}">
                            <img src="{{ asset('/portfolio/'.$project->image) }}">
                            <i class="fas fa-search"></i>
                            <h5 class="item-name">
                                {{ $project->title }}
                            </h5>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="view-btn-outer mt-4">
                <a href="{{ url('/all-project') }}" class="view-btn-inner">All Project</a>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <span class="mt-5">
                        {{ $projects->links() }}
                    </span>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
    <!-- /Project -->

    <!-- Stage Renovation -->
    <section class="renovation-section">
        <div class="container">
            <div class="section-heading-outer">
                <h3 class="section-heading">
                    ALL STAGES OF THE RENOVATION
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="renovation-item-wrapper">
                        <div class="renovation-img-outer">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                        <div class="renovation-text-outer">
                            <p class="item-stage-name">
                                Initial Stage
                            </p>
                            <h4 class="item-title">
                                Customer Idea
                            </h4>
                            <p class="item-des">
                                Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="renovation-item-wrapper">
                        <div class="renovation-img-outer">
                            <i class="fas fa-money-check-alt"></i>
                        </div>
                        <div class="renovation-text-outer">
                            <p class="item-stage-name">
                                SECOND STAGE
                            </p>
                            <h4 class="item-title">
                                FREE QUOTATION
                            </h4>
                            <p class="item-des">
                                Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="renovation-item-wrapper">
                        <div class="renovation-img-outer">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="renovation-text-outer">
                            <p class="item-stage-name">
                                THIRD STAGE
                            </p>
                            <h4 class="item-title">
                                CUNSTRUCTION
                            </h4>
                            <p class="item-des">
                                Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="renovation-item-wrapper">
                        <div class="renovation-img-outer">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="renovation-text-outer">
                            <p class="item-stage-name">
                                FINAL STAGE
                            </p>
                            <h4 class="item-title">
                                WARRANTY BEYOND
                            </h4>
                            <p class="item-des">
                                Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Stage Renovation -->

    <!-- Blog -->
    <section class="blog-section">
        <div class="container">
            <div class="section-heading-outer">
                <h3 class="section-heading">
                    Blog
                </h3>
            </div>
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

    <!-- Testimonial Reviews -->
    <section class="testimonial-section">
        <div class="container">
            <div class="section-heading-outer">
                <h3 class="section-heading">
                    What Clients Say
                </h3>
            </div>
            <div class="testimonial-items-wrapper owl-carousel">
                <div class="testimonial-item-outer">
                    <img src="{{ asset('/frontend/') }}/assets/images/featured/latest-project-01.jpg">
                    <h5 class="name">Saidul Islam</h5>
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </p>
                </div>
                <div class="testimonial-item-outer">
                    <img src="{{ asset('/frontend/') }}/assets/images/featured/latest-project-02.jpg">
                    <h5 class="name">Jahidul Islam</h5>
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </p>
                </div>
                <div class="testimonial-item-outer">
                    <img src="{{ asset('/frontend/') }}/assets/images/featured/latest-project-03.jpg">
                    <h5 class="name">Sadiq Islam</h5>
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Client Reviews -->
@endsection
