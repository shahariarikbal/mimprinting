@extends('frontend.master')

@section('content')
    <section class="banner-section">
        <img src="{{ asset('/frontend/') }}/assets/images/banner-img.jpg">
        <div class="banner-content-outer">
            <h1 class="title">
                Contact Us
            </h1>
            <div class="breadcrumb-outer">
                <a href="{{ url('/') }}" class="breadcrumbs_item">Home</a>
                <span class="separator"></span>
                <a href="javascript:void(0)" class="breadcrumbs_item active">Contact</a>
            </div>
        </div>
    </section>
    <section class="contact-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info-item wow fadeInLeftBig">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h5 class="title">
                            Phone
                        </h5>
                        <a href="tel:+65-98112405">+65-98112405</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-item wow flipInX">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5 class="title">
                            Email
                        </h5>
                        <a href="mailto:hndymanservice.sg@gmail.com">hndymanservice.sg@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-item wow fadeInRightBig">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5 class="title">
                            Address
                        </h5>
                        <p>
                            30 Roberts Lane, #02-01 Singapore 218309, Singapore
                        </p>
                    </div>
                </div>
            </div>
            <div class="contact-form-wrapper wow flipInX">
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <form action="{{ url('/contact/store') }}" method="post" class="contact-form form-group">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">
                                        Name
                                    </label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">
                                        Phone
                                    </label>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                                </div>
                                <div class="col-md-12">
                                    <label for="email">
                                        Email
                                    </label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="col-md-12">
                                    <label for="message">
                                        Message
                                    </label>
                                    <textarea name="message" rows="5" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="contact-submit-btn-outer">
                                <button class="contact-submit-btn-inner">
                                    Send Message <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="google-map-wrapper mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.774086212902!2d103.85089791525603!3d1.3108997620632934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19c6f13910a9%3A0x2d6a64c4a6a6a59c!2s30%20Roberts%20Ln%2C%20%2302-01%2C%20Singapore%20218309!5e0!3m2!1sen!2sbd!4v1667678720850!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
