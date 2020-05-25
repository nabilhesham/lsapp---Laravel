@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <div class="container mt-3">
        <h2>{{$post->title}}</h2>
        <img src="/storage/cover_image/{{$post->cover_image}}" alt="Cover_Image" style="width:100%">
        <br><br>
        <h5>{!! $post->body !!}</h5>
        <hr>
        <small>Written on {{$post->created_at}}   || <strong>by {{$post->user->name}}</small>
    </div>
    <hr>

    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)


            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>

            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger mt-1'])}}
            {!! Form::close() !!}
        @endif
    @endif
    @endsection