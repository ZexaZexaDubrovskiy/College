@extends('main.headerFooter')
@section('content')
    <!--  //спецральности section -->
    <section class="w3l-services2">
        <div class="feature-16-main py-5">
            <div class="container py-lg-3">

                <div class="header-section text-center">
                    <h3>Очное и заочное отделение</h3>
                    <p class="mt-3 mb-5">Принято считать, что самые прочные знания человек получает, обучаясь на очном.
                        И это не случайно, потому что именно такой способ обучения дает систематизированные, глубокие и
                        обширные знания..</p>
                </div>

                <div class="features-grids">
                    <div class="row">
                        @foreach($specialties as $specialization)
                            <div class="col-lg-4 col-md-6 featured-service">
                                <div class="feature-16-gd">
                                    <div class="feature-16-gd-info">
                                        <h4 class="mt-4 mb-2"><a
                                                href="{{ route('specialization.show', $specialization->id) }}">{{ $specialization->title }} </a>
                                        </h4>
                                        <a href="{{ route('specialization.show', $specialization->id) }}"
                                           class="btn btn-outline-primary theme-button mt-4">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('specialization.create') }}" class="btn btn-primary mt-5">добавить специальность(администратор)</a>
            </div>
        </div>
    </section>
@endsection
