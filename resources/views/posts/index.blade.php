@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="card card-body bg-light m-3">
                    <div class="row">
                        <div class="col-md-4 col-sm-8">
                            <img src="/storage/cover_image/{{$post->cover_image}}" alt="Cover_Image" style="width:100%">
                        </div>
                        <div class="col-md-8 col-sm-4">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} || <strong>by {{$post->user->name}}</strong> </small>
                        </div>
                    </div> 
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p style="color:red">Sorry !! No Posts Found !!</p>
        @endif
@endsection