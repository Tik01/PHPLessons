@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.update',$post->id )}}" method="POST">
            <div class="form-group">
                @csrf
                @method('patch')
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{ $post->name }}">
            </div>
            <div class="form-group">
                <label for="surname">LastName</label>
                <input type="text" name="lastname" class="form-control" id="surname" placeholder="Enter LastName"value="{{ $post->lastname }}">
              </div> <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control" id="age" placeholder="Enter age" value="{{ $post->age }}">
              </div>
              <br>
              <div>
                <label for="university">Choose University</label>
                <select class="form-control" id="university" name="uname_id">
                  @foreach ($universities as $university)

                      <option {{ $university->id === $post->university->id ? 'selected':'' }}
                         value="{{ $university->id }}">{{ $university->uname }}</option>
                      @endforeach
                </select>
              </div>
              <br><br>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </div>
@endsection