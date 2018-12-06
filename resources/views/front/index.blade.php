<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ProFix - Ремонт телефонов, компьютеров, планшетов</title>
    <link href={{asset('front/animate.css/animate.min.css')}} rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('adm/css/bootstrap.min.css') }}">
    <link href={{asset('front/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')}} rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,800,900" rel="stylesheet">
    <link href={{asset('front/chosen/chosen.min.css')}} rel="stylesheet" type="text/css">
    <link href={{asset('front/jquery-ui-custom/jquery-ui.min.css')}} rel="stylesheet" type="text/css">
    <link href={{asset('front/pentix/css/pentix.min.css')}} rel="stylesheet" type="text/css">
    <link href={{asset('front/css/pex-theme.min.css')}} rel="stylesheet" type="text/css">
    <link href={{asset('front/css/custom.css')}} rel="stylesheet" type="text/css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body class="body loader-loading">
	<!-- HEADER -->
    <header class="header header-over"><input id="header-default" type="radio" class="collapse" checked="checked" name="siteheader"> <input id="header-shown" type="radio" class="collapse" name="siteheader"> <input id="header-hidden" type="radio" class="collapse" name="siteheader">
        <div
            class="infobar transparent bottom-separator xs-hidden">
            <div class="container">
                <div class="cols-list pull-left cols-md">
                    <div class="list-item"><span class="info-icon"><i class="fas fa-home" aria-hidden="true"></i></span>Фатеж, Карла Маркса, 17</div>
                    <div class="list-item"><span class="info-icon"><i class="fas fa-phone"></i></span>Тел.: + 7 123 45 67</div>
                </div>
                <div class="cols-list pull-right cols-md socials">
                    <div class="list-item"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></div>
                    <div class="list-item"><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></div>
                </div>
            </div>
            </div>

            <!-- НАВИГАЦИЯ -->
            <nav class="stick-menu menu-wrap simple line transparent">
                <div class="menu-container menu-row">
                    <div class="logo"><a href="index.html"><img src={{asset('front/images/service/logo.png')}} alt="ProFix"></a></div>
                    <div class="header-toggler pull-right xs-shown"><label class="header-shown-sign" for="header-hidden"><i class="fas fa-times" aria-hidden="true"></i></label> <label class="header-hidden-sign" for="header-shown"><i class="fas fa-bars" aria-hidden="true"></i></label></div>
                    <div class="clearfix xs-shown"></div>
                    <div class="menu">
                        <ul class="menu-items">
                            <li><a href="index.html">Главная</a><span class="toggle-icon"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                            </li>
                            <li><span class="menu-item">Цены</span> <span class="toggle-icon"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                            </li>
                            <li><a href="shop-category.html">Услуги</a></li>
                            <li><a href="contact-us.html">Контакты</a><span class="toggle-icon"><i class="fas fa-chevron-down" aria-hidden="true"></i></span> </li>
                            <li>
                            	<a href="#" data-show-block="search">
                            		<i class="fas fa-search" aria-hidden="true"></i>
                            		<span class="toggle-icon"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                            		Узнать статус ремонта
                            	</a>
                        	</li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="line-right xs-hidden"></div>
                    </div>
                </div>
            </nav>
             <!-- /НАВИГАЦИЯ -->
    </header>
	<!-- HEADER -->

	<!-- БАНЕР -->
    <section>
        <div class="flexslider screen-height">
            <div class="slides">
                <div class="slide"><img src={{asset('front/images/service/motherboard-1.jpg')}} alt="" data-cover-image="true">
                    <div class="theme-back"></div>
                    <div class="pos-center text-center col-12 text-white">
                        <div class="banner-title res-text-xxl">Быстрое ремонт неисправностей</div>
                        <div class="banner-subtitle res-text-md">Просто принесите Ваш ноутбук, компьютер, телефон,<br>игровую приставку или Смартфон и мы отремонтируем его</div>
                    </div>
                </div>
                <div class="slide"><img src={{asset('front/images/service/motherboard-3.jpg')}} alt="" data-cover-image="true">
                    <div class="theme-back"></div>
                    <div class="pos-center text-center col-12 text-white">
                        <div class="banner-title res-text-xxl">Любые виды обновлений ваших устройств</div>
                    </div>
                </div>
                <div class="slide"><img src={{asset('front/images/service/data-recovery.jpg')}} alt="" data-cover-image="true">
                    <div class="theme-back"></div>
                    <div class="pos-center text-center col-12 text-white">
                        <div class="banner-title res-text-xxl">Восстановление данных</div>
                        <div class="banner-subtitle res-text-md">Вы потеряли - мы найдем</div>
                    </div>
                </div>
            </div>
            <div class="flex-custom-navigation"><a href="#" class="flex-prev"><i class="fas fa-angle-left" aria-hidden="true"></i> </a><a href="#" class="flex-next"><i class="fas fa-angle-right" aria-hidden="true"></i></a></div>
        </div>
    </section>
    <!-- /БАНЕР -->

    <!-- ЦЕННИКИ -->
    <div class="clearfix muted-bg">
        <section class="md-stuck-top content-section">
            <div class="container hyped-block">
                <div class="row cols-md rows-md">
                    <div class="md-col-6">
                        <div class="row cols-md rows-md">
                            <div class="sm-col-6">
                                <div class="price-block simple" data-inview-showup="showup-translate-up">
                                    <div class="price-back"></div>
                                    <div class="price-image"><img class="image" src={{asset('front/images/icons/notebook-dark.png')}} alt=""></div>
                                    <div class="price-title">Ремонт Ноутбуков</div>
                                    <div class="price-subtext">от...</div>
                                    <div class="price">	&#8381; 300</div><a class="btn-md btns-bordered btn text-upper" href="#">подробнее</a></div>
                            </div>
                            <div class="sm-col-6">
                                <div class="price-block simple" data-inview-showup="showup-translate-up">
                                    <div class="price-back"></div>
                                    <div class="price-image"><img class="image" src={{asset('front/images/icons/computer-dark.png')}} alt=""></div>
                                    <div class="price-title">Ремонт компьютеров</div>
                                    <div class="price-subtext">от...</div>
                                    <div class="price">&#8381; 300</div><a class="btn-md btns-bordered btn text-upper" href="#">подробнее</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="md-col-6">
                        <div class="row cols-md rows-md">
                            <div class="sm-col-6">
                                <div class="price-block simple" data-inview-showup="showup-translate-up">
                                    <div class="price-back"></div>
                                    <div class="price-image"><img class="image" src={{asset('front/images/icons/mobile-dark.png')}} alt=""></div>
                                    <div class="price-title">Ремонт планшетов</div>
                                    <div class="price-subtext">от...</div>
                                    <div class="price">&#8381; 300</div><a class="btn-md btns-bordered btn text-upper" href="#">подробнее</a></div>
                            </div>
                            <div class="sm-col-6">
                                <div class="price-block simple" data-inview-showup="showup-translate-up">
                                    <div class="price-back"></div>
                                    <div class="price-image"><img class="image" src={{asset('front/images/icons/mobile-dark.png')}} alt=""></div>
                                    <div class="price-title">Ремонт смартфонов</div>
                                    <div class="price-subtext">от...</div>
                                    <div class="price">&#8381; 300</div><a class="btn-md btns-bordered btn text-upper" href="#">подробнее</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-section">
            <div class="container">
                <div class="section-head text-center container-md">
                    <h2 class="section-title text-upper" data-inview-showup="showup-translate-right">Почему выбирают нас</h2>
                    <p data-inview-showup="showup-translate-left">наши приимущества</p>
                </div>
                <div class="row cols-md rows-lg text-center">
                    <div class="md-col-6">
                        <div class="row cols-md rows-lg">
                            <div class="sm-col-6">
                                <div class="feature feature-side text-left" data-inview-showup="showup-translate-up">
                                    <div class="feature-icon"><i class="fas fa-rocket" aria-hidden="true"></i></div>
                                    <div class="feature-title text-upper">МЫ БЫСТРЫЕ</div>
                                    <div class="feature-text">Qualified Workers Lorem Ipsum is simply dummy text of the printing</div>
                                </div>
                            </div>
                            <div class="sm-col-6">
                                <div class="feature feature-side text-left" data-inview-showup="showup-translate-up">
                                    <div class="feature-icon"><i class="fas fa-dollar-sign" aria-hidden="true"></i></div>
                                    <div class="feature-title text-upper">Бесплатная диагностика</div>
                                    <div class="feature-text">Repair on Demand Lorem Ipsum is simply dummy text of the printing</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md-col-6">
                        <div class="row cols-md rows-lg">
                            <div class="sm-col-6">
                                <div class="feature feature-side text-left" data-inview-showup="showup-translate-up">
                                    <div class="feature-icon"><i class="far fa-calendar-check" aria-hidden="true"></i></div>
                                    <div class="feature-title text-upper">ГАРАНТИЯ 30 ДНЕЙ</div>
                                    <div class="feature-text">Guaranteed Service Lorem Ipsum is simply dummy text of the printing</div>
                                </div>
                            </div>
                            <div class="sm-col-6">
                                <div class="feature feature-side text-left" data-inview-showup="showup-translate-up">
                                    <div class="feature-icon"><i class="fas fa-users" aria-hidden="true"></i></div>
                                    <div class="feature-title text-upper">Большой Опыт работы</div>
                                    <div class="feature-text">Available Anytime Lorem Ipsum is simply dummy text of the printing</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
     <!-- /ЦЕННИКИ -->

    <section class="with-bg solid-section">
        <div class="fix-image-wrap" data-image-src={{asset('front/images/service/motherboard-2.jpg')}} data-parallax="scroll"></div>
        <div class="theme-back inner-shadow"></div>
        <div class="container text-center">
            <div class="section-head text-center container-md">
                <h2 class="section-title text-upper" data-inview-showup="showup-translate-right">ПРОЦЕСС ОБСЛУЖИВАНИЯ</h2>
                <p data-inview-showup="showup-translate-left">простой и эффективный способ восстановления вашего устройства</p>
            </div>
            <div class="service-steps text-upper" data-inview-showup="showup-scale">
                <div class="step"><span class="step-number">1</span>приносите нам</div>
                <div class="step"><span class="step-number">2</span>мы быстро чиним</div>
                <div class="step"><span class="step-number active">3</span>вы быстро поулчаете назад</div>
            </div>
        </div>
    </section>

    <!-- УСЛУГИ -->
    <section class="muted-bg solid-section">
        <div class="container">
            <div class="section-head text-center container-md">
                <h2 class="section-title text-upper" data-inview-showup="showup-translate-right">Услуги</h2>
                <p data-inview-showup="showup-translate-left">Мы предлагаем полный спектр ремонтных услуг</p>
            </div>
            <div class="row cols-md rows-md">
                <div class="md-col-4 sm-col-6">
                    <div class="item" data-inview-showup="showup-translate-up"><a href="service.html" class="block-link text-center"><span class="image-wrap"><img class="image" src={{asset('front/images/service/item-1.jpg')}} alt=""></span><span class="hover"><span class="hover-show"><span class="back"></span> <span class="content"><i class="fas fa-search" aria-hidden="true"></i></span></span></span></a>
                        <div
                            class="item-content">
                            <div class="item-title text-upper"><a href="service.html">ВОССТАНОВЛЕНИЕ ДАННЫХ</a></div>
                            <div class="item-text">Наш сервисный центр оказывает услуги по восстановлению данных с жестких дисков, flash носителей различных типов.</div><a href="service.html" class="btn btn-md btns-bordered pull-right text-upper">подробнее</a></div>
                </div>
            </div>
            <div class="md-col-4 sm-col-6">
                <div class="item" data-inview-showup="showup-translate-up"><a href="service.html" class="block-link text-center"><span class="image-wrap"><img class="image" src={{asset('front/images/service/item-2.jpg')}} alt=""></span><span class="hover"><span class="hover-show"><span class="back"></span> <span class="content"><i class="fas fa-search" aria-hidden="true"></i></span></span></span></a>
                    <div
                        class="item-content">
                        <div class="item-title text-upper"><a href="service.html">МОДЕРНИЗАЦИЯ КОМПЬЮТЕРОВ</a></div>
                        <div class="item-text">Подборка оптимальной конфигурации и всех комплектующих либо апгрейд вашего старого компьютера.</div><a href="service.html" class="btn btn-md btns-bordered pull-right text-upper">подробнее</a></div>
            </div>
        </div>
        <div class="md-col-4 sm-col-6">
            <div class="item" data-inview-showup="showup-translate-up"><a href="service.html" class="block-link text-center"><span class="image-wrap"><img class="image" src={{asset('front/images/service/item-3.jpg')}} alt=""></span><span class="hover"><span class="hover-show"><span class="back"></span> <span class="content"><i class="fas fa-search" aria-hidden="true"></i></span></span></span></a>
                <div
                    class="item-content">
                    <div class="item-title text-upper"><a href="service.html">Ремонт Смартфонаов</a></div>
                    <div class="item-text">Производим срочный ремонт мобильных телефонов любой сложности. Возможен срочный ремонт в присутствии заказчика. </div><a href="service.html" class="btn btn-md btns-bordered pull-right text-upper">подробнее</a></div>
        </div>
        </div>
        <div class="md-col-4 sm-col-6">
            <div class="item" data-inview-showup="showup-translate-up"><a href="service.html" class="block-link text-center"><span class="image-wrap"><img class="image" src={{asset('front/images/service/item-4.jpg')}} alt=""></span><span class="hover"><span class="hover-show"><span class="back"></span> <span class="content"><i class="fas fa-search" aria-hidden="true"></i></span></span></span></a>
                <div
                    class="item-content">
                    <div class="item-title text-upper"><a href="service.html">Ремонт Планшетов</a></div>
                    <div class="item-text">Производим срочный ремонт планшетов любой сложности. Возможен срочный ремонт в присутствии заказчика.</div><a href="service.html" class="btn btn-md btns-bordered pull-right text-upper">подробнее</a></div>
        </div>
        </div>
        <div class="md-col-4 sm-col-6">
            <div class="item" data-inview-showup="showup-translate-up"><a href="service.html" class="block-link text-center"><span class="image-wrap"><img class="image" src={{asset('front/images/service/item-5.jpg')}} alt=""></span><span class="hover"><span class="hover-show"><span class="back"></span> <span class="content"><i class="fas fa-search" aria-hidden="true"></i></span></span></span></a>
                <div
                    class="item-content">
                    <div class="item-title text-upper"><a href="service.html">Ремонт ПК и ноутбуков</a></div>
                    <div class="item-text">Выполняем все виды работ по ремонту ПК и ноутбуков. От чистки до замены комплектующих.</div><a href="service.html" class="btn btn-md btns-bordered pull-right text-upper">подробнее</a></div>
        </div>
        </div>
        <div class="md-col-4 sm-col-6">
            <div class="item" data-inview-showup="showup-translate-up"><a href="service.html" class="block-link text-center"><span class="image-wrap"><img class="image" src={{asset('front/images/service/item-6.jpg')}} alt=""></span><span class="hover"><span class="hover-show"><span class="back"></span> <span class="content"><i class="fas fa-search" aria-hidden="true"></i></span></span></span></a>
                <div
                    class="item-content">
                    <div class="item-title text-upper"><a href="service.html">Настройка сетевого оборудования</a></div>
                    <div class="item-text">Производим настройку и установку ADSL, WI-FI-роутеров и др. Возможен выезд к клиенту на дом.</div><a href="service.html" class="btn btn-md btns-bordered pull-right text-upper">подробнее</a></div>
        </div>
        </div>
        </div>
        <div class="text-center shift-xl"><a class="btn text-upper" href="services.html" data-inview-showup="showup-translate-up"><i class="fas fa-th-large" aria-hidden="true"></i>&nbsp;&nbsp;Просмотерть все услуги</a></div>
        </div>
    </section>
    <!-- /УСЛУГИ -->

    <!-- Счетчики -->
    <section class="main-bg decorated-bg text-center tight solid-section">
        <div class="container">
            <div class="row cols-md rows-xl" data-inview-showup="showup-translate-up">
                <div class="sm-col-3">
                    <div class="counter">
                        <div class="counter-title text-upper">Счастливых клиентов</div>
                        <div class="counter-value" data-waypoint-counter="3720">3720</div>
                    </div>
                </div>
                <div class="sm-col-3">
                    <div class="counter">
                        <div class="counter-title text-upper">Выполненых работ</div>
                        <div class="counter-value" data-waypoint-counter="4170">4170</div>
                    </div>
                </div>
                <div class="sm-col-3">
                    <div class="counter">
                        <div class="counter-title text-upper">Комрьютеров в ремонте</div>
                        <div class="counter-value" data-waypoint-counter="2730">2730</div>
                    </div>
                </div>
                <div class="sm-col-3">
                    <div class="counter">
                        <div class="counter-title text-upper">Смартфонов в ремонте</div>
                        <div class="counter-value" data-waypoint-counter="1510">1510</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- /Счетчики -->


	<!-- ОТЗЫВЫ -->
    <section class="content-section">
        <div class="container">
            <div class="section-head text-center container-md">
                <h2 class="section-title text-upper" data-inview-showup="showup-translate-right">Отзывы клиентов о нас</h2>
                <p data-inview-showup="showup-translate-left">Отзывы реальных клиентов</p>
            </div>
            <div class="owl-carousel" data-inview-showup="showup-translate-up" data-owl-dots="true">
                <div class="item">
                    <div class="simple-testimonial text-center">
                        <div class="tt-title">Great customer support</div>
                        <div class="tt-rating"><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star"
                                aria-hidden="true"></i></div>
                        <div class="tt-content">
                            <div class="tt-quote">&#8220;</div>Равным образом укрепление и развитие структуры требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям. Равным образом реализация намеченных плановых заданий способствует подготовки и реализации дальнейших направлений развития. Таким образом реализация намеченных плановых заданий требуют от нас анализа модели развития. Товарищи!</div>
                        <div class="tt-icon"><img src={{asset('front/images/icons/notebook-sm.png')}} alt=""></div>
                        <div class="pexx-tt-user-title">Сидор Сидоров</div>
                        <div class="pexx-tt-user-subtitle">+7 *** *** ** 01</div>
                    </div>
                </div>
                <div class="item">
                    <div class="simple-testimonial text-center">
                        <div class="tt-title">Flexible services</div>
                        <div class="tt-rating"><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star"
                                aria-hidden="true"></i></div>
                        <div class="tt-content">
                            <div class="tt-quote">&#8220;</div>Равным образом укрепление и развитие структуры требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям. Равным образом реализация намеченных плановых заданий способствует подготовки и реализации дальнейших направлений развития. Таким образом реализация намеченных плановых заданий требуют от нас анализа модели развития. Товарищи!</div>
                        <div class="tt-icon"><img src={{asset('front/images/icons/computer-sm.png')}} alt=""></div>
                        <div class="pexx-tt-user-title">Василий Васильев</div>
                        <div class="pexx-tt-user-subtitle">+7 *** *** ** 02</div>
                    </div>
                </div>
                <div class="item">
                    <div class="simple-testimonial text-center">
                        <div class="tt-title">Excellent team</div>
                        <div class="tt-rating"><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star"
                                aria-hidden="true"></i></div>
                        <div class="tt-content">
                            <div class="tt-quote">&#8220;</div>Равным образом укрепление и развитие структуры требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям. Равным образом реализация намеченных плановых заданий способствует подготовки и реализации дальнейших направлений развития. Таким образом реализация намеченных плановых заданий требуют от нас анализа модели развития. Товарищи!</div>
                        <div class="tt-icon"><img src={{asset('front/images/icons/printer-sm.png')}} alt=""></div>
                        <div class="pexx-tt-user-title">Петр Петров</div>
                        <div class="pexx-tt-user-subtitle">+7 *** *** ** 03</div>
                    </div>
                </div>
                <div class="item">
                    <div class="simple-testimonial text-center">
                        <div class="tt-title">Flexible services</div>
                        <div class="tt-rating"><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star"
                                aria-hidden="true"></i></div>
                        <div class="tt-content">
                            <div class="tt-quote">&#8220;</div>Profix did great job with fixing my laptop for a good price. I recommend any body with laptop problems, they will give you excellent service to all his customers.</div>
                        <div class="tt-icon"><img src={{asset('front/images/icons/mobile-sm.png')}} alt=""></div>
                        <div class="pexx-tt-user-title">Семен Семеныч</div>
                        <div class="pexx-tt-user-subtitle">+7 *** *** ** 04</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- /ОТЗЫВЫ -->

	<!-- Карта -->
    <section class="map-section" data-inview-showup="showup-translate-right">
        <div class="gmap" data-lat="52.086834" data-lng="35.860964"></div>
        <div class="info-wrap">
            <div class="info-container">
                <div class="our-info side main-bg">
                    <div class="info-block">
                        <div class="info-title text-upper">Контакты</div>
                        <div class="info-line"><span class="info-icon"><i class="fas fa-map-marker-alt fa-fw" aria-hidden="true"></i></span>г. Фатеж, ул. К. Маркса, 19</div>
                        <div class="info-line"><span class="info-icon"><i class="fas fa-phone fa-fw" aria-hidden="true"></i></span>(555) 555-0312</div>
                        <div class="info-line"><span class="info-icon"><i class="far fa-envelope fa-fw" aria-hidden="true"></i></span>tets@test.com</div>
                    </div>
                    <div class="info-block">
                        <div class="info-title text-upper">График работы</div>
                        <div class="info-line">Понедельник-Пятница<span class="pull-right">10:00 - 18:00</span></div>
                        <div class="info-line">Суббота<span class="pull-right">10:00 - 15:00</span></div>
                        <div class="info-line">Воскресенье<span class="pull-right">Выходной</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- /Карта -->



    <a href="#" class="scroll-top disabled"><i class="fas fa-angle-up" aria-hidden="true"></i></a>


    <!-- Проверка статуса -->
    @include('front.parts.checStatus')
     <!-- /Проверка статуса -->

	<!--
    <div class="loader-block">
        <div class="loader-back alt-bg"></div>
        <div class="loader-image"><img class="image" src={{asset('front/images/parts/loader.gif')}} alt=""></div>
    </div>
-->

	<!-- FOOTER -->
    @include('front.parts.footer')
    <!-- FOOTER -->

    @include('front.parts.scripts')

    <script>
        $(document).ready(function(){
            $('#Check').click(function(e){
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'get',
                    url: "/checkStatus/" + ($('#phone').val()) + "/show",
                    dataType: 'json',
                    success: function(result){
                        $('#checkResult').show();
                        $('#device_name').html(result.success.device_name);
                        $('#device_id').html(result.success.device_id);
                        $('#date').html(result.success.created_at);
                        $('#status').html(result.success.name);
                        console.log(result.success);
                    }});
            });
        });
    </script>


</body>

</html>
