@extends('main.headerFooter')
@section('content')
    <!--  //спецральности section -->
    <section class="w3l-services2">
        <div class="feature-16-main py-5">
            <div class="container py-lg-3">

                <div class="header-section text-center">
                    @if($whom == 1)
                        <h3>Объявления для родителей</h3>
                    @else
                        @if($whom == 2)
                            <h3>Объявления для поступающих</h3>
                        @endif
                    @endif
                </div>
                <div class="features-grids">
                    <div class="row">
                        @foreach($posts as $post)
                            @if($post->type == $whom)
                                <div class="col-lg-4 col-md-6 featured-service">
                                    <div class="feature-16-gd">
                                        <div class="feature-16-gd-info">
                                            <h4 class="mt-4 mb-2"><a
                                                    href="{{ route('post.show', $post->id) }}">{{ $post->title }} </a>
                                            </h4>
                                            <a href="{{ route('post.show', $post->id) }}"
                                               class="btn btn-outline-primary theme-button mt-4">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('post.create') }}" class="btn btn-primary mt-5">добавить новость(администратор)</a>
            </div>
        </div>
    </section>
@endsection
