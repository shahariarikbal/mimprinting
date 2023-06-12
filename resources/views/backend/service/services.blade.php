@extends('backend.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Services</h4>
                <p class="card-description">
                    <a href="{{ url('/service/create') }}" class="btn btn-sm btn-primary">Add Service</a>
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
                        @foreach($services as $service)
                            <tbody>
                                <tr>
                                    <td> {{ $loop->index+1 }} </td>
                                    <td> {{ $service->title }} </td>
                                    <td>
                                        <img src="{{ asset('/service/'.$service->image) }}" height="80" width="100" />
                                    </td>
                                    <td>
                                        <a href="{{ url('/service/edit/'.$service->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('/service/delete/'.$service->id) }}" class="btn btn-danger">Delete</a>
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
