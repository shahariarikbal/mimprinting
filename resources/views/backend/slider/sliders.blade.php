@extends('backend.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sliders</h4>
                <p class="card-description">
                    <a href="{{ url('/slider/create') }}" class="btn btn-sm btn-primary">Add Slider</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> SL </th>
                            <th> Title </th>
                            <th> Image </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        @foreach($sliders as $slider)
                            <tbody>
                                <tr>
                                    <td> {{ $loop->index+1 }} </td>
                                    <td> {{ substr($slider->title, 0,50) }} </td>
                                    <td>
                                        <img src="{{ asset('/slider/'.$slider->image) }}" height="80" width="100" />
                                    </td>
                                    <td>
                                        <a href="{{ url('/slider/edit/'.$slider->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('/slider/delete/'.$slider->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
