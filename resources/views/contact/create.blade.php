@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Title</label>
                <input value="{{old('title')}}" class="form-control" id="exampleFormControlTextarea1" type="text" name="title" placeholder="title">
                @error('idOffice')
                <p class="text-danger">{{ $message}}</p>
                @enderror

            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" type="text" name="text"
                          placeholder="text">{{old('title')}}</textarea>
                @error('idGroup')
                <p class="text-danger">{{ $message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                <input value="{{old('title')}}" class="form-control" id="exampleFormControlTextarea1" type="text" name="image" placeholder="Image">
                @error('idObject')
                <p class="text-danger">{{ $message}}</p>
                @enderror
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Update</button>
            </div>
        </form>
    </div>
@endsection
