<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Humaclab project</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{asset('humaclab/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('/')}}">Humaclab</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{route('/')}}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{route('view')}}"> Registered Members</a>
                @guest('humaclab')
                    {{--<a class="nav-item nav-link" href="{{route('login-form')}}">My Account</a>--}}
                @else
                    <a class="nav-item nav-link" href="{{route('show',['id'=>Auth::guard('humaclab')->user()->id])}}">{{Auth::guard('humaclab')->user()->user_name}} Profile</a>
                @endguest


                @guest('humaclab')
                    <a class="nav-item nav-link" href="{{route('login-form')}}">Login</a>
                @else
                    <a class="nav-item nav-link" href="{{route('logout')}}">{{Auth::guard('humaclab')->user()->user_name}} Logout</a>
                @endguest
            </div>
        </div>
    </nav>