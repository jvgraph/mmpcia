<?php $thumb = get_post_thumbnail_id(); 
   $img_url = wp_get_attachment_url( $thumb,'full' ); 
   $image = aq_resize( $img_url, 150, 200, true, true, true ); 
?>
<img src="<?php if($image) { echo esc_url($image);
} else {
echo catch_that_image();} ?>" width="150" height="200" alt="<?php  echo get_bloginfo('name'); ?>"/>