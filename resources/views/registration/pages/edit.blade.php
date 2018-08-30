@extends('registration.master')
@section('content')
    {!! Form::open(['url' =>'update/'.$humaclab->id,'class'=>'form-horizontal','role'=>'form','method' => 'post']) !!}
    {{ csrf_field() }}
    <div class="row">
        <h2 class="col-sm-12 text-center">Registration</h2>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ol>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
    @endif

    <div class="form-group">
        <label for="firstName" class="col-sm-3 control-label">First Name</label>
        <div class="col-sm-9">
            <input type="text" id="firstName" name="first_name" value="{{$humaclab->first_name}}" placeholder="First Name" class="form-control" autofocus>
        </div>
    </div>
    <div class="form-group">
        <label for="lastName" class="col-sm-3 control-label">Last Name</label>
        <div class="col-sm-9">
            <input type="text" id="lastName" name="last_name" value="{{$humaclab->last_name}}" placeholder="Last Name" class="form-control" autofocus>
        </div>
    </div>
    <div class="form-group">
        <label for="Username" class="col-sm-3 control-label">Username</label>
        <div class="col-sm-9">
            <input type="text" id="Username" name="user_name" value="{{$humaclab->user_name}}" placeholder="Last Name" class="form-control" autofocus>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-3 control-label">Email* </label>
        <div class="col-sm-9">
            <input type="email" id="email" placeholder="Email" class="form-control" name= "email" value="{{$humaclab->email}}">
        </div>
    </div>
    <div class="form-group">
        <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
        <div class="col-sm-9">
            <input type="text" name="mobile" value="{{$humaclab->mobile}}" id="phoneNumber" placeholder="Phone number" class="form-control">
            <span class="help-block">Your phone number won't be disclosed anywhere </span>
        </div>
    </div>
    <div class="form-group">
        <label for="City" class="col-sm-3 control-label">City</label>
        <div class="col-sm-9">
            <input type="text" name="city" value="{{$humaclab->city}}" id="City" placeholder="City" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="Country" class="col-sm-3 control-label">Country </label>
        <div class="col-sm-9">
            <input type="text" name="country" value="{{$humaclab->country}}" id="Country" placeholder="Country" class="form-control">
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-block">Update</button>
    {!! Form::close() !!} <!-- /form -->
@endsection