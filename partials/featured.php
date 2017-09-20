<div class="featured-events">
	<div class="row">
	<?php 
	$feat_args = array(
		'post_type' => 'page', 
		'post__in' => array(5014, 5016)
	);
	$ft_pages = new WP_Query( $feat_args );
	?>
		<?php 
			if( $ft_pages->have_posts() ): 
			while( $ft_pages->have_posts( ) ): $ft_pages->the_post();
			$feat_thumb   = get_post_thumbnail_id();

			$feat_img_url = wp_get_attachment_url( $feat_thumb,'full'); // Get img URL

			$feat_image   = aq_resize( $feat_img_url, 560, 313, true );    

				; ?>
		<div class="half">
			<?php if( has_post_thumbnail() ): ?>
			<img src="<?php echo esc_url( $feat_image ); ?>" alt="<?php the_title() ?>" />
		<?php endif; ?>
			<h2>
				<a href="<?php the_permalink(); ?>">
					<?php the_title() ?>
				</a>
			</h2>
		</div>
		<?php 
		endwhile;
		wp_reset_postdata();
		endif; ?>
	</div>
</div>