<div class="featured-events">
	<div class="row">
	<?php 

	$categories = get_categories(
		array(
			'include'=> '28, 9'
		)
	);

	$do_not_duplicate = array();

	foreach ( $categories as $category ) {

	$ger_involve = array(
		'cat' => $category->term_id,
		'post_type' => 'post',
		'posts_per_page' => 1,
		'meta_query' => array( 'key' => '_thumbnail_id' )
	);

	$do_not_duplicate = array();

	$ft_pages = new WP_Query( $ger_involve );
			
			
			if( $ft_pages->have_posts( ) ){
			while( $ft_pages->have_posts( ) ){ 
			$ft_pages->the_post();

			$do_not_duplicate[] = $post->ID;

			$cat = get_the_category();
			
			$parentCatName = get_cat_name($cat[0]->parent);
			$cat_id = get_cat_ID($parentCatName);
			$category_link = get_category_link( $cat_id );
			//$parentLink = get_category_link($parentCatName->cat_ID);
			$feat_thumb   = get_post_thumbnail_id();

			$feat_img_url = wp_get_attachment_url( $feat_thumb,'full'); // Get img URL

			$feat_image   = aq_resize( $feat_img_url, 560, 313, true );  ?>  
			


		<div class="half">

		<?php if( has_post_thumbnail() ): ?>
			<img src="<?php echo esc_url( $feat_image ); ?>" alt="<?php the_title() ?>" />
		<?php endif; ?>

			<h2>
				<a href="<?php echo $category_link; ?>">
					<?php
						echo $parentCatName;
					?>
				</a>
			</h2>

		</div>
		<?php 
		}
		wp_reset_postdata();
	}

		
	} ?>
		
	</div>
</div>