<?php 
  $page_args = array(
    'posts_per_page'=>6, 
    'category__in' => array(32, 31, 19, 13, 5)
  );
  $community = new WP_Query( $args );
?>

  <?php
  if( $community->have_posts() ) : ?>
    <?php the_title('<h1 class="page-title">', '</h1>', true); ?>
    <div class="community">
      <?php while ( $community->have_posts() ) : $community->the_post(); ?>
      <article>
        <?php if( has_post_thumbnail() ){ ?>
        <div class="post-image">
          <?php 
            the_post_thumbnail(); 
          ?>
        </div>
        <?php } ?>
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt() ?>
        <footer>
           Post in Category : <?php the_category( ' ' ); ?> | Posted on: <?php the_date(); ?>
        </footer>
      </article>
      <?php endwhile; ?>
    </div>
  <?php
endif;
  ?>