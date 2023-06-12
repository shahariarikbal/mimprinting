@extends('frontend.master')

@section('content')
<section class="banner-section">
    <img src="{{ asset('/frontend/') }}/assets/images/banner-img.jpg">
    <div class="banner-content-outer">
        <h1 class="title">
            Privacy Policy
        </h1>
        <div class="breadcrumb-outer">
            <a href="{{ url('/') }}" class="breadcrumbs_item">Home</a>
            <span class="separator"></span>
            <a href="javascript:void(0)" class="breadcrumbs_item active">Privacy Policy</a>
        </div>
    </div>
</section>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="terms-and-conditions-content">
                    <h4 class="content-title"> 
                        <i class="fas fa-hand-point-right"></i> 
                        Definitions and key terms 
                    </h4>
                    <p class="content-text"> 
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat blanditiis iusto doloribus quas quaerat itaque qui laborum sit quibusdam eaque. Delectus laborum nihil cum quisquam dolor facilis numquam magnam fugit? 
                    </p>
                    <h4 class="content-title"> 
                        <i class="fas fa-hand-point-right"></i> 
                        Definitions and key terms 
                    </h4>
                    <p class="content-text"> 
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat blanditiis iusto doloribus quas quaerat itaque qui laborum sit quibusdam eaque. Delectus laborum nihil cum quisquam dolor facilis numquam magnam fugit? 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
