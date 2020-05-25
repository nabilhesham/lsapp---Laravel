@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="from-group mt-1">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter your post title'])}}
        </div>
        <div class="from-group mt-1">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter your post body'])}}
        </div>
        <div class="form-group mt-2">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary mt-1'])}}
    {!! Form::close() !!}
@endsection