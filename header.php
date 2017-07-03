<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Bitter:700|Montserrat" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="header">
            <div class="container">
                <!--LOGO-->
                <div class="header__logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="mmpcia">
                </div>
                <!--NAV-->
                <!--<div class="header__nav">-->
                    <?php
                    include_once('includes/nav.php');
                        // wp_nav_menu( array(
                        //     'theme_location' => 'primary',
                        //     'menu_class'     => 'primary-menu',
                        //     ) 
                        // );
                    ?>
                <!--</div>-->
                <!--SOCIAL NAV-->
                <div class="header__social_nav">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'social',
                            'menu_class'     => 'social-links-menu',
                            'depth'          => 1,
                            'link_before'    => '<span class="screen-reader-text">',
                            'link_after'     => '</span>',
                        ) );
                    ?>
                </div>
            </div>
        </header>