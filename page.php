<?php
// add_action('wp_head', function() {
//   echo '
//   <style> 
//     .test {
//       color:' . get_theme_mod('color-h1','#aa0000') . ';
//     } 
//   </style>';
// });

get_header();
?>

<?php while (have_posts()) : the_post(); ?>
<div class="page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <h1><?php the_title(); ?></h1>
  
</div>
<div class="container single-post-container">
  <p id="test">test</p>
  <div class="post-content">
    <?php the_content(); ?>
  </div>
  <?php endwhile; ?>
</div>
<p id="test">jfjfjfjfjfjfj</p>
<?php
get_footer();
?>