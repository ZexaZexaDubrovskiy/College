@extends('main.headerFooter')
@section('content')
    <div>
        <form action="{{ route('specialization.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Название специальности</label>
                <input value="{{old('title')}}" class="form-control" id="exampleFormControlTextarea1" type="text" name="title" placeholder="Название">
                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Код специальности</label>
                <input value="{{old('direction')}}" class="form-control" id="exampleFormControlTextarea1" type="text" name="direction" placeholder="Код специальности">
                @error('direction')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">На базе очного обучения через | (пример: 3г 10м | 2г 10 м)</label>
                <input value="{{old('fullTime')}}" class="form-control" id="exampleFormControlTextarea1" type="text" name="fullTime" placeholder="На базе очного обучения">
                @error('fullTime')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">На базе заочного обучения через | (пример: 3г 10м | 2г 10 м)</label>
                <input value="{{old('correspondence')}}" class="form-control" id="exampleFormControlTextarea1" type="text" name="correspondence" placeholder="На базе заочного обучения">
                @error('correspondence')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Вступительные экзаменты</label>
                <input value="{{old('entranceExam')}}" class="form-control" id="exampleFormControlTextarea1" type="text" name="entranceExam" placeholder="Вступительные экзаменты">
                @error('entranceExam')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Дополнительно</label>
                <input value="{{old('description')}}" class="form-control" id="exampleFormControlTextarea1" type="text" name="description" placeholder="Дополнительно">
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Бюджет</label>
                <input value="{{old('budget')}}" class="form-control" id="exampleFormControlTextarea1" type="text" name="budget" placeholder="Бюджет(вещественный тип)">
                @error('budget')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-5 mt-5">Создать</button>
            </div>
        </form>
    </div>
@endsection
