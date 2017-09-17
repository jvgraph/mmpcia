<!-- 
<?php

// $do_not_duplicate = array();

// $categories = get_categories(
// 	array(
// 			'include'=> '5,6,7'
// 	)
// );
// $do_not_duplicate = array();

// foreach ( $categories as $category ) {
// 		$args = array(
// 				'cat' => $category->term_id,
// 				'orderby' =>'post_date',
// 				'order' => 'DESC',
// 				'post_type' => 'post',
// 				'posts_per_page' => '1',

// 		);
		
// 		$query = new WP_Query( $args );
?> -->
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