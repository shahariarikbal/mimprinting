@extends('backend.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Service</h4>
                <p class="card-description">
                    <a href="{{ url('/service/manage') }}" class="btn btn-sm btn-primary">Service Manage</a>
                </p>
                <form action="{{ url('/service/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Enter service title" />
                        @if ($errors->has('title'))
                            <div class="text-danger">{{ $errors->first('title') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control" name="short_description" rows="5" placeholder="Enter service textarea"></textarea>
                        @if ($errors->has('short_description'))
                            <div class="text-danger">{{ $errors->first('short_description') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Long Description</label>
                        <textarea class="form-control" name="long_description" id="summernote"></textarea>
                        @if ($errors->has('long_description'))
                            <div class="text-danger">{{ $errors->first('long_description') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" />
                        @if ($errors->has('image'))
                            <div class="text-danger">{{ $errors->first('image') }}</div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
