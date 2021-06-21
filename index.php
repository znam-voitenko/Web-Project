<?php
	require_once 'include/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon" />

    <title>AutoGraff</title>
</head>

<body>
    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo" data-scroll="#intro">AG</div>

                <nav class="nav" id="nav">
                    <a class="nav__link" href="#" data-scroll="#about">About</a>
                    <a class="nav__link" href="#" data-scroll="#services">Service</a>
                    <a class="nav__link" href="#" data-scroll="#blog">Blog</a>
                    <a class="nav__link" href="#" data-scroll="#works">Work</a>
                    <a class="nav__link" href="#" data-scroll="#footer">Contact</a>
                </nav>

                <button class="nav-toggle" id="nav_toggle" type="button">
                    <span class="nav-toggle__item">Menu</span>
                </button>
            </div>
        </div>
    </header>


    <div class="page">

        <!-- Intro -->
        <div class="intro" id="intro">
            <div class="container">
                <div class="intro__inner">
                    <h2 class="intro__suptitle">Welcome to</h2>
                    <h1 class="intro__title">AutoGraff<span class="letter">™</span></h1>

                    <a class="btn" href="#">Learn More</a>
                </div>
            </div>

            <div class="slider">
                <div class="container">
                    <div class="slider__inner">
                        <div class="slider__item side-element">
                            <span class="slider__icon"><i class="fas fa-map-marker-alt"></i></span>

                            <span class="slider__text street">вул. Можайського, 19Б</span>
                        </div>
                        <div class="slider__item phone">
                            <span class="slider__icon"><i class="fab fa-telegram-plane"></i></span>
                            <span class="slider__text phone">+380 63 315 3315</span>
                        </div>
                        <div class="slider__item phone">
                            <span class="slider__icon phone"><i class="fab fa-viber"></i></span>
                            <span class="slider__text">+380 97 315 3315</span>
                        </div>
                        <div class="slider__item side-element">
                            <span class="slider__icon"><i class="far fa-envelope"></i></span>
                            <span class="slider__text email">sto.autograff@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.intro -->


        <!-- About -->
        <section class="section" id="about">
            <div class="container">

                <div class="section__header">
                    <h3 class="section__suptitle">About</h3>
                    <h2 class="section__title">Про нас</h2>
                    <div class="section__text">
                        <p>Ми професійно ремонтуємо автомобілі, а також виконуємо весь спектр послуг післягарантійного
                            сервісу.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card__item">
                        <div class="card__inner">
                            <div class="card__img">
                                <img src="assets/images/about/1.jpg" alt="">
                            </div>
                            <div class="card__text">Ремонт двигуна</div>
                        </div>
                    </div>

                    <div class="card__item">
                        <div class="card__inner">
                            <div class="card__img">
                                <img src="assets/images/about/2.jpg" alt="">
                            </div>
                            <div class="card__text">Заправка кондиціонера</div>
                        </div>
                    </div>

                    <div class="card__item">
                        <div class="card__inner">
                            <div class="card__img">
                                <img src="assets/images/about/3.jpg" alt="">
                            </div>
                            <div class="card__text">Розвал-сходження</div>
                        </div>
                    </div>
                </div>

            </div><!-- /.container -->
        </section>


        <!-- Statistics -->
        <div class="statistics">
            <div class="container">

                <div class="stat">
                    <div class="stat__item">
                        <div class="stat__count">42</div>
                        <div class="stat__text">Web Design Projects</div>
                    </div>
                    <div class="stat__item">
                        <div class="stat__count">123</div>
                        <div class="stat__text">happy client</div>
                    </div>
                    <div class="stat__item">
                        <div class="stat__count">15</div>
                        <div class="stat__text">award winner</div>
                    </div>
                    <div class="stat__item">
                        <div class="stat__count">99</div>
                        <div class="stat__text">cup of coffee</div>
                    </div>
                    <div class="stat__item">
                        <div class="stat__count">24</div>
                        <div class="stat__text">members</div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Services -->
        <section class="section" id="services">
            <div class="container">

                <div class="section__header">
                    <h3 class="section__suptitle">Service</h3>
                    <h2 class="section__title">Якісний сервіс</h2>
                </div>

                <div class="services">
                    <div class="services__item  services__item--border">
                        <img class="services__icon" src="assets/images/services/engine repair.png" alt="">

                        <div class="services__title">Ремонт двигунів</div>
                        <div class="services__text">Якщо ви замітили певні неполадки з власним двигуном, краще відразу
                            провести діагностику.</div>
                    </div>
                    <div class="services__item  services__item--border">
                        <img class="services__icon" src="assets/images/services/undercarriage repair.png" alt="">

                        <div class="services__title">Ремонт ходової</div>
                        <div class="services__text">Навчіться "слухати" підвіску автомобіля, адже багато в чому, безпека
                            на дорозі залежить від цього вміння</div>
                    </div>
                    <div class="services__item  services__item--border">
                        <img class="services__icon" src="assets/images/services/the collapse of convergence.png" alt="">

                        <div class="services__title">Розвал-сходження</div>
                        <div class="services__text">3D стенд Ravaglioli для перевірки і регулювання кутів установки
                            керованих коліс</div>
                    </div>
                    <div class="services__item  services__item--border">
                        <img class="services__icon" src="assets/images/services/computer diagnostics.png" alt="">

                        <div class="services__title">Комп'ютерна діагностика</div>
                        <div class="services__text">Сучасний діагностичний сканер дозволяє виявити проблему локально у
                            вашому авто</div>
                    </div>
                    <div class="services__item  services__item--border">
                        <img class="services__icon" src="assets/images/services/brakes.png" alt="">

                        <div class="services__title">Гальмівна
                            система</div>
                        <div class="services__text">Своєчасна заміна гальмівної рідини колодок та дисків, дозволить бути
                            впевненим в ефективній зупинці авто</div>
                    </div>
                    <div class="services__item services__item--border">
                        <img class="services__icon" src="assets/images/services/Maintenance.png" alt="">

                        <div class="services__title">Система охолодження</div>
                        <div class="services__text">Контроль працездатності термостата, водяної помпи, радіаторів,
                            сполучних патрубків системи, стан охолоджувальної рідини</div>
                    </div>
                    <div class="services__item">
                        <img class="services__icon" src="assets/images/services/tire fitting.png" alt="">

                        <div class="services__title">Шиномонтаж</div>
                        <div class="services__text">Сезонна заміна, балансування та індикатор рівня зносу шин </div>
                    </div>
                    <div class="services__item">
                        <img class="services__icon" src="assets/images/services/refueling the air conditioner.png"
                            alt="">

                        <div class="services__title">Заправка кондиціонерів</div>
                        <div class="services__text">Автоматична станція заправки автомобільних кондиціонерів фреоном R
                            134-A</div>
                    </div>
                    <div class="services__item">
                        <img class="services__icon" src="assets/images/services/cooling system.png" alt="">

                        <div class="services__title">Технічне обслуговування</div>
                        <div class="services__text">Своєчасна заміна моторної оливи і фільтрів</div>
                    </div>
                </div>

            </div><!-- /.container -->
        </section>


        <!-- Devices -->
        <section class="section section--devices">
            <div class="container container--devices">

                <div class="section__header">
                    <h3 class="section__suptitle suptitle__devices">For all devices</h3>
                    <h2 class="section__title title__devices">Unique design</h2>
                </div>

                <!-- <div class="devices">
                    <img class="devices__item" src="assets/images/ipad.png" alt="">
                    <img class="devices__item  devices__item--iphone" src="assets/images/iphone.png" alt="">
                </div>
                -->
            </div>
        </section>


        
