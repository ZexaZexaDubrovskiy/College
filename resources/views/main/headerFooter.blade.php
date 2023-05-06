<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Государственное профессиональное образовательное учреждение Ярославской области Рыбинский полиграфический
        колледж</title>

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS какая то чушь, но она работает. Я вообще бекэнд разработчик что вы хотели? Интересно кто будет читать это?))) -->
    @vite(['resources/sass/app.scss',
            'resources/css/style-starter.css',
            //'resources/js/app.js',
            //'resources/js/bootstrap.js',
            //'resources/js/bootstrapMy.min.js',
            //'resources/js/jquery.countup.js',
            //'resources/js/jquery.waypoints.min.js',
            //'resources/js/jquery-3.3.1.min.js',
           // 'resources/js/owl.carousel.js', 'resources/images',
            //'resources/fonts/FontAwesome.otf', 'resources/fonts/fontawesome-webfont.eot',
            //'resources/fonts/fontawesome-webfont.svg',
            // 'resources/fonts/fontawesome-webfont.ttf',
            //'resources/fonts/fontawesome-webfont.woff', 'resources/fonts/fontawesome-webfont.woff2'
            ])

</head>
<body>


<style>
    .fixedElement {
        position: fixed;
        top: 0;
        z-index: 100;
    }
</style>

<header class="w3l-header">
    <div class="hero-header-11">
        <div class="hero-header-11-content">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
                    <a class="navbar-brand" href="{{ route('main.index') }}"><img src="{{ asset('//images logo-icon.png')}}"
                                                                                  alt=""/>РПК</a>
                    <!-- if logo is image enable this
                <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a> -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </button>


                    <!-- gjvtyzk-->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <ul>
                                <li class="nav-item @@services-active">
                                    <a class="nav-link" href="{{ route('specialization.index') }}">Специальности</a>
                                </li>
                                <li class="nav-item @@contact-active">
                                    <a class="nav-link" href="{{ route('hostel.index') }}">Общежитие</a>
                                </li>
                            </ul>

                            <ul>
                                <li class="nav-item @@about-active">
                                    <a class="nav-link" href="{{ route('professionaltrainingcourses.index') }}">Курсы
                                        профподготовки</a>
                                </li>
                                <li class="nav-item @@about-active">
                                    <a class="nav-link" href="{{ route('requisite.index') }}">Банковские реквизиты</a>
                                </li>

                            </ul>

                            <ul>
                                <li class="nav-item @@about-active">
                                    <a class="nav-link" href="{{ route('post.index') }}">Новости</a>
                                </li>
                                <li class="nav-item @@contact-active">
                                    <a class="nav-link" href="{{ route('contact.index') }}">Контакты</a>
                                </li>
                            </ul>

                            <ul>
                                <?php $group = \Illuminate\Support\Facades\DB::table('groups')->first() ?>
                                <li><a class="nav-link" href="{{ route('timetable.show', $group->id) }}">Расписание</a></li>
                                <li><a class="nav-link" href="">Войти</a></li>
                            </ul>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>


<!-- -->
@yield('content')








<!-- footer -->
<footer class="w3l-footer-29-main" id="footer" >
    <div class="footer-29 py-5" style="background: #c4d5e4">
        <div class="container pb-lg-3">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 footer-list-29 footer-1 mt-md-4" >
                    <a class="footer-logo mb-md-3 mb-2" href="#url" style="color: black"><img src="../../images/logo-icon.png"
                                                                         alt="" />РПК</a>
                    <p style="color: black">Это современное учебное заведение нового типа, осуществляющее
                        подготовку специалистов со средним профессиональным образованием по всем направлениям
                        полиграфического профиля.</p>
                </div>
                <div class="col-lg-2 col-md-6 footer-list-29 footer-2 mt-5 ml-4 ">
                    <h6 class="footer-title-29" style="color: black">Поступающему и родителям</h6>
                    <ul>
                        <li><a href="{{ route('hostel.index') }}" style="color: black">Общежитие</a></li>
                        <li><a href="{{ route('specialization.index') }}" style="color: black">Специальности</a></li>
                        <li><a href="{{ route('professionaltrainingcourses.index') }}" style="color: black">Курсы профподготовки</a></li>
                        <li><a href="{{ route('contact.index') }}" style="color: black">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-list-29 footer-3 mt-5 ml-4">
                    <div class="properties">
                        <h6 class="footer-title-29" style="color: black">Студенту</h6>
                        <a class="d-grid twitter-feed" href="#" style="color: black">
                            <img src="../../images/g1.jpg" class="img-fluid rounded" alt="">
                            <?php $group = \Illuminate\Support\Facades\DB::table('groups')->first() ?>
                            <a href="{{ route('timetable.show', $group->id) }}" style="color: black">Расписание занятий</a>
                        </a>
                        <a class="d-grid twitter-feed" href="#">
                            <img src="../../images/g2.jpg" class="img-fluid rounded" alt="" >
                            <a href="{{ route('post.index', 0) }}" style="color: black">Новости</a>
                        </a>
                        <a class="d-grid twitter-feed" href="#">
                            <img src="../../images/g3.jpg" class="img-fluid rounded" alt="">
                            <a href="{{ route('contact.index') }}" style="color: black">Контакты</a>
                        </a>
                        <a class="d-grid twitter-feed" href="#">
                            <img src="../../images/g3.jpg" class="img-fluid rounded" alt="">
                            <a href="{{ route('requisite.index') }}" style="color: black">Банковские реквизиты</a>
                        </a>
                    </div>
                </div>
{{--                <div class="col-lg-2 col-md-6 footer-list-29 footer-4 mt-5">--}}
{{--                    <h6 class="footer-title-29" style="color: black">Родителям</h6>--}}
{{--                    <ul>--}}
{{--                        <li><a href="" style="color: black">Приемная комиссия</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <div id="footers14-block" class="py-3 mt-1" style="background: #c4d5e4">
        <div class="container">
            <div class="footers14-bottom text-center">
                <div class="copyright mt-1">
                    <p style="color: black">&copy; 2022 ГПОУ ЯО Рыбинский полиграфический колледж </p>
                    <p style="color: black">152900, Ярославская обл., г. Рыбинск, ул. Расплетина, 47, тел./факс: (4855) 26-35-48
                        &ensp;&ensp;&ensp; e-mail: rpcollege.rybinsk@yarregion.ru</p>
                </div>
            </div>
        </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->

</footer>
<!-- Footer -->

<!-- jQuery and Bootstrap JS -->
<script src="../../js/jquery-3.3.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>

<!-- Template JavaScript -->

<!-- stats number counter-->
<script src="../../jquery.waypoints.min.js"></script>
<script src="../../js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats number counter -->


<!-- testimonials owlcarousel -->
<script src="../../js/owl.carousel.js"></script>

<!-- script for owlcarousel -->
<script>
    $(document).ready(function () {
        $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 1,
                    nav: false
                },
                667: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: false
                }
            }
        })
    })
</script>
<!-- //script for owlcarousel -->
<!-- //testimonials owlcarousel -->

<!-- script for courses -->
<script>
    $(document).ready(function () {
        $('.owl-two').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 1,
                    nav: false
                },
                667: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false
                }
            }
        })
    })
</script>
<!-- //script for courses -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->

</body>

</html>
