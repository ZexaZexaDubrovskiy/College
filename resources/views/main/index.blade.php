@extends('main.headerFooter')
@section('content')

<!--  Main banner section #09458d -->
<section class="w3l-main-banner">
    <div class="companies20-content" style="background: #c4d5e4">
        <div class="companies-wrapper">
            <div class="container">
                <div class="banner-item">
                    <div class="banner-view">
                        <div class="banner-info">
                            <h3 class="banner-text">
                                Рыбинский<br> полиграфический колледж
                            </h3>
                            <p class="my-4 mb-sm-5">Это современное учебное заведение нового типа,
                                осуществляющее подготовку специалистов со средним профессиональным образованием по всем направлениям полиграфического профиля.
                            </p><br>
                            <a href="#signup.html" class="btn btn-primary theme-button mr-3">Поступающему</a>
                            <a href="#courses.html" class="btn btn-outline-primary theme-button">Войти</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  //Main banner section -->
<section class="w3l-index5" id="about">
    <div class="new-block py-5">
        <div class="container py-lg-3">
            <div class="header-section text-center">
                <h3>Информация об Учредителе</h3>
                <p class="mt-3 mb-5"><br><b>Учредитель колледжа:</b> Департамент образования Ярославской области
                    <br><b>Директор департамента:</b> Лобода Ирина Валентиновна
                    <br><b>Адрес:</b> 150000, г. Ярославль, ул. Советская, д. 7
                    <br><b>Телефон:</b> 8 (4852) 40-18-95
                    <br><b>Факс:</b> 8 (4852) 72-83-81
                    <br><b>E-mail:</b> dobr@region.adm.yar.ru</p>
{{--                <a href="#signup.html" class="btn btn-primary theme-button">Подать заявление</a>  #c4d5e4 --}}
            </div>
        </div>
    </div>
</section>
<!-- stats -->
<section class="w3l-stats py-lg-5 py-4" id="stats">
    <div class="gallery-inner container py-md-5 py-4">
        <div class="row stats-con text-white">
            <div class="col-md-3 col-6 stats_info counter_grid1">
                <span class="fa fa-graduation-cap"></span>
                <p class="counter">13</p>
                <h4>Специальностей</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid">
                <span class="fa fa-smile-o"></span>
                <p class="counter">5</p>
                <h4>Специальностей ТОП 50</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-5">
                <span class="fa fa-history"></span>
                <p class="counter">100</p>
                <h4>лет работы</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-5">
                <span class="fa fa-users"></span>
                <p class="counter">890</p>
                <h4>Учащихся</h4>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->
<section class="w3l-index-block4">
    <div class="feature-16-main py-5">
        <div class="container py-lg-3">
            <div class="header-section text-center">
                <h3>Объявления</h3>
                <p class="mt-3 mb-5">Актуальные объявления для родителей и студентов</p>
            </div>
            <div class="features-grids">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-16-gd">
                            <div class="feature-16-gd-info">
                                <h4 class="mt-4 mb-2">Информация для родителей</h4>

                                <a href="services.html" class="btn btn-primary theme-button mt-4">Смотреть</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <div class="feature-16-gd">
                            <div class="feature-16-gd-info">
                                <h4 class="mt-4 mb-2">Информация для студентов</h4>
                                <a href="services.html" class="btn btn-primary theme-button mt-4">Смотреть</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<div class="w3l-faq-block py-5">
    <div class="container py-lg-5">
        <div class="header-section mb-4">
            <h3>FAQ</h3>
        </div>
        <div class="row">
            <div class="col-md-8 mt-md-0 mt-5">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <section class="w3l-faq" id="faq">
                            <div class="faq-page">
                                <ul>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Вопросы связанные с общежитием</h2>
                                        <p>Общежитие вмещает 120 человек. Стоимость для льготников составляет 102,00 руб. в день.
                                        Стоимость месяца проживания 750 рублей. Студенты в статусе опекаемых или сирот проживают бесплатно.
                                        Кол-во проживающих в комнате максимум 4 человека. Расстояние от общежития до колледжа 100 метров.
                                        </p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Какие специальности имеет колледж?</h2>
                                        <p>

                                            Издательское дело.<br>
                                            Реклама. Дизайн (по отраслям).<br>
                                            Экономика и бухгалтерский учет (по отраслям)<br>
                                            Коммерция (по отраслям).<br>
                                            Печатное дело (ТОП-50).<br>
                                            Графический дизайнер (ТОП-50).<br>
                                            Сетевое и системное администрирование (ТОП-50)<br>
                                            Информационные системы и программирование (ТОП-50).<br>
                                            Туризм.<br>
                                            Товароведение и экспертиза качества потребительских товаров.<br>
                                            Фотограф.<br>
                                            Монтаж, техническое обслуживание и ремонт промышленного оборудования (ТОП-50).
                                        </p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Документы необходимые для поступления</h2>
                                        <p>Аттестат об окончания 9 или 11 классов.
                                            Паспорт.
                                        </p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Документы необходимые для заселения в общежитие</h2>
                                        <p>Паспорт, снилс.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Больницы привязанные к колледжу?</h2>
                                        <p>Все общежитские прикпреляются в пироговской больнице в течении месяца</p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <section class="w3l-faq" id="faq">
                            <div class="faq-page">
                                <ul>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>But I must explain to you how all this idea?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>At vero eos iusto odio ducimus qui?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Sed ut perspiciatis unde omnis?</h2>
                                        <p>Sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>The standard chunk of Lorem Ipsum used since the 1500s?</h2>
                                        <p>Consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>We denounce with righteous?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis facere voluptatibus consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>But I must explain to you how all this idea?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>At vero eos iusto odio ducimus qui?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>There are many variations of passages but the majority?</h2>
                                        <p>Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis facere voluptatibus consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <section class="w3l-faq" id="faq">
                            <div class="faq-page">
                                <ul>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>We denounce with righteous?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis facere voluptatibus consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>At vero eos iusto odio ducimus qui?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>But I must explain to you how all this idea?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Sed ut perspiciatis unde omnis?</h2>
                                        <p>Sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>The standard chunk of Lorem Ipsum used since the 1500s?</h2>
                                        <p>Consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>There are many variations of passages but the majority?</h2>
                                        <p>Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis facere voluptatibus consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>But I must explain to you how all this idea?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>perspiciatis unde omnis?</h2>
                                        <p>Sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
