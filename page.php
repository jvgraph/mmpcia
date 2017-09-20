<?php
get_header();
?>
<div id="primary" class="board content-area">
  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post() ?>
  <article>
    <h1 class="page-title"><?php the_title(); ?></h1>
    <?php
      if( has_post_thumbnail() ):
    ?>
    <div class="featured-image">
      <?php the_post_thumbnail() ?>
    </div>
  <?php endif; ?>
    <?php the_content() ?>
  </article>
  <?php endwhile; ?>
  <?php endif; ?>

</div>
<?php
get_sidebar();
get_footer();