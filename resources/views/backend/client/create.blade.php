@extends('backend.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Create Client Feedback</div>
        </div>
        <div class="card-body">
            <form action="{{ url('/feedback/store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Client Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter client name" />
                </div>
                <div class="form-group">
                    <label>Client Message</label>
                    <textarea class="form-control" name="message" rows="5" placeholder="Enter client message"></textarea>
                </div>
                <button type="submit" class="btn btn-sm btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection
