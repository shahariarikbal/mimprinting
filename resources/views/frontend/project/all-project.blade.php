@extends('frontend.master')

@section('content')
    <section class="banner-section">
        <img src="{{ asset('/frontend/') }}/assets/images/banner-img.jpg">
        <div class="banner-content-outer">
            <h1 class="title">
                Projects
            </h1>
            <div class="breadcrumb-outer">
                <a href="{{ url('/') }}" class="breadcrumbs_item">Home</a>
                <span class="separator"></span>
                <a href="javascript:void(0)" class="breadcrumbs_item active">Projects</a>
            </div>
        </div>
    </section>
    <section style="padding: 40px 0">
        <div class="image-grid-inner gallery">
            @foreach ($projects as $project)
                <div class="item">
                    <a href="{{ asset('/portfolio/' . $project->image) }}">
                        <img src="{{ asset('/portfolio/' . $project->image) }}">
                        <i class="fas fa-search"></i>
                        <h5 class="item-name">
                            {{ $project->title }}
                        </h5>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
