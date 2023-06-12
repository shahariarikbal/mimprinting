@extends('backend.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Slider</h4>
                <p class="card-description">
                    <a href="{{ url('/sliders') }}" class="btn btn-sm btn-primary">Slider Manage</a>
                </p>
                <form action="{{ url('/slider/update/'.$slider->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $slider->title }}" placeholder="Enter service title" />
                        @if ($errors->has('title'))
                            <div class="text-danger">{{ $errors->first('title') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control" name="short_description" rows="5" placeholder="Enter service textarea">{{ $slider->short_description }}</textarea>
                        @if ($errors->has('short_description'))
                            <div class="text-danger">{{ $errors->first('short_description') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" />
                        <img src="{{ asset('/slider/'.$slider->image) }}" height="50" width="100" />
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
