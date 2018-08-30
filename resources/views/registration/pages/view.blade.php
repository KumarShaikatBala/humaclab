@extends('registration.master')
@section('content')

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">serial</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Date Of Birth</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">Created Time</th>
            <th scope="col">Update Time</th>
        </tr>
        </thead>
        <tbody>
        @foreach($humaclabs as $humaclab)
        <tr>
            <th scope="row">{{$humaclab->id}}</th>
            <td>{{$humaclab->first_name}}</td>
            <td>{{$humaclab->last_name}}</td>
            <td>{{$humaclab->user_name}}</td>
            <td>{{$humaclab->email}}</td>
            <td>{{$humaclab->date_of_birth}}</td>
            <td>{{$humaclab->city}}</td>
            <td>{{$humaclab->country}}</td>
            <td>{{$humaclab->created_at}}</td>
            <td>{{$humaclab->updated_at}}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
@endsection