<section class="sponsors">
<h2>proudly sponsored by</h2>
<?php 
		if( have_rows('sponsors', 'option') ): 
?>
<ul>
	<?php 
	while( have_rows('sponsors', 'option') ): the_row(); 
	?>
	<li>
	<?php  
		$image = get_sub_field('image'); 
	?>
		<h3>
			<a href="<?php   ?>">
				<img src="<?php echo $image['url']; ?>" alt="<?php  the_sub_field('name'); ?>">
			</a>
		</h3>
	</li>
<?php endwhile; ?>
</ul>
<?php endif; ?>
</section>