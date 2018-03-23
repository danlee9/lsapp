@extends('layouts.app')

@section('content')
    @if(count($posts))
        @foreach($posts as $post)
            <div class="card">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{--  {{$posts->links()}}  --}}
    @else
        <p>No posts found</p>
    @endif
@endsection