@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4">{{$title}}</h1>
            <p class="lead">this is the laravel application from the "laravel from scratch" course on youtube.</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>   <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        </div>
      </div>
@endsection
    