@extends('backend.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Services</h4>
{{--                <p class="card-description">--}}
{{--                    <a href="{{ url('/service/create') }}" class="btn btn-sm btn-primary">Add Service</a>--}}
{{--                </p>--}}
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> SL </th>
                            <th> Service Name </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th> Date </th>
                            <th> Message </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        @foreach($service_requests as $service_request)
                        <tbody>
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $service_request->services ? $service_request->services->title : '' }} </td>
                                <td>{{ $service_request->name ?? 'No name found' }}</td>
                                <td>{{ $service_request->email ?? 'No email found' }}</td>
                                <td>{{ $service_request->number }}</td>
                                <td>{{ $service_request->schedule_date }}</td>
                                <td>{{ $service_request->message }}</td>
                                <td>
                                    <a href="{{ url('/service/request/delete/'.$service_request->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
