@extends('layouts.app')

@section('content')
    @if(count($posts))
        @foreach($posts as $post)
            <div class="card">
                <h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
                <small>{{$post->created_at}}</small>
            </div>
        @endforeach
        {{--  {{$posts->links()}}  --}}
    @else
        <p>No posts found</p>
    @endif
@endsection