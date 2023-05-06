@extends('main.headerFooter')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <div>
        <section class="w3l-services2">
            <div class="container py-lg-3">
                <div class="mb-3">


                    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Заголовок</label>
                            <input value="{{ $post->title }}" class="form-control" id="exampleFormControlTextarea1"
                                   type="text" name="title" placeholder="Заголовок">
                            @error('title')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                            <input value="{{ $post->description }}" class="form-control"
                                   id="exampleFormControlTextarea1" type="text" name="description"
                                   placeholder="Описание">
                            @error('description')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Текст</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" type="text" name="text"
                                      placeholder="Текст">{{$post->text}}</textarea>
                            @error('text')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea9" class="form-label">Добавить изображения</label>
                            <input type="file" name="photos[]" multiple="multiple" class="form-control"
                                   id="exampleFormControlTextarea9" placeholder="Изображения">
                            <!-- что за error? -->
                            @error('photos')
                            <p class="text-danger">{{ $__bag}}</p>
                            @enderror
                        </div>


                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Обновить</button>
                        </div>
                    </form>

                    <table class="table">
                        <tr>


                            @foreach($photos as $photo)
                                <td style="vertical-align: top">
                        @foreach($photo as $phot)
                            <tr>
                                <img style="width: 150px; height: 150px;"
                                     src="data:image/jpeg;base64, {{base64_encode($phot->url)}}"/>

                                <form action="{{ route('postPhoto.delete', $phot->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </tr>
                            @endforeach
                            </td>
                            @endforeach


                            </tr>
                    </table>


                </div>
        </section>
    </div>
@endsection
