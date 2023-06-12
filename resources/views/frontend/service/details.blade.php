@extends('frontend.master')

@section('content')
    <section class="banner-section">
        <img src="{{ asset('/frontend/') }}/assets/images/banner-img.jpg">
        <div class="banner-content-outer">
            <h1 class="title">
                Service Details
            </h1>
            <div class="breadcrumb-outer">
                <a href="{{ url('/') }}" class="breadcrumbs_item">Home</a>
                <span class="separator"></span>
                <a href="javascript:void(0)" class="breadcrumbs_item active">Service</a>
            </div>
        </div>
    </section>
    <section class="category-details-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="category-details-wrapper">
                        <img src="{{ asset('/service/'.$service->image) }}" class="category-details-img">
                        <h2 class="category-details-title">
                            {{ $service->title }}
                        </h2>
                        <hr/>
                        <p class="category-details-des">
                            {!! $service->long_description !!}
                        </p>
                        <div class="request-service-outer">
                            <h1 class="title">
                                Service Request
                            </h1>
                            <form action="{{ url('/service/request') }}" method="POST" class="request-service-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name*">
                                        <input type="hidden" name="service_id" value="{{ $service->id }}" class="form-control" placeholder="Name*" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email*">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone">Phone</label>
                                        <input type="number" name="number" class="form-control" placeholder="Phone*">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="schedule_date">Schedule Date</label>
                                        <input type="date" name="schedule_date" class="form-control" placeholder="Schedule Date*">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="schedule_date">Message</label>
                                        <textarea name="message" class="form-control" rows="10" placeholder="Write Your Message"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="request-service-btn wow fadeInLeftBig" type="submit">
                                            Request Send <i class="fas fa-long-arrow-alt-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-details-right">
                        <h1 class="heading">
                            Services
                        </h1>
                        <ul class="category-items-list">
                            @foreach($services as $service)
                                <li class="category-item">
                                    <a href="{{ url('/service/details/'.$service->id . '/'. $service->slug) }}" class="category-item-link">
                                        <i class="fas fa-chevron-right"></i>
                                        {{ $service->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
