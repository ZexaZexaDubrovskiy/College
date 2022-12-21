@extends('main.headerFooter')
@section('content')
    <section class="w3l-about1" id="about">
        <div id="cwp23-block" class="py-5">
            <div class="container py-lg-5">
                <div class="row cwp23-content align-items-center">
                    <div class="col-lg-6 cwp23-text">
                        <div class="cwp23-title">
                            <h3>{{ $specialization->title}}</h3>
                        </div>
                        <div class="cwp23-text-cols">
                            <div class="column">
                                <h2>Направление</h2>
                            </div>
                            <div class="column">
                                <p>{{ $specialization->direction}}</p>
                            </div>

                            <div class="column">
                                <h2>очная форма обучения</h2>
                            </div>
                            <div class="column">
                                <h2>На базе 9 классов | На базе 11 классов</h2>
                                <p>3 г. 10 м. | 2 г. 10 м.</p>
                            </div>
                            <div class="column">
                                <h2>заочная форма обучения</h2>
                            </div>
                            <div class="column">
                                <h2>На базе 9 классов | На базе 11 классов</h2>
                                <p>- | -</p>
                            </div>
                            <div class="column">
                                <h2>Вступительные экзамены</h2>
                            </div>
                            <div class="column">
                                <p>{{ $specialization->entranceExam}}</p>
                            </div>

                            <div class="column">
                                <h2>Бюджет</h2>
                            </div>
                            <div class="column">
                                <p>{{ $specialization->budget}}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="header-section text-center">
            <p class="mt-3 mb-5">{{ $specialization->description}}.</p>
        </div>


        <div><a href="{{ route('specialization.edit', $specialization->id) }}" class="btn btn-warning">Изменить(администратор)</a></div>
        <div class="ml-5"><a href="{{ route('specialization.index') }}" class="btn btn-secondary">Назад</a></div>

        <div class="mt-5">
            <form action="{{ route('specialization.delete', $specialization->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Удалить(администратор)">
            </form>
        </div>

    </section>
@endsection
