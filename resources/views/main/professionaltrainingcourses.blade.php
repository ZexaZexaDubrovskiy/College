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
                    <h3><b>ПРОФЕССИОНАЛЬНОЕ ОБРАЗОВАНИЕ</b></h3>
                    <h5 class="mt-3">Курсы повышения квалификации по основным профессиональным образовательным программам и программам профессиональной подготовки</h5>
                </div>

                @if(auth()->user() != null && (auth()->user()->role == 'admin' || auth()->user()->role == 'helper'))
                    <form action="{{ route('professionaltrainingcourses.update', 3) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <textarea id="myTextarea" name="myTextarea">
                        @endif
                            @php
                                $htmlText = \Illuminate\Support\Facades\DB::table('html_table')->where('namePage', '=', 'professionaltrainingcourses')->first();
                                echo $htmlText->htmlData;
                            @endphp
                            @if(auth()->user() != null && (auth()->user()->role == 'admin' || auth()->user()->role == 'helper'))
                            </textarea>

                        <div class='col-auto mt-3'>
                            <button type="submit" class="btn btn-primary mb-3">Обновить</button>
                        </div>
                    </form>
                @endif



{{--                <div>--}}
{{--                    <table class="table mb-5 mt-5">--}}
{{--                        <thead>--}}
{{--                        <tr class="text-left">--}}
{{--                            <th scope="col" rowspan="2">Перечень программ повышения квалификации и профессиональной переподготовки</th>--}}
{{--                            <th scope="col" >Вид обучения</th>--}}
{{--                            <th scope="col" >Срок обучения</th>--}}
{{--                            <th scope="col" >Время обучения</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}

{{--                        <tr>--}}
{{--                            <td>Оператор станков с числовым программным управлением</td>--}}
{{--                            <td>повышение квалификации</td>--}}
{{--                            <td>2 мес.</td>--}}
{{--                            <td>160 ч.</td>--}}
{{--                        </tr>--}}
{{--                        <td>--}}
{{--                            <td>переподготовка</td>--}}
{{--                            <td>3 мес.</td>--}}
{{--                            <td>254 ч.</td>--}}
{{--                        </td>--}}


{{--                        <tr>--}}
{{--                            <td>Оператор ЭВМ</td>--}}
{{--                            <td>повышение квалификации</td>--}}
{{--                            <td>2 мес.</td>--}}
{{--                            <td>160 ч.</td>--}}
{{--                        </tr>--}}
{{--                        <td>--}}
{{--                        <td>переподготовка</td>--}}
{{--                        <td>3 мес.</td>--}}
{{--                        <td>254 ч.</td>--}}
{{--                        </td>--}}


{{--                        <tr>--}}
{{--                            <td>Ландшафтный дизайн</td>--}}
{{--                            <td>повышение квалификации</td>--}}
{{--                            <td>2 мес.</td>--}}
{{--                            <td>160 ч.</td>--}}
{{--                        </tr>--}}




{{--                        <tr>--}}
{{--                            <td>Автоматизация бухгалтерского учета (1С: Бухгалтерия 8.2)</td>--}}
{{--                            <td>повышение квалификации</td>--}}
{{--                            <td>2 мес.</td>--}}
{{--                            <td>160 ч.</td>--}}
{{--                        </tr>--}}




{{--                        <tr>--}}
{{--                            <td>Бухгалтерия (1С: Бухгалтерия)</td>--}}
{{--                            <td>повышение квалификации</td>--}}
{{--                            <td>2 мес.</td>--}}
{{--                            <td>160 ч.</td>--}}
{{--                        </tr>--}}
{{--                        <td>--}}
{{--                        <td>переподготовка</td>--}}
{{--                        <td>3 мес.</td>--}}
{{--                        <td>254 ч.</td>--}}
{{--                        </td>--}}


{{--                        <tr>--}}
{{--                            <td>Бухгалтерский учет и современные информационные технологии</td>--}}
{{--                            <td>повышение квалификации</td>--}}
{{--                            <td>2 мес.</td>--}}
{{--                            <td>160 ч.</td>--}}
{{--                        </tr>--}}


{{--                        <tr>--}}
{{--                            <td>Компьютерная 3D графика</td>--}}
{{--                            <td>повышение квалификации</td>--}}
{{--                            <td>2 мес.</td>--}}
{{--                            <td>160 ч.</td>--}}
{{--                        </tr>--}}
{{--                        <td>--}}
{{--                        <td>переподготовка</td>--}}
{{--                        <td>3 мес.</td>--}}
{{--                        <td>254 ч.</td>--}}
{{--                        </td>--}}

{{--                        <tr>--}}
{{--                            <td>Менеджер в торговле и сфере услуг</td>--}}
{{--                            <td>повышение квалификации</td>--}}
{{--                            <td>2 мес.</td>--}}
{{--                            <td>160 ч.</td>--}}
{{--                        </tr>--}}
{{--                        <td>--}}
{{--                        <td>переподготовка</td>--}}
{{--                        <td>3 мес.</td>--}}
{{--                        <td>254 ч.</td>--}}
{{--                        </td>--}}

{{--                        <tr>--}}
{{--                            <td>Компьютерный дизайн</td>--}}
{{--                            <td>повышение квалификации</td>--}}
{{--                            <td>2 мес.</td>--}}
{{--                            <td>160 ч.</td>--}}
{{--                        </tr>--}}
{{--                        <td>--}}
{{--                        <td>переподготовка</td>--}}
{{--                        <td>3 мес.</td>--}}
{{--                        <td>254 ч.</td>--}}
{{--                        </td>--}}

{{--                        <tr>--}}
{{--                            <td>Менеджмент</td>--}}
{{--                            <td>повышение квалификации</td>--}}
{{--                            <td>2 мес.</td>--}}
{{--                            <td>160 ч.</td>--}}
{{--                        </tr>--}}
{{--                        <td>--}}
{{--                        <td>переподготовка</td>--}}
{{--                        <td>3 мес.</td>--}}
{{--                        <td>254 ч.</td>--}}
{{--                        </td>--}}

{{--                        <tr>--}}
{{--                            <td>Основы предпринимательской деятельности</td>--}}
{{--                            <td>краткосрочное повышение квалификации</td>--}}
{{--                            <td>1 мес.</td>--}}
{{--                            <td>72 ч.</td>--}}
{{--                        </tr>--}}



{{--                        <tr>--}}
{{--                            <td>Технология создания WEB- сайтов</td>--}}
{{--                            <td>повышение квалификации</td>--}}
{{--                            <td>2 мес.</td>--}}
{{--                            <td>160 ч.</td>--}}
{{--                        </tr>--}}
{{--                        <td>--}}
{{--                        <td>переподготовка</td>--}}
{{--                        <td>3 мес.</td>--}}
{{--                        <td>254 ч.</td>--}}
{{--                        </td>--}}



{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                    * Стоимость обучения указана за одного человека за весь период обучения<br>--}}
{{--                    Чтобы получить более детальную информацию по интересующей вас специальности (профессии), щелкните по ее наименованию в таблице.<br>--}}
{{--                    <div class="text-right mt-5">--}}
{{--                        <p>Контактное лицо: Гукетлев Александр Ибрагимович,<br>--}}
{{--                            руководитель многопрофильного сетевого ресурсного центра<br>--}}
{{--                            тел.: (4855) 26-35-48</p>--}}
{{--                    </div>--}}

{{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
