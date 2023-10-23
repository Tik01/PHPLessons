@extends('layouts.admin')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="POST">
            <div class="form-group">
                @csrf
                <label for="name">Name</label>
                <input value="{{ old('name') }}" type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                @error('name')
                <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="surname">LastName</label>
                <input value="{{ old('lastname') }}" type="text" name="lastname" class="form-control" id="surname" placeholder="Enter LastName">
                @error('lastname')
                <p style="color: red">{{ $message }}</p>
                @enderror
            </div> <div class="form-group">
                <label for="age">Age</label>
                <input value="{{ old('age') }}" type="text" name="age" class="form-control" id="age" placeholder="Enter Name">
                @error('age')
                <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <br>
            <div>
                <label for="university">Choose University</label>
                <select class="form-control" id="university" name="uname_id">
                    @foreach ($universities as $university)
                        <option {{ old('uname_id') == $university->id ? 'selected' : '' }}
                                value="{{ $university->id }}">{{ $university->uname }}</option>
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
