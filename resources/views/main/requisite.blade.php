@extends('main.headerFooter')
@section('content')

    <script>
        tinymce.init({
            selector: '#myTextarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss autosave',
            toolbar: 'save undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                {value: 'First.Name', title: 'First Name'},
                {value: 'Email', title: 'Email'},
            ]
        });

    </script>

    <!--  //Main banner section -->
    <section class="w3l-index5" id="about">
        <div class="new-block py-5">
            <div class="container py-lg-3">
                <div class="header-section text-center">
                    <h3><b>Банковские реквизиты</b></h3>
                </div>
                <div class="mt-5">
                    @if(auth()->user() != null && (auth()->user()->role == 'admin' || auth()->user()->role == 'helper'))
                        <form action="{{ route('requisite.update', 2) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <textarea id="myTextarea" name="myTextarea">
                        @endif
                                @php
                                    $htmlText = \Illuminate\Support\Facades\DB::table('html_table')->where('namePage', '=', 'requisite')->first();
                                    echo $htmlText->htmlData;
                                @endphp
                                @if(auth()->user() != null && (auth()->user()->role == 'admin' || auth()->user()->role == 'helper'))
                            </textarea>

                            <div class='col-auto mt-3'>
                                <button type="submit" class="btn btn-primary mb-3">Обновить</button>
                            </div>
                        </form>
                    @endif



{{--                    <table class="table">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td>Дата начала действия реквизитов</td>--}}
{{--                            <td>01.01.2021</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Полное наименование организации</td>--}}
{{--                            <td>государственное профессиональное образовательное учреждение Ярославской области Рыбинский полиграфический колледж</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Сокращенное название</td>--}}
{{--                            <td>ГПОУ ЯО Рыбинский полиграфический колледж</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>ИНН</td>--}}
{{--                            <td>7610001424</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>КПП</td>--}}
{{--                            <td>761001001</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Почтовый адрес</td>--}}
{{--                            <td>152900, Россия, Ярославская обл., г. Рыбинск, ул. Расплетина, д. 47</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Получатель</td>--}}
{{--                            <td>ДФ Ярославской области (ГПОУ ЯО Рыбинский полиграфический колледж, л/с 903062206)</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Банк получателя</td>--}}
{{--                            <td>Отделение Ярославль // УФК по Ярославской области г. Ярославль</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>БИК</td>--}}
{{--                            <td>017888102</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Корреспондирующий счет банка</td>--}}
{{--                            <td>40102810245370000065</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Расчетный счет</td>--}}
{{--                            <td>03224643780000007101</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Наименование должности руководителя</td>--}}
{{--                            <td>директор</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Фамилия, имя, отчество руководителя</td>--}}
{{--                            <td>Зернова Марина Александровна</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Руководитель осуществляет деятельность на основании</td>--}}
{{--                            <td>Устава</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>QR-код с реквизитами для оплаты образовательных услуг через личный кабинет системы Сбербанк Онлайн</td>--}}
{{--                            <td>--}}

{{--                                Внимание!<br>--}}
{{--                                При заполнении реквизитов в личном кабинете системы--}}
{{--                                Сбербанк Онлайн в графе «Назначение платежа» необходимо--}}
{{--                                вписать в зависимости от ситуации одно из назначений--}}
{{--                                «Оплата основного образования» или «Оплата дополнительного образования».</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Информация для оплаты обучения через банк</td>--}}
{{--                            <td>--}}
{{--                                <img src="http://www.rpcollege.ru/uploads/static/detail/QR.jpg" style="width: 300px; height: 300px;">--}}
{{--                                <br>Внимание!<br>--}}
{{--                                При оплате обучения через банк в платежных документах необходимо указать код ОКТМО 78715000 и код КБК 00000000000000000130.</td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
