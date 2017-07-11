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
                                while (have_posts()) : the_post(); 
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
                    <div class="half">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/images/historic.jpg" alt="">
                        <h2><a href="#">Education</a></h2>
                    </div>
                    <div class="half">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/images/historic.jpg" alt="">
                        <h2><a href="#">Education</a></h2>                    
                    </div>
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
            endif; ?>
    </div>
</div>
<!--COMMUNITY-->
<div class="community">
    <div class="row">
        <div class="community-item">
            <img src="<?php echo get_stylesheet_directory_uri()?>/images/education.jpg" alt="">
            <h2><a href="#">Education</a></h2>
        </div>
        <div class="community-item">
            <img src="<?php echo get_stylesheet_directory_uri()?>/images/recreation.jpg" alt="">
            <h2><a href="#">Recreation</a></h2>
        </div>
        <div class="community-item">
            <img src="<?php echo get_stylesheet_directory_uri()?>/images/community.jpg" alt="">
            <h2><a href="#">Real State</a></h2>
        </div>
    </div>
</div>

<?php
get_footer();
?>