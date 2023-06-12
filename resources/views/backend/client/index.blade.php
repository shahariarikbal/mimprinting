@extends('backend.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Feedback List</h4>
                <a href="{{ url('/create/client/feedback') }}" class="btn btn-sm btn-primary">Add Feedback</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> SL </th>
                            <th> Name </th>
                            <th> Message </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        @foreach($feedbacks as $feedback)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $feedback->name }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($feedback->message, 50) }}</td>
                            <td>
                                <a href="{{ url('/feedback/delete/'.$feedback->id) }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
