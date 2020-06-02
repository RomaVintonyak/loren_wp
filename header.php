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
    <title><?php the_title(); ?></title>
    <!--fav icon-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory(); ?>/assets/img/fav_icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory(); ?>/assets/img/fav_icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory(); ?>/assets/img/fav_icon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory(); ?>/assets/img/fav_icon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory(); ?>/assets/img/fav_icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--NAV MENU-->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container-fluid">
            <a href="<?php get_home_url(); ?>" class="navbar-brand font-weight-bold"><?php bloginfo('name'); ?></a>
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
            ));  
            wp_nav_menu(array(
                'theme_location'  => 'NavSocial',
                'container'       => 'div', 
                'container_class' => 'collapse navbar-collapse', 
                'container_id'    => 'navMenu',
                'menu_class'      => 'navbar-nav nav-flex-icons social__position', 
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                'depth'           => 0,
            ));  
            ?>
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