@extends('registration.master')
@section('content')

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Mobile</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$humaclab->first_name}}</th>
            <td>{{$humaclab->last_name}}</td>
            <td>{{$humaclab->mobile}}</td>
            <td>
                <a class="btn btn-info" href="{{route('edit',['id'=>$humaclab->id])}}">
                    Update The Registration
                </a>
                <a id="delete" class="btn btn-danger" href="{{route('destroy',['id'=>$humaclab->id])}}">
                    Delete The Registration
                </a>


            </td>
        </tr>
        </tbody>
    </table>
    @endsection