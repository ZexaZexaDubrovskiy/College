@extends('main.headerFooter')
@section('content')




    <section class="w3l-services2">
        <div class="feature-16-main py-5">
            <div class="container py-lg-3">
                <div class="mb-3">
                    <tr>
                        <td>
                            <img style="width: 300px; height: 300px;"
                                 src="data:image/jpeg;base64, {{base64_encode($contact->avatar)}}"/>

                        </td>
                        <td>
                            <h4><u><a style="color: #09458d"
                                        href="{{ route('contact.show', $contact->id) }}">{{ $contact->FIO }} </a> </u>
                                <p> <br>
                                    <b>{{$contact->post}}</b> <br>
                                    Номер телефона: {{$contact->phone}} <br>
                                    Почта: {{$contact->email}} <br>
                                    Рабочее время: {{$contact->workTime}} <br>
                                    Образование: {{$contact->education}} <br>
                                    Стаж: {{$contact->experience}} <br>
                                    Дополнительно: {{$contact->description}} <br>
                                </p>
                        </td>

                    </tr>
                </div>
                @can('view', auth()->user())
                <div>
                    <form action="{{ route('contact.delete', $contact->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </div>
                <div><a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-warning">Изменить(администратор)</a></div>
                <div><a href="{{ route('contact.index') }}" class="btn btn-secondary">Назад</a></div>
                    @endcan
            </div>
        </div>
    </section>


@endsection
