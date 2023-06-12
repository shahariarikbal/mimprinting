@extends('backend.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Portfolio</h4>
                <p class="card-description">
                    <a href="{{ url('/portfolio/create') }}" class="btn btn-sm btn-primary">Add Portfolio</a>
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
                        @foreach($portfolios as $portfolio)
                            <tbody>
                                <tr>
                                    <td> {{ $loop->index+1 }} </td>
                                    <td> {{ $portfolio->title }} </td>
                                    <td>
                                        <img src="{{ asset('/portfolio/'.$portfolio->image) }}" height="80" width="100" />
                                    </td>
                                    <td>
                                        <a href="{{ url('/portfolio/edit/'.$portfolio->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('/portfolio/delete/'.$portfolio->id) }}" class="btn btn-danger">Delete</a>
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
