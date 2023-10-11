@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="POST">
            <div class="form-group">
                @csrf
              <label for="title">Name</label>
              <input type="text" name="name" class="form-control" id="title" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="title">LastName</label>
                <input type="text" name="lastname" class="form-control" id="title" placeholder="Enter LastName">
              </div> <div class="form-group">
                <label for="title">age</label>
                <input type="text" name="age" class="form-control" id="title" placeholder="Enter Name">
              </div>
              <br>
            <button type="submit" class="btn btn-primary">Create</button>
          </form>
    </div>
@endsection