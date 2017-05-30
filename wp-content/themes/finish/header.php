<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name') ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Open+Sans:300,300i,400,400i,600,600i,700,700i"
          rel="stylesheet">
    <!--    <link type="text/css" rel="stylesheet"-->
    <!--          href="--><?php //bloginfo('template_directory') ?><!--/owl-carousel/owl.carousel.css">-->
    <!--    <link type="text/css" rel="stylesheet" href="-->
    <?php //bloginfo('template_directory') ?><!--/owl-carousel/owl.theme.css">-->
    <!--    <link type="text/css" rel="stylesheet" href="-->
    <?php //echo get_template_directory_uri(); ?><!--/css/style.css">-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <!--link(href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet")-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <header>
        <div class="topMenu width1170"><a href="<?php echo home_url() ?>" class="logo">
                <img src="<?php echo get_header_image() ?>"></a>
            <ul class="test clearfix">
                <li><a href="<?php echo get_theme_mod('true_footer_copyright_fb'); ?>" class="facebook"><i
                                aria-hidden="true" class="fa fa-facebook"></i></a></li>
                <li><a class="searchOn"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/search-magnifier-interface-symbol.svg">
                        <!--i.fa.fa-search(aria-hidden="true")--></a></li>
                <li><a href="#" class="contact"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg">
                        <!--i.fa.fa-envelope-o(aria-hidden="true")-->
                    </a></li>
            </ul>

            <?php
            wp_nav_menu(array('theam_location' => 'menu',
                'menu_class' => 'mainMenu clearfix',
                'container' => 'false'))
            ?>

            <!--            <ul class="mainMenu clearfix">-->
            <!--                <li><a href="#">МЕБЕЛЬ ДЛЯ САДА</a></li>-->
            <!--                <li><a href="#">СВЕТ</a></li>-->
            <!--                <li><a href="#">АКСЕССУАРЫ</a></li>-->
            <!--                <li><a href="#">О НАС</a></li>-->
            <!--                <li><a href="#">ДИЗАЙНЕРАМ</a></li>-->
            <!--                <li><a href="#">ТРЕНДЫ И ИДЕИ</a></li>-->
            <!--            </ul>-->
        </div>
    </header>