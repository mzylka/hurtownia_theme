<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Antic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet">

    <title>Hurtownia Antyków</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?> >

<header class="header">
    <div class="row">
        <div class="header__logo-box">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php bloginfo('template_directory');?>/images/hurtownia-logo.png" class="header__logo">
            </a>
        </div>
        <div class="header__navbar">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu'
                    )
                );
            ?>
        </div>
    </div>
</header>