@extends('main.headerFooter')
@section('content')

    <div>
        <div>{{$post->id }}. {{$post->title}}</div>
        <div class="mb-3">sadasdasd</div>
        <div>
            <form action="{{ route('post.delete', $post->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>
        <div><a href="{{ route('post.edit', $post->id) }}" class="btn btn-warning">Edit</a></div>
        <div><a href="{{ route('post.index') }}" class="btn btn-secondary">Back</a></div>
    </div>

@endsection
