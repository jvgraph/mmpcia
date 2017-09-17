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
				<?php
					include 'partials/slider.php';
					include 'partials/featured.php';
				?>
		</div>
	</div>
</div>

<?php include 'partials/home-cat.php' ?>

<!--MISSION-->
<div class="mission-statement">
	<div class="row">
		<h2>Mission Statement</h2>
	<?php 
		if( have_posts() ): 
		while( have_posts() ): 
		the_post(); 
			the_content();
		endwhile; 
		endif; 				
	?>
	</div>
</div>
<?php
	include 'partials/join-us.php';
	get_footer();
?>