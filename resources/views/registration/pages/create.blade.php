@extends('registration.master')
@section('content')
    {!! Form::open(['route' =>'store','class'=>'form-horizontal','role'=>'form','method' => 'post']) !!}
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
    @if(Session::has('msg'))
        <h2 id="msg" class="alert-info"><i class="halflings-icon user"></i><span class="break"></span>{{session::get('msg')}}</h2>
    @endif
    <script type="text/javascript">
        setTimeout(function(){
            $('#msg').fadeOut('fast');
        }, 2000);
    </script>

        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
                <input type="text" id="firstName" name="first_name" placeholder="First Name" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
                <input type="text" id="lastName" name="last_name" placeholder="Last Name" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="Username" class="col-sm-3 control-label">Username</label>
            <div class="col-sm-9">
                <input type="text" id="Username" name="user_name" placeholder="Last Name" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email* </label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password*</label>
            <div class="col-sm-9">
                <input type="password" id="password" name="password" placeholder="Password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
            <div class="col-sm-9">
                <input type="password" id="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
            <div class="col-sm-9">
                <input type="text" name="mobile" id="phoneNumber" placeholder="Phone number" class="form-control">
                <span class="help-block">Your phone number won't be disclosed anywhere </span>
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
            <div class="col-sm-9">
                <input type="date" name="date_of_birth" id="birthDate" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="City" class="col-sm-3 control-label">City</label>
            <div class="col-sm-9">
                <input type="text" name="city" id="City" placeholder="City" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="Country" class="col-sm-3 control-label">Country </label>
            <div class="col-sm-9">
                <input type="text" name="country" id="Country" placeholder="Country" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <span class="help-block">*Required fields</span>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
{!! Form::close() !!} <!-- /form -->
@endsection