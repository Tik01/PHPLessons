@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="POST">
            <div class="form-group">
                @csrf
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="surname">LastName</label>
                <input type="text" name="lastname" class="form-control" id="surname" placeholder="Enter LastName">
              </div> <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control" id="age" placeholder="Enter Name">
              </div>
              <br>
              <div>
                <label for="university">Choose University</label>
                <select class="form-control" id="university" name="uname_id">
                  @foreach ($universities as $university)
                      <option value="{{ $university->id }}">{{ $university->uname }}</option>
                      @endforeach
                </select>
              </div>
              <br><br>
              <div>
                <label for="tag">Tags</label>
                <select class="form-control" multiple id="tag" name="tags[]">
                  @foreach ($tags as $tag)
                  <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                  @endforeach
                </select>
              </div>
            <button type="submit" class="btn btn-primary">Create</button>
          </form>
    </div>
@endsection