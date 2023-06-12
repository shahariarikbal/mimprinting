@extends('backend.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Portfolio</h4>
                <p class="card-description">
                    <a href="{{ url('/portfolio/manage') }}" class="btn btn-sm btn-primary">Portfolio Manage</a>
                </p>
                <form action="{{ url('/portfolio/update/'.$portfolio->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $portfolio->title ? $portfolio->title : old('title') }}" placeholder="Enter portfolio title" />
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" />
                        <img src="{{ asset('/portfolio/'.$portfolio->image) }}" height="100" width="100" />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
