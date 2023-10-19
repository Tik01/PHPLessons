@extends('layouts.main')
@section('content')
    <div>
    <div><a href="{{ route('post.create') }}" class="btn btn-primary mb-3">Add Post</a>    <br><br><br>
    </div>

        @foreach ($posts as $post)
            <div><a href="{{ route('post.show',$post->id) }}">{{ $post->id }}.{{ $post->name }}-------------{{ $post->lastname }}</a></div>
        @endforeach
        <div class="mt-5">
            {{ $posts->links() }}
        </div>
    </div>
@endsection