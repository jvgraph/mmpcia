<?php get_header(); ?>

        <div class="content">
            <?php
                if(have_posts()): while(have_posts()): the_post();
                    the_title();
                endwhile;
                endif;
            ?>
        </div>
<?php get_footer(); ?>