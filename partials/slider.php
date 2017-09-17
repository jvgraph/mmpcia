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
		<?php 
			if ( have_posts() ) :
			while (have_posts()): the_post(); 
			$thumb   = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
			$image   = aq_resize( $img_url, 560, 310, true ); // Resize & crop img 
		?>
		<li>			
			<img src="<?php echo esc_url( $image ); ?>" alt="<?php?>" />
					<div class="flex-caption">
							<h2>
								<a href="<?php the_permalink(); ?>">
												<?php the_title()?>
								</a>
							</h2>
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