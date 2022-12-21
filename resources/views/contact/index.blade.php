@extends('main.headerFooter')
@section('content')

    <section class="w3l-services2">
        <div class="feature-16-main py-5">
            <div class="container py-lg-3">

                <div class="header-section text-center">
                    <h3>Контакты</h3>
                </div>

                <div class="features-grids">
                    <div class="row">
                        <table class="table table-sm table-dark">
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    @foreach($contacts as $contact)
                                    <tr>
                                        <td>
                                            <p>{{ $contact->FIO }}</p>
                                        </td>
                                        <td>
                                            <p> <b><u>{{$contact->FIO}}</u></b> <br>
                                                <b>{{$contact->post}}</b> <br>
                                                Номер телефона: {{$contact->phone}} <br>
                                                Почта: {{$contact->email}} <br>
                                                Рабочее время: {{$contact->workTime}} <br>
                                                Образование: {{$contact->education}} <br>
                                                Стаж: {{$contact->experience}} <br>
                                                Дополнительно о том какая крутая: {{$contact->description}} <br>
                                            </p>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </table>
                    </div>
                </div>

                <a href="{{ route('contact.create') }}" class="btn btn-primary mt-5">добавить типочка(администратор)</a>
            </div>
        </div>
    </section>
@endsection
