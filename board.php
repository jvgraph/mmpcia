<?php
/**
* Template Name: Board Page
*
*/
get_header();
?>
<div id="primary" class="board content-area">
  <ul class="board--members">
    
    <?php if(have_posts()): while(have_posts()): the_post();
          
      the_title( '<h1 class="page-title">', '</h1>', true );
      if( have_rows('member') ):
      while( have_rows('member') ): the_row(); ?>

        <li class="board--member-single">
        <div class="clearfix">   
        <?php $member_image = get_sub_field('member_image');
        if( !empty($member_image) ): ?>
            <img src="<?php echo $member_image['url']; ?>" width="200" height="200" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
          <div>
              <h2>
              <?php  the_sub_field('member_name'); ?>
              </h2>
              <div>
                  <em>
                      <?php  the_sub_field('title'); ?>
                  </em>
              </div> 
          </div>
          <p>
          <?php
               the_sub_field('member_bio');
          ?>
          </p>
      </div>
  </li>
  <?php
  endwhile;
  endif;
  endwhile;
  endif;
  ?>
  </ul>
</div>

<?php
get_sidebar();
get_footer();
?>
