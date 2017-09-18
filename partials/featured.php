<div class="featured-events">
	<div class="row">
		<?php 
				if( have_rows('contribute', 'option') ):     
				while( have_rows('contribute', 'option') ): the_row(); ?>
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