<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        <?php wp_head(); ?>
        <script src="<?=DIR?>/js/bootstrap.min.js"></script>
        <script src="<?=DIR?>/js/script.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <div class="container">
                <h1 class="item logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
                        <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                    </a>

                </h1>
                <div class="right menu-desktop">
                    <div>
                        <?php
                            $menu = wp_get_nav_menu_items(2);
                            foreach($menu as $m):
                        ?>
                        <a href="<?=$m->url?>" class="item"><?=$m->title?></a>
                        <?php
                            endforeach;
                        ?>
                    </div>
                </div>
                <div class="toggle-mobile">
                    <a href="#" class="toggle-mobile-icon">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
            <div class="menu-mobile">
                <?php
                    $menu = wp_get_nav_menu_items(2);
                    foreach($menu as $m):
                ?>
                    <a href="<?=$m->url?>" class="mobile-item"><?=$m->title?></a>
                <?php
                    endforeach;
                ?>
            </div>
        </header>
        <div class="banner">
            <!-- <video id="main-videos" src="<?=DIR?>/videos/Video-15.mp4" autoplay muted loop></video> -->
        </div>
        <div class="bg-banner"></div>
        <div class="bg-banner-close"></div>
        <?php
        // Debug
            // dd(wp_get_nav_menu_object(2));
            // dd(wp_get_nav_menu_name(2));
            // dd(wp_get_nav_menu_items(2));
            // dd(get_defined_functions());
        ?>