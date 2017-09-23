<?php
  /*
  Template Name: Featured Area
  */
  get_header();
?>
<div id="primary" class="content-area community-page">
<?php 
 if(is_page(5012)){
  
  include 'partials/get-involve.php';
  
}else if(is_page(5014)){
  include 'partials/community.php';
}

?>
</div>

<?php 
get_sidebar(); 
get_footer() ?>