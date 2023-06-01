@extends('main.headerFooter')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <div>
        <section class="w3l-services2">
            <div class="container py-lg-3">
                <div class="mb-3">

                    <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">FIO</label>
                            <input value="{{old('FIO')}}" class="form-control" id="exampleFormControlTextarea1"
                                   type="text" name="FIO" placeholder="FIO">
                            <!-- что за error? -->
                            @error('FIO')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea2" class="form-label">post</label>
                            <input value="{{old('post')}}" class="form-control" id="exampleFormControlTextarea2"
                                   type="text" name="post" placeholder="post">
                            <!-- что за error? -->
                            @error('post')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea3" class="form-label">phone</label>
                            <input value="{{old('phone')}}" class="form-control" id="exampleFormControlTextarea3"
                                   type="text" name="phone" placeholder="phone">
                            <!-- что за error? -->
                            @error('phone')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea4" class="form-label">email</label>
                            <input value="{{old('email')}}" class="form-control" id="exampleFormControlTextarea4"
                                   type="text" name="email" placeholder="email">
                            <!-- что за error? -->
                            @error('email')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea5" class="form-label">workTime</label>
                            <input value="{{old('workTime')}}" class="form-control" id="exampleFormControlTextarea5"
                                   type="text" name="workTime" placeholder="workTime">
                            <!-- что за error? -->
                            @error('workTime')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea6" class="form-label">education</label>
                            <input value="{{old('education')}}" class="form-control" id="exampleFormControlTextarea6"
                                   type="text" name="education" placeholder="education">
                            <!-- что за error? -->
                            @error('education')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea7" class="form-label">experience</label>
                            <input value="{{old('experience')}}" class="form-control" id="exampleFormControlTextarea7"
                                   type="text" name="experience" placeholder="experience">
                            <!-- что за error? -->
                            @error('experience')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea8" class="form-label">description</label>
                            <input value="{{old('description')}}" class="form-control" id="exampleFormControlTextarea8"
                                   type="text" name="description" placeholder="description">
                            <!-- что за error? -->
                            @error('description')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea9" class="form-label">avatar</label>
                            <input value="{{old('avatar')}}" class="form-control" id="exampleFormControlTextarea9"
                                   type="file" name="avatar" placeholder="avatar">
                            <!-- что за error? -->
                            @error('avatar')
                            <p class="text-danger">{{ $__bag}}</p>
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