<!-- Wedo -->
<?php require 'wedo.php'; ?>


        <!-- Team -->
        <section class="section section-card">
            <div class="container">

                <div class="section__header">
                    <h3 class="section__suptitle">Who we are</h3>
                    <h2 class="section__title">Meet our team</h2>
                    <div class="section__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card__item second">
                        <div class="card__inner">
                            <div class="card__img">
                                <img src="assets/images/team/1.jpg" alt="">
                            </div>
                            <div class="card__text">
                                <div class="social">
                                    <a class="social__item" href="#https://www.facebook.com/autograff.servis/"
                                        target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="social__item" href="#https://www.facebook.com/autograff.servis/"
                                        target="_blank">
                                        <i class="fab fa-telegram-plane"></i>
                                    </a>
                                    <a class="social__item" href="#viber://add?number=0973153315" target="_blank">
                                        <i class="fab fa-viber"></i>
                                    </a>
                                    <a class="social__item" href="#https://www.instagram.com/autograff.servis/"
                                        target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card__info">
                            <div class="card__name">Outside</div>
                        </div>
                    </div><!-- /.card__item -->

                    <div class="card__item second">
                        <div class="card__inner">
                            <div class="card__img">
                                <img src="assets/images/team/2.jpg" alt="">
                            </div>
                            <div class="card__text">
                                <div class="social">
                                    <a class="social__item" href="#https://www.facebook.com/autograff.servis/"
                                        target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="social__item" href="#https://www.facebook.com/autograff.servis/"
                                        target="_blank">
                                        <i class="fab fa-telegram-plane"></i>
                                    </a>
                                    <a class="social__item" href="#viber://add?number=0973153315" target="_blank">
                                        <i class="fab fa-viber"></i>
                                    </a>
                                    <a class="social__item" href="#https://www.instagram.com/autograff.servis/"
                                        target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card__info">
                            <div class="card__name">Inside</div>
                        </div>
                    </div><!-- /.card__item -->

                </div><!-- /.card -->

            </div><!-- /.container -->
        </section>


        <!-- Logos -->
        <div class="section  section--gray">
            <div class="container">

                <div class="logos">
                    <div class="logos__item">
                        <img class="logos__img" src="assets/images/logos/1.jpg" alt="">
                    </div>
                    <div class="logos__item second_block">
                        <img class="logos__img" src="assets/images/logos/2.png" alt="">
                    </div>
                    <div class="logos__item third_block">
                        <img class="logos__img" src="assets/images/logos/3.png" alt="">
                    </div>
                    <div class="logos__item fourth_block">
                        <img class="logos__img" src="assets/images/logos/4.png" alt="">
                    </div>
                    <div class="logos__item fifth_block">
                        <img class="logos__img" src="assets/images/logos/5.png" alt="">
                    </div>
                    <div class="logos__item six_block">
                        <img class="logos__img" src="assets/images/logos/6.png" alt="">
                    </div>
                </div>
            </div>
        </div>


        <!-- Works -->
        <section class="section" id="works">
            <div class="container">
                <div class="section__header">
                    <h3 class="section__suptitle">What we do</h3>
                    <h2 class="section__title">some of our work</h2>
                    <div class="section__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>

            <div class="works">
                <div class="works__col">
                    <div class="works__item">
                        <img class="works__image" src="assets/images/works/1.jpg" alt="">
                        <div class="works__info">
                            <div class="works__title">creatively designed</div>
                            <div class="works__text">Lorem ipsum dolor sit</div>
                        </div>
                    </div>
                    <div class="works__item">
                        <img class="works__image" src="assets/images/works/2.jpg" alt="">
                        <div class="works__info">
                            <div class="works__title">creatively designed</div>
                            <div class="works__text">Lorem ipsum dolor sit</div>
                        </div>
                    </div>
                </div>

                <div class="works__col">
                    <div class="works__item">
                        <img class="works__image" src="assets/images/works/3.jpg" alt="">
                        <div class="works__info">
                            <div class="works__title">creatively designed</div>
                            <div class="works__text">Lorem ipsum dolor sit</div>
                        </div>
                    </div>
                    <div class="works__item">
                        <img class="works__image" src="assets/images/works/4.jpg" alt="">
                        <div class="works__info">
                            <div class="works__title">creatively designed</div>
                            <div class="works__text">Lorem ipsum dolor sit</div>
                        </div>
                    </div>
                </div>

                <div class="works__col">
                    <div class="works__item">
                        <img class="works__image" src="assets/images/works/5.jpg" alt="">
                        <div class="works__info">
                            <div class="works__title">creatively designed</div>
                            <div class="works__text">Lorem ipsum dolor sit</div>
                        </div>
                    </div>
                </div>

                <div class="works__col">
                    <div class="works__item">
                        <img class="works__image" src="assets/images/works/6.jpg" alt="">
                        <div class="works__info">
                            <div class="works__title">creatively designed</div>
                            <div class="works__text">Lorem ipsum dolor sit</div>
                        </div>
                    </div>
                    <div class="works__item">
                        <img class="works__image" src="assets/images/works/7.jpg" alt="">
                        <div class="works__info">
                            <div class="works__title">creatively designed</div>
                            <div class="works__text">Lorem ipsum dolor sit</div>
                        </div>
                    </div>
                </div>
            </div><!-- /.works -->
        </section>


        <!-- Reviews -->
        <div class="section">
            <div class="container">

                <div class="reviews">

                    <div data-slider>
                        <div>
                            <div class="reviews__item">
                                <!--  <img class="reviews__photo" src="assets/images/avatar.png" alt="">-->
                                <div class="reviews__text">“ Чудова якість обслуговування та виконання роботи. Щиро
                                    вдячна за привітність, доброзичливість та високий професіоналізм. Найкращі побажання
                                    Вам за людяність та порядність! ”</div>
                                <div class="reviews__author">Natalia Skomarovskaya</div>
                            </div>
                        </div>

                        <div>
                            <div class="reviews__item">
                                <!--  <img class="reviews__photo" src="assets/images/avatar.png" alt="">-->
                                <div class="reviews__text">“ Отличный автосервис, профессиональная команда, современное
                                    оборудование, чистота, и прекрасное отношение к клиентам. ”</div>
                                <div class="reviews__author">Sergey Antonovich</div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews__item">
                                <!--  <img class="reviews__photo" src="assets/images/avatar.png" alt="">-->
                                <div class="reviews__text">“ Понравился хороший сервис, всё быстро делают и качественно,
                                    ребята приветливые и отзывчивые! Оборудование всё новое, современное. ”</div>
                                <div class="reviews__author">Наталия Друзь</div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews__item">
                                <!--  <img class="reviews__photo" src="assets/images/avatar.png" alt="">-->
                                <div class="reviews__text">“ Отличный сервис, классное оборудование, профессиональный
                                    подход, вежливый персонал. Рекомендую. Еще не встречал таких отзывчивых сотрудников.
                                    Объяснили суть проблемы настолько доступно, насколько я смог бы понять. ”</div>
                                <div class="reviews__author">Anatoliy Palyaniga</div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews__item">
                                <!--  <img class="reviews__photo" src="assets/images/avatar.png" alt="">-->
                                <div class="reviews__text">“ Дякую всьому колективу за профеналізм та гарне відношення.
                                    Станція нова, гарна та чиста. Навіть пригостили кавою. ”</div>
                                <div class="reviews__author">Tatyana Bogackaya</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <!-- Clients -->

        <!--  <section class="section  section--clients">
            <div class="container">

                <div class="section__header">
                    <h3 class="section__suptitle">Happy Clients</h3>
                    <h2 class="section__title">What people say</h2>
                </div>

                <div class="clients">
                    <div class="clients__item">
                        <img class="clients__photo" src="assets/images/clients/1.png" alt="">
                        <div class="clients__content">
                            <div class="clients__name">Matthew Dix</div>
                            <div class="clients__prof">Graphic Design</div>
                            <div class="clients__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                        </div>
                    </div>

                    <div class="clients__item">
                        <img class="clients__photo" src="assets/images/clients/2.png" alt="">
                        <div class="clients__content">
                            <div class="clients__name">Nick Karvounis</div>
                            <div class="clients__prof">Graphic Design</div>
                            <div class="clients__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                        </div>
                    </div>

                    <div class="clients__item">
                        <img class="clients__photo" src="assets/images/clients/3.png" alt="">
                        <div class="clients__content">
                            <div class="clients__name">Jaelynn Castillo </div>
                            <div class="clients__prof">Graphic Design</div>
                            <div class="clients__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                        </div>
                    </div>

                    <div class="clients__item">
                        <img class="clients__photo" src="assets/images/clients/4.png" alt="">
                        <div class="clients__content">
                            <div class="clients__name">Mike Petrucci</div>
                            <div class="clients__prof">Graphic Design</div>
                            <div class="clients__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>  -->


        <!-- Map -->
        <section class="section  section--map">
            <div class="container">
                <div class="map">
                    <h2 class="map__title">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="https://www.google.com/maps/dir//%D0%A1%D0%A2%D0%9E+%D0%92%D1%96%D0%BD%D0%BD%D0%B8%D1%86%D1%8F+AutoGraff+%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82+%D0%B4%D0%B2%D0%B8%D0%B3%D1%83%D0%BD%D1%96%D0%B2,+%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82+%D1%85%D0%BE%D0%B4%D0%BE%D0%B2%D0%BE%D1%97,+%D1%80%D0%BE%D0%B7%D0%B2%D0%B0%D0%BB+%D1%81%D1%85%D0%BE%D0%B4%D0%B6%D0%B5%D0%BD%D0%BD%D1%8F,+%D0%BA%D0%BE%D0%BC%D0%BF%E2%80%99%D1%8E%D1%82%D0%B5%D1%80%D0%BD%D0%B0+%D0%B4%D1%96%D0%B0%D0%B3%D0%BD%D0%BE%D1%81%D1%82%D0%B8%D0%BA%D0%B0,+%D1%88%D0%B8%D0%BD%D0%BE%D0%BC%D0%BE%D0%BD%D1%82%D0%B0%D0%B6,+%D0%B7%D0%B0%D0%BF%D1%80%D0%B0%D0%B2%D0%BA%D0%B0+%D0%BA%D0%BE%D0%BD%D0%B4%D0%B8%D1%86%D1%96%D0%BE%D0%BD%D0%B5%D1%80%D1%96%D0%B2,+%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%9C%D0%BE%D0%B6%D0%B0%D0%B9%D1%81%D1%8C%D0%BA%D0%BE%D0%B3%D0%BE,+19%D0%91,+%D0%92%D1%96%D0%BD%D0%BD%D0%B8%D1%86%D1%8F,+%D0%92%D1%96%D0%BD%D0%BD%D0%B8%D1%86%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+21032/@49.2533436,28.4830475,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x472d5b7094ab3c87:0xcc309de239c07606!2m2!1d28.4852303!2d49.2533541!3e0"
                            target="_blank">Прокласти маршрут</a>
                    </h2>
                </div>
                <div class="main-map">
                    <iframe class="location"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4379.886215981328!2d28.48650501668377!3d49.25183670366889!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcc309de239c07606!2z0KHQotCeINCS0ZbQvdC90LjRhtGPIEF1dG9HcmFmZiDRgNC10LzQvtC90YIg0LTQstC40LPRg9C90ZbQsiwg0YDQtdC80L7QvdGCINGF0L7QtNC-0LLQvtGXLCDRgNC-0LfQstCw0Lsg0YHRhdC-0LTQttC10L3QvdGPLCDQutC-0LzQv-KAmdGO0YLQtdGA0L3QsCDQtNGW0LDQs9C90L7RgdGC0LjQutCwLCDRiNC40L3QvtC80L7QvdGC0LDQtiwg0LfQsNC_0YDQsNCy0LrQsCDQutC-0L3QtNC40YbRltC-0L3QtdGA0ZbQsg!5e0!3m2!1sru!2sua!4v1619165000462!5m2!1sru!2sua"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>


        <!-- Blog -->
        <section class="section section--blog" id="blog">
            <div class="container">

                <div class="section__header">
                    <h3 class="section__suptitle">Our blog</h3>
                    <h2 class="section__title">Останні публікації</h2>
                </div>

                <div class="blog">
                    <div class="blog__item">
                        <div class="blog__header">
                            <a href="#">
                                <img class="blog__photo" src="assets/images/blog/1.jpg" alt="">
                            </a>
                            <div class="blog__date">
                                <div class="blog__date-day">15</div>
                                Oct
                            </div>
                        </div>
                        <div class="blog__content">
                            <div class="blog__title">
                                <a href="#">Навіщо регулювати розвал-сходження?</a>
                            </div>
                            <div class="blog__text">По-перше, виставлення правильних кутів сходження і розвалу коліс
                                дозволяє підвищити керованість автомобіля, його стійкість і стабільність під час руху...
                            </div>
                        </div>
                        <div class="blog__footer">
                            <div class="blog-stat">
                                <span class="blog-stat__item">
                                    <i class="far fa-eye"></i> 1542
                                </span>
                                <span class="blog-stat__item">
                                    <i class="far fa-comment-dots"></i> 3
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="blog__item">
                        <div class="blog__header">
                            <a href="#">
                                <img class="blog__photo" src="assets/images/blog/2.jpg" alt="">
                            </a>
                            <div class="blog__date">
                                <div class="blog__date-day">28</div>
                                Feb
                            </div>
                        </div>
                        <div class="blog__content">
                            <div class="blog__title">
                                <a href="#">обслуговування</a>
                            </div>
                            <div class="blog__text">Всі фахівці нашого СТО мають величезний досвід, у нашому СТО
                                AutoGraff використовуються ільки високоякісні перевірені матеріали...</div>
                        </div>
                        <div class="blog__footer">
                            <div class="blog-stat">
                                <span class="blog-stat__item">
                                    <i class="far fa-eye"></i> 1893
                                </span>
                                <span class="blog-stat__item">
                                    <i class="far fa-comment-dots"></i> 4
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="blog__item">
                        <div class="blog__header">
                            <a href="#">
                                <img class="blog__photo" src="assets/images/blog/3.jpg" alt="">
                            </a>
                            <div class="blog__date">
                                <div class="blog__date-day">11</div>
                                Oct
                            </div>
                        </div>
                        <div class="blog__content">
                            <div class="blog__title">
                                <a href="#">Розвал-сходження</a>
                            </div>
                            <div class="blog__text">Планове регулювання: коли «міжрозвалочний» пробіг складає близько
                                3️0 тис. км чи один раз на рік, в залежності від того, що настане раніше...</div>
                        </div>
                        <div class="blog__footer">
                            <div class="blog-stat">
                                <span class="blog-stat__item">
                                    <i class="far fa-eye"></i> 1563
                                </span>
                                <span class="blog-stat__item">
                                    <i class="far fa-comment-dots"></i> 2
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- /.blog -->

            </div><!-- /.container -->
        </section>


        <!-- Footer -->
        <footer class="footer" id="footer">
            <div class="container">

                <div class="footer__inner">
                    <div class="footer__col  footer__col--first">
                        <div class="footer__logo">AutoGraff</div>
                        <div class="footer__text">Наш автосервіс може запропонувати до ваших послуг кваліфікованих
                            майстрів, що мають досвід ремонту та обслуговування сучасних легкових автомобілів,
                            позашляховиків і мікроавтобусів. Ми професійно ремонтуємо автомобілі, а також виконуємо весь
                            спектр послуг післягарантійного сервісу.</div>

                        <div class="footer__social">
                            <div class="footer__social-header">
                                <b>15k</b> views on Google Map
                            </div>
                            <div class="footer__social-content">
                                Follow Us:
                                <a href="#" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>

                       <!--  <form class="subscribe" action="register.php" method="POST">
                            <input class="subscribe__input" type="email" name="email" placeholder="Your Email...">
                            <button class="subscribe__btn" id="subscribe__btn" type="submit">Subscribe</button>
                        </form> -->
                    </div><!-- /.footer__col -->

                    <div class="footer__col  footer__col--second">
                        <div class="footer__title">Blogs</div>

                        <div class="blogs">
                            <div class="blogs__item">
                                <img class="blogs__img" src="assets/images/blog/1.jpg" alt="">
                                <div class="blogs__content">
                                    <a class="blogs__title" href="#">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</a>
                                    <div class="blogs__date">Jan 9, 2016</div>
                                </div>
                            </div>

                            <div class="blogs__item">
                                <img class="blogs__img" src="assets/images/blog/2.jpg" alt="">
                                <div class="blogs__content">
                                    <a class="blogs__title" href="#">Lorem ipsum dolor</a>
                                    <div class="blogs__date">Jan 9, 2016</div>
                                </div>
                            </div>

                            <div class="blogs__item">
                                <img class="blogs__img" src="assets/images/blog/3.jpg" alt="">
                                <div class="blogs__content">
                                    <a class="blogs__title" href="#">Планове регулювання: коли «міжрозвалочний» пробіг
                                        складає близько 3️0 тис. км чи один раз на рік, в залежності від того, що
                                        настане раніше.</a>
                                    <div class="blogs__date">Jan 9, 2016</div>
                                </div>
                            </div>
                        </div><!-- /.blogs -->
                    </div>

                    <div class="footer__col  footer__col--third">
                        <div class="footer__title">Instagram</div>

                        <div class="instagram">
                            <a class="instagram__item" href="#" target="_blank">
                                <img src="assets/images/instagram/1.jpg" alt="">
                            </a>
                            <a class="instagram__item" href="#" target="_blank">
                                <img src="assets/images/instagram/2.jpg" alt="">
                            </a>
                            <a class="instagram__item" href="#" target="_blank">
                                <img src="assets/images/instagram/3.jpg" alt="">
                            </a>
                            <a class="instagram__item" href="#" target="_blank">
                                <img src="assets/images/instagram/4.jpg" alt="">
                            </a>
                            <a class="instagram__item" href="#" target="_blank">
                                <img src="assets/images/instagram/5.jpg" alt="">
                            </a>
                            <a class="instagram__item" href="#" target="_blank">
                                <img src="assets/images/instagram/6.jpg" alt="">
                            </a>
                            <a class="instagram__item" href="#" target="_blank">
                                <img src="assets/images/instagram/7.jpg" alt="">
                            </a>
                            <a class="instagram__item" href="#" target="_blank">
                                <img src="assets/images/instagram/8.jpg" alt="">
                            </a>
                            <a class="instagram__item" href="#" target="_blank">
                                <img src="assets/images/instagram/9.jpg" alt="">
                            </a>
                        </div>
                    </div>

                </div><!-- /.footer__inner -->

                <div class="copyright">
                    © 2021 AutoGraff
                </div>

            </div><!-- /.container -->
        </footer>

    </div><!-- /.page -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>