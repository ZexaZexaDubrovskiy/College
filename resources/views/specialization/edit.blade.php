@extends('main.headerFooter')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <div>
        <section class="w3l-services2">
            <div class="container py-lg-3">
                <div class="mb-3">
                    <form action="{{ route('specialization.update', $specialization->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Название специальности</label>
                            <input value="{{ $specialization->title }}" class="form-control"
                                   id="exampleFormControlTextarea1" type="text" name="title" placeholder="Название">
                            @error('title')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Код специальности</label>
                            <input value="{{ $specialization->direction }}" class="form-control"
                                   id="exampleFormControlTextarea1" type="text" name="direction"
                                   placeholder="Код специальности">
                            @error('direction')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">На базе очного обучения через |
                                (пример: 3г 10м | 2г 10 м)</label>
                            <input value="{{ $specialization->fullTime }}" class="form-control"
                                   id="exampleFormControlTextarea1" type="text" name="fullTime"
                                   placeholder="На базе очного обучения">
                            @error('fullTime')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">На базе заочного обучения через
                                | (пример: 3г 10м | 2г 10 м)</label>
                            <input value="{{ $specialization->correspondence }}" class="form-control"
                                   id="exampleFormControlTextarea1" type="text" name="correspondence"
                                   placeholder="На базе заочного обучения">
                            @error('correspondence')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Вступительные экзаменты</label>
                            <input value="{{ $specialization->entranceExam }}" class="form-control"
                                   id="exampleFormControlTextarea1" type="text" name="entranceExam"
                                   placeholder="Вступительные экзаменты">
                            @error('entranceExam')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Дополнительно</label>
                            <input value="{{ $specialization->description }}" class="form-control"
                                   id="exampleFormControlTextarea1" type="text" name="description"
                                   placeholder="Дополнительно">
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Бюджет</label>
                            <input value="{{ $specialization->budget }}" class="form-control"
                                   id="exampleFormControlTextarea1" type="text" name="budget"
                                   placeholder="Бюджет(вещественный тип)">
                            @error('budget')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Обновить</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection
