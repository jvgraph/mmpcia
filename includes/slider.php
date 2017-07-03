<?php 
    $thumb = get_post_thumbnail_id(); 
    $img_url = wp_get_attachment_url( $thumb,'full' ); 
    $image = aq_resize( $img_url, 700, 400, true, true, true ); 
?>


<div class="home_slider">
    <div class="container">
        <div class="row">
            <div class="col_lg_8 col_md_8 col_sm_12">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                        <img src="slide1.jpg" />
                        <p class="flex-caption">Adventurer Cheesecake Brownie</p>
                        </li>
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