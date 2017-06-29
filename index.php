<?php get_header(); ?>
        <div class="article">
            <?php
                if(have_posts()): while(have_posts()): the_post();
            ?>
            <div class="article__post">
            <h1 class="article__title">
                <?php the_title(); ?>
            </h1>
            <div class="article__content">
                <?php the_content(); ?>
            </div>
            </div>
            <?php      
                endwhile;
                endif;
            ?>
        </div>
<?php get_footer(); ?>