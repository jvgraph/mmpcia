<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Bitter:700|Montserrat" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <div class="header__logo">
                <?php include_once('includes/logo.php');?>
            </div>
            <div class="header__nav">
            </div>
        </div>
            <?php
                if(have_posts()): while(have_posts()): the_post();
                    the_title();
                endwhile;
                endif;
            ?>
        <div class="content">
        </div>
        <footer class="footer">
            
        </footer>
    </body>
</html>