@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="from-group mt-1">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter your post title'])}}
        </div>
        <div class="from-group mt-1">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter your post body'])}}
        </div>
        <div class="form-group mt-2">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary mt-1'])}}
    {!! Form::close() !!}
@endsection