<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/assets/css/media.css?v=<?= time(); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="header__menu">
                    <?php wp_nav_menu(array(
                        'menu' => 'header_menu',
                        'container' => 'nav',
                        'container_class' => 'topmenu',
                    )); ?>
                    <div class="header__btn-close">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <?php if (get_field('knopka-ssylka_nazvanie_knopki', 44)) {  ?>
                    <div class="header__btn">
                        <a href="<?php the_field('knopka-ssylka_ssylka_knopki', 44) ?>">
                            <div class="btn btn_arrow-blue"><?php the_field('knopka-ssylka_nazvanie_knopki', 44) ?></div>
                        </a>
                    </div>
                <?php } ?>
                <div class="header__btn-nav">
                    <div class="burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
    </header>
    <main class="main">