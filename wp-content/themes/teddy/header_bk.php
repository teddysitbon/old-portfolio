<!doctype html>
<html class="no-js full_content" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Teddy SITBON - Portfolio <?php wp_title(''); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,300italic,400italic,600italic,700,700italic' rel='stylesheet' type='text/css'>
        <script src="<?php bloginfo('template_url'); ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class("full_content"); ?>  >
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <a href="#nav" class="nav_trigger" id="menu_logo">
            Menu
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </a>
        <nav class="nav_container" id="nav">       
            <ul class="nav">
                    <?php
                    $defaults = array(
                        'theme_location'  => 'primary-menu',
                        'menu'            => 'menu_header',
                        'container'       => '',
                        'container_class' => 'menu_items',
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '%3$s',
                        'depth'           => 0
                    );
                    wp_nav_menu( $defaults );
                    ?>
                </ul>
        </nav>