@extends('backend.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Contact List</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> SL </th>
                            <th> Name </th>
                            <th> Phone </th>
                            <th> Email </th>
                            <th> Message </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        @foreach($contacts as $contact)
                            <tbody>
                                <tr>
                                    <td> {{ $loop->index+1 }} </td>
                                    <td> {{ $contact->name }} </td>
                                    <td>
                                        {{ $contact->phone }}
                                    </td>
                                    <td>
                                        {{ $contact->email }}
                                    </td>
                                    <td>
                                        {{ $contact->message }}
                                    </td>
                                    <td>
                                        <a href="{{ url('/delete/contact/list/'.$contact->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
@endsection
