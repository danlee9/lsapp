@extends('layouts.app')

@section('content')
    @if(count($posts))
        @foreach($posts as $post)
            <div class="card">
                <h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
        {{--  {{$posts->links()}}  --}}
    @else
        <p>No posts found</p>
    @endif
@endsection