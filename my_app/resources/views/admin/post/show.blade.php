@extends('layouts.admin')
@section('content')
    <div>
         <div>{{ $posts->id }}.{{ $posts->name }}-------------{{ $posts->lastname }}</div>
    </div>
    <br><br>
    <div>
        <a href="{{ route('admin.post.edit', $posts->id) }}" class="btn btn-primary">Edit</a>
    </div>
    <br><br>
    <div>
        <form action="{{ route('post.delete', $posts->id) }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <br><br>
        <div>
            <a href="{{ route('admin.post.index') }} " class="btn btn-primary">Back</a>
        </div>
@endsection
