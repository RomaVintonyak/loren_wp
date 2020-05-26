<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords"
          content="Loren - студія весільного декору та флористики"/>
    <meta name="description"
          content="Івано - Франківськ. Оформлення банкетних залів, весільна флористика, поліграфія, зона молодих,
          арка для дарування, фотозона, букет нареченої, квіти на столи гостей."/>
    <meta http-equiv="content-language" content="ru">
    <title>Loren - студія весільного декору та флористики</title>
    <!--fav icon-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav_icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav_icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav_icon/favicon-16x16.png">
    <link rel="manifest" href="img/fav_icon/site.webmanifest">
    <link rel="mask-icon" href="img/fav_icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<?php wp_head(); ?>
</head>
<body>
<!--NAV MENU-->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand font-weight-bold">L<i class="far fa-dot-circle fa-1x"></i>Ren</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu"
                    aria-controls="navMenu"
                    aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php wp_nav_menu(array(
                'theme_location'  => 'NavMenu',
                'container'       => 'div', 
                'container_class' => 'collapse navbar-collapse', 
                'container_id'    => 'navMenu',
                'menu_class'      => 'navbar-nav mr-auto scrolling-navbar', 
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                'depth'           => 0,
            )); ?>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav mr-auto scrolling-navbar">
                    <li class="nav-link active"><a href="index.html"
                                                   class="nav-link waves-effect waves-light">Головна</a></li>
                    <li class="nav-link"><a href="src/adout-us.html" class="nav-link waves-effect waves-light">Про
                        нас</a></li>
                    <li class="nav-link"><a href="src/our-services.html" class="nav-link waves-effect waves-light">Наші
                        послуги</a></li>
                    <li class="nav-link"><a href="src/galery.html" class="nav-link waves-effect waves-light">Галерея</a>
                    </li>
                    <li class="nav-link"><a href="src/contact.html"
                                            class="nav-link waves-effect waves-light">Контакти</a></li>
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item"><a href="mailto:loren.decor@ukr.net" class="nav-link waves-effect waves-light"><i
                            class="fas fa-envelope"></i></a>
                    </li>
                    <li class="nav-item"><a href="https://www.facebook.com/oksanavolodynyrivna?ref=bookmarks"
                                            target="_blank" class="nav-link waves-effect waves-light"><i
                            class="fab fa-facebook"></i></a>
                    </li>
                    <li class="nav-item"><a href="https://www.instagram.com/wedding_decor_loren/?hl=ru" target="_blank"
                                            class="nav-link waves-effect waves-light"><i
                            class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-10">
                        <h2 class="display-4  white-text pt-2 mb-1 unic-font">
                            Wedding Decor Loren
                        </h2>
                        <hr class="hr-light">
                        <h4 class="white-text my-4">Студія весільного декору та флористики</h4>
                        <a href="src/adout-us.html" class="btn btn-outline-white waves-effect waves-light">Про нас<i
                                class="fas fa-book pl-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>