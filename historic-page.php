<?php
/**
 * Template Name: Historic District
 *
 */
    get_header();
?>
<div id="primary" class="board content-area">
    <!-- PAGES LOOP -->
    <?php


       $p_args = array(
           'post_type' => 'page',
           'post__in' => array(27, 2)
       );
        $pages_args = new WP_Query($p_args);
        while( $pages_args->have_posts() ):  $pages_args->the_post();
            $thumb   = get_post_thumbnail_id();
            $img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
            $image   = aq_resize( $img_url, 480, 270, true ); // Resize & crop img 
?>
    <?php if(is_page('about')){ ?>
    <div class="full-col">
    <?php }else{ ?>
    <div class="three-col">
    <?php } ?>
        <div class="post--item">
        <?php if(has_post_thumbnail()): ?>
            <img src="<?php echo esc_url( $image ); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
        <h2> 
            <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
            <?php the_title();?>
            </a>
        </h2>
        
        <?php the_excerpt(); ?>
        </div>
    </div>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>
<!-- CATEGORIES LOOP -->

    <?php
       $c_args = array(
           'category__in' => array(7, 5)
       );
        $cats_args = new WP_Query($c_args);
        while( $cats_args->have_posts() ):  $cats_args->the_post();
            $thumb   = get_post_thumbnail_id();
            $img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
            $image   = aq_resize( $img_url, 480, 270, true ); // Resize & crop img 
?>
    <div class="three-col">
        <div class="post--item">
        <img src="<?php echo esc_url( $image ); ?>" alt="<?php the_title(); ?>" />
        <h2> 
            <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
            <?php the_title();?>
            </a>
        </h2>
        <?php the_excerpt(); ?>
        </div>
    </div>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>
</div>
<?php
    get_sidebar();
    get_footer();
?>
