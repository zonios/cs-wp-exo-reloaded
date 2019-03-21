<?php
  get_header();
?>
<div class="container single-post-container">
  <?php
  $test_query = new WP_Query(['post_type'=>'page']);

  while($test_query->have_posts()):
    $test_query->the_post();
  ?>
</div>

<?php
  endwhile;
  get_footer();
  
?>