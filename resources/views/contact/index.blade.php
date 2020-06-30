@extends('contact')

@section('main')
<a href="{{ url('contacts/create')}}" class="btn btn-success mb-1" >Add News </a>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->address}}</td>
                        <td>
                            <a class="btn btn-primary" href='{{ url("contacts/{$contact->id}/edit") }}'>Edit</a>
                        </td>
                        <td>
                            <form action='{{ url("contacts/{$contact->id}")}}' method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection('main')