@extends('frontend.master')

@section('content')
    <section class="banner-section">
        <img src="{{ asset('/frontend/') }}/assets/images/banner-img.jpg" />
        <div class="banner-content-outer">
            <h1 class="title">
                Services
            </h1>
            <div class="breadcrumb-outer">
                <a href="{{ url('/') }}" class="breadcrumbs_item">Home</a>
                <span class="separator"></span>
                <a href="javascript:void(0)" class="breadcrumbs_item active">Services</a>
            </div>
        </div>
    </section>
    <section class="service-list-section">
        <div class="container">
            <div class="service-list-wrapper">
                <div class="service-list-top-content">
                    <h2 class="title">
                        Services
                    </h2>
                    <p class="des">
                        We focus on providing a series of high-quality home repair services at affordable prices. With their knowledge and experience, our team of maintenance personnel proudly solved multiple maintenance projects in Singapore.
                    </p>
                </div>
                @foreach($services as $service)
                    <div class="service-list-item-outer">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="service-list-item-image wow fadeInLeftBig">
                                    <img src="{{ asset('/service/'.$service->image) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-list-item-content wow fadeInRightBig">
                                    <h2 class="custom-title">{{ $service->title }}</h2>
                                    <p class="description">
                                        {{ $service->short_description }}
                                    </p>
                                    <a href="{{ url('/service/details/'.$service->id . '/'. $service->slug) }}" target="_blank" class="view-details-btn">View Details</a>
                                    <a href="https://api.whatsapp.com/send?phone=6590285400" target="_blank" class="view-details-btn whatsapp" style="background-color: #075e54">WhatsApp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
