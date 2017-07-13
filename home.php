<?php
/**
 * Template Name: Home Page
 *
 */
    get_header();
?>
<div class="home_slider">
    <div class="container">
        <div class="row">
            <div class="main-slides">
                <div class="flexslider">
                    <?php 
                        $original_query = $wp_query;
                        $wp_query = null;
                        $args=array(
                            'posts_per_page'=>5, 
                            'tag' => 'feature'
                        );
                        $wp_query = new WP_Query( $args );
                    ?>
                    <ul class="slides">
                        <?php if ( have_posts() ) :
                                while (have_posts()): the_post(); 
                                $thumb   = get_post_thumbnail_id();
                                $img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
                                $image   = aq_resize( $img_url, 560, 310, true ); // Resize & crop img 
                        ?>
                        <li>
                            
                            <img src="<?php echo esc_url( $image ); ?>" alt="Your Image alt" />

                            <div class="flex-caption">
                                <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title()?>
                                </a>
                                </h2>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                        </li>
                        <?php 
                            endwhile;
                            endif;
                            $wp_query = null;
                            $wp_query = $original_query;
                            wp_reset_postdata(); 
                            ?>
                    </ul>
                </div>
            </div>
            <!--END OF SLIDER-->
            <div class="featured-events">
                <div class="row">
                    <?php 
                        if( have_rows( 'contribute', 'option' ) ):     
                            while( have_rows( 'contribute', 'option' ) ): the_row(); ?>
                    <div class="half">
                        <?php the_field('contribute_image'); ?>
                        <img src="<?php the_sub_field('contribute_image'); ?>" alt="">
                        <h2>
                            <a href="<?php the_sub_field('contribute_link'); ?>">
                                <?php the_sub_field('title'); ?>
                            </a>
                        </h2>
                    </div>
                    <?php 
                        endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MISSION-->
<div class="mission-statement">
    <div class="row">
        <h2>Mission Statement</h2>
        <?php 
            if( have_posts() ): 
                while( have_posts() ): the_post(); 
                    the_content();
                endwhile; 
            endif; 
            
            ?>
    </div>
</div>
<!--COMMUNITY-->
<div class="community">
    <div class="row">
 

    <?php
    $do_not_duplicate = array();

    $categories = get_categories(
        array(
            'include'=> '5,6,7'
        )
    );
    $do_not_duplicate = array();
    
    foreach ( $categories as $category ) {
        $args = array(
            'cat' => $category->term_id,
            'orderby' =>'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'posts_per_page' => '1',
    
        );
        
        $query = new WP_Query( $args );
    
        if ( $query->have_posts() ) {
            $posttype = get_post_type(get_the_ID());?>
    
                <?php while ( $query->have_posts() ) {
    
                    $query->the_post();
                    $do_not_duplicate[] = $post->ID;
                    ?>
                        <div class="community-item">
                            <?php if ( has_post_thumbnail() ) { 
                                    the_post_thumbnail( );
                            } ?>
                                <h2>
                                    <a href="<?php echo get_category_link($category->term_id); ?>">
                                        <?php echo $category->name; ?>
                                    </a>
                                </h2>
                        </div>
                                
            <?php } // end while ?>
        <?php } // end if
    
        // Use reset to restore original query.
        wp_reset_postdata();
    }

?>        
    </div>
</div>

<?php
get_footer();
?>