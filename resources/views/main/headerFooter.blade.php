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
    @vite(['resources/sass/app.scss', 'resources/css/style-starter.css'])
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
                    <a class="navbar-brand" href="{{ route('main.index') }}"><img src="images/logo-icon.png"
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

                    <div calss="fixedElement ">
                        <div class="collapse navbar-collapse fixedElement " id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item @@services-active">
                                    <a class="nav-link" href="index.html">Поступающему <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item @@services-active">
                                    <a class="nav-link" href="{{ route('specialization.index') }}">Специальности</a>
                                </li>
                                <li class="nav-item @@services-active">
                                    <a class="nav-link" href="services.html">Колледж</a>
                                </li>
                                <li class="nav-item @@contact-active">
                                    <a class="nav-link" href="{{ route('hostel.index') }}">Общежитие</a>
                                </li>
                                <li class="nav-item @@about-active">
                                    <a class="nav-link" href="{{ route('professionaltrainingcourses.index') }}">Курсы профподготовки</a>
                                </li>
                                <li class="nav-item @@about-active">
                                    <a class="nav-link" href="{{ route('requisite.index') }}">Банковские реквизиты</a>
                                </li>
                                <li class="nav-item @@about-active">
                                    <a class="nav-link" href="about.html">Расписание</a>
                                </li>
                                <li class="nav-item @@about-active">
                                    <a class="nav-link" href="{{ route('post.index') }}">Новости</a>
                                </li>
                                <li class="nav-item @@contact-active">
                                    <a class="nav-link" href="{{ route('contact.index') }}">Контакты</a>
                                </li>
                                <li class="nav-item @@contact-active">
                                    <a class="nav-link" href="contact.html">Войти</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>


<!-- -->
@yield('content')








<!-- footer -->
<footer class="w3l-footer-29-main" id="footer">
    <div class="footer-29 py-5">
        <div class="container pb-lg-3">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 footer-list-29 footer-1 mt-md-4">
                    <a class="footer-logo mb-md-3 mb-2" href="#url"><img src="assets/images/logo-icon.png"
                                                                         alt=""/>РПК</a>
                    <p>Это современное учебное заведение нового типа, осуществляющее
                        подготовку специалистов со средним профессиональным образованием по всем направлениям
                        полиграфического профиля.</p>
                </div>
                <div class="col-lg-2 col-md-6 footer-list-29 footer-2 mt-5">
                    <h6 class="footer-title-29">Поступающему</h6>
                    <ul>
                        <li><a href="#gallery.html">Популярные вопросы</a></li>
                        <li><a href="#gallery.html">Общежитие</a></li>
                        <li><a href="#gallery.html">Специальности</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-list-29 footer-3 mt-5">
                    <div class="properties">
                        <h6 class="footer-title-29">Студенту</h6>
                        <a class="d-grid twitter-feed" href="#blog-single.html">
                            <img src="assets/images/g1.jpg" class="img-fluid rounded" alt="">
                            <p>Расписание занятий</p>
                        </a>
                        <a class="d-grid twitter-feed" href="#blog-single.html">
                            <img src="assets/images/g2.jpg" class="img-fluid rounded" alt="">
                            <p>Новости</p>
                        </a>
                        <a class="d-grid twitter-feed" href="#blog-single.html">
                            <img src="assets/images/g3.jpg" class="img-fluid rounded" alt="">
                            <p>Контакты</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-list-29 footer-4 mt-5">
                    <h6 class="footer-title-29">Родителям</h6>
                    <ul>
                        <li><a href="index.html">Приемная комиссия</a></li>
                        <li><a href="about.html">что то ещё</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="footers14-block" class="py-3">
        <div class="container">
            <div class="footers14-bottom text-center">
                <div class="copyright mt-1">
                    <p>&copy; 2022 ГПОУ ЯО Рыбинский полиграфический колледж </p>
                    <p>152900, Ярославская обл., г. Рыбинск, ул. Расплетина, 47, тел./факс: (4855) 26-35-48
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
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Template JavaScript -->

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats number counter -->


<!-- testimonials owlcarousel -->
<script src="assets/js/owl.carousel.js"></script>

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
