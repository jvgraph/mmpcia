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
                        ?>
                        <li>
                            
                            <?php
                                echo the_post_thumbnail('full');
                            ?>
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
            <div class="events">
                <div class="row">
                    <div class="col_md_12 col_sm_6">

                    </div>
                    <div class="col_md_12 col_sm_6">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>