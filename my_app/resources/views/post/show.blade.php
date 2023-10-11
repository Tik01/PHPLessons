@extends('layouts.main')
@section('content')
    <div>
         <div>{{ $post->id }}.{{ $post->name }}-------------{{ $post->lastname }}</div>
    </div>
    <br><br>
    <div>
        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
    </div>
    <br><br>
    <div>
        <form action="{{ route('post.delete', $post->id) }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger"> 
        </form>
    </div>
    <br><br>
        <div>
            <a href="{{ route('post.index') }} " class="btn btn-primary">Back</a>
        </div>
@endsection