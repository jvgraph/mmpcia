<?php 
    // $thumb = get_post_thumbnail_id(); 
    // $img_url = wp_get_attachment_url( $thumb,'full' ); 
    // $image = aq_resize( $img_url, 700, 400, true, true, true );
?>

<div class="home_slider">
    <div class="container">
        <div class="row">
            <div class="col_lg_8 col_md_8 col_sm_12">
                <h1>test</h1>
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
                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title()?>
                                </a>
                            </h2>
                            <img src="<?php echo $slide_img_src; ?>" class="max-image" width="" height="" alt="Slide 1">
                            <p class="flex-caption">Adventurer Cheesecake Brownie</p>
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
            <div class="col_lg_4 col_md_4 col_sm_12">
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