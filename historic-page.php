<?php
/**
 * Template Name: Historic District
 *
 */
    get_header();
?>
<div id="primary" class="board content-area">
    <?php
        if( have_posts() ): while( have_posts() ): the_post();
        endwhile;
        endif;
    ?>
</div>
<?php
    get_sidebar();
    get_footer();
?>
