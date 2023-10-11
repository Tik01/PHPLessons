@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.update',$post->id )}}" method="POST">
            <div class="form-group">
                @csrf
                @method('patch')
              <label for="title">Name</label>
              <input type="text" name="name" class="form-control" id="title" placeholder="Enter Name" value="{{ $post->name }}">
            </div>
            <div class="form-group">
                <label for="title">LastName</label>
                <input type="text" name="lastname" class="form-control" id="title" placeholder="Enter LastName"value="{{ $post->lastname }}">
              </div> <div class="form-group">
                <label for="title">age</label>
                <input type="text" name="age" class="form-control" id="title" placeholder="Enter age" value="{{ $post->age }}">
              </div>
              <br>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </div>
@endsection