@extends('registration.master')
@section('content')
    {!! Form::open(['route' =>'login','class'=>'form-horizontal','role'=>'form','method' => 'post']) !!}
    {{ csrf_field() }}
    <div class="row">
        <h2 class="col-sm-12 text-center">login</h2>
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
    <button type="submit" class="btn btn-primary btn-block">Login</button>
    {!! Form::close() !!} <!-- /form -->
@endsection