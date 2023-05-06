@extends('main.headerFooter')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <div>
        <section class="w3l-services2">
            <div class="container py-lg-3">
                <div class="mb-3">
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Заголовок</label>
                            <input value="{{old('title')}}" class="form-control" id="exampleFormControlTextarea1"
                                   type="text" name="title" placeholder="Заголовок">
                            @error('title')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                            <input value="{{old('description')}}" class="form-control" id="exampleFormControlTextarea1"
                                   type="text" name="description" placeholder="Описание">
                            @error('description')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Текст</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" type="text" name="text"
                                      placeholder="Текст">{{old('text')}}</textarea>
                            @error('text')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea9" class="form-label">Изображения</label>
                            <input type="file" name="photos[]" multiple="multiple" class="form-control"
                                   id="exampleFormControlTextarea9" placeholder="Изображения">
                            <!-- что за error? -->
                            @error('photos')
                            <p class="text-danger">{{ $__bag}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="typeIdIndex" class="form-label">Тип</label>
                            <select id="typeIdIndex" class="form-control" name="type">
                                <option value="0">Для всех</option>
                                <option value="1">Для родителей</option>
                                <option value="2">Для поступающих</option>
                            </select>
                            @error('type')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Создать</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection
