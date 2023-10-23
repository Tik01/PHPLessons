@extends('layouts.admin')
@section('content')
    <div>

        @foreach ($posts as $post)
            <div><a href="{{ route('post.show',$post->id) }}">{{ $post->id }}.{{ $post->name }}-------------{{ $post->lastname }}</a></div>
        @endforeach
        <div class="mt-3">
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>
    </div>

@endsection
