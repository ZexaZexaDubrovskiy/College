@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Title</label>
                <input class="form-control" id="exampleFormControlTextarea1" type="text" name="title"
                       value="123123" placeholder="title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" type="text" name="text"
                          placeholder="text">123123</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                <input class="form-control" id="exampleFormControlTextarea1" type="text"
                       value="123213"name="image" placeholder="Image">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Update</button>
            </div>
        </form>
    </div>
@endsection
