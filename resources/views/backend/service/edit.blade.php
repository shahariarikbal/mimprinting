@extends('backend.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Service</h4>
                <p class="card-description">
                    <a href="{{ url('/service/manage') }}" class="btn btn-sm btn-primary">Service Manage</a>
                </p>
                <form action="{{ url('/service/update/'.$service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $service->title ? $service->title : old('title') }}" placeholder="Enter service title" />
                    </div>
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control" name="short_description" rows="5" placeholder="Enter service textarea">{{ $service->short_description ? $service->short_description : old('short_description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Long Description</label>
                        <textarea class="form-control" name="long_description" id="summernote">{{ $service->long_description ? $service->long_description : old('long_description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" />
                        <img src="{{ asset('/service/'.$service->image) }}" height="100" width="100" />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
