<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Bitter:700|Montserrat" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="header">
            <div class="header__logo">
                <?php include_once('includes/logo.php');?>
            </div>
            <div class="header__nav">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu',
                        ) 
                    );
				?>
            </div>
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