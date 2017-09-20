<!--COMMUNITY-->
<div class="community">
	<div class="row">
	<?php
	$cat_name = array('education','real-state','recreation');
	$do_not_duplicate = array();
	$categories = get_categories(
		array(
			'include'=> '24, 27, 28'
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
							<?php 
							if(has_post_thumbnail()) { 
								the_post_thumbnail();
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