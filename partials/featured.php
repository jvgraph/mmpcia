<div class="featured-events">
	<div class="row">
	<?php 
	$original_query = $wp_query;
	$wp_query = null;
	$args = array(
		'posts_per_page'=>5, 
		'tag' => 'feature'
	);
	$wp_query = new WP_Query( $args );
	?>
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