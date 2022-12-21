@extends('main.headerFooter')
@section('content')
    <div>
        <form action="{{ route('specialization.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Название специальности</label>
                <input value="{{ $specialization->title }}" class="form-control" id="exampleFormControlTextarea1" type="text" name="title" placeholder="Название">
                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Дополнительно</label>
                <input value="{{ $specialization->description }}" class="form-control" id="exampleFormControlTextarea1" type="text" name="description" placeholder="Дополнительно">
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Бюджет</label>
                <input value="{{ $specialization->budget }}" class="form-control" id="exampleFormControlTextarea1" type="text" name="budget" placeholder="Бюджет(вещественный тип)">
                @error('budget')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Обновить</button>
            </div>
        </form>
    </div>
@endsection
