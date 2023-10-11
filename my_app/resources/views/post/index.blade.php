@extends('layouts.main')
@section('content')
    <div>
        @foreach ($posts as $post)
            <div>{{ $post->name }}-------------{{ $post->lastname }}</div>
        @endforeach
    </div>
@endsection