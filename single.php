<?php
  get_header();
?>

<div class="container single-post-container">
  <?php while(have_posts()): the_post(); ?>
  <div class="post-thumbnail">
    <?php 
      the_post_thumbnail( [60] );
    ?>
  </div>
  <h2 class="text-center text-uppercase text-secondary mb-0"><?php the_title(); ?></h2>
  <?php 
    $terms = wp_get_post_terms($post-> ID,['category']);
    foreach ($terms as $term): 
  ?>
  <a class="badge badge-secondary" href="<?php echo get_term_link($term); ?>">
    <?php echo $term->name; ?>
  </a>
  <?php endforeach; ?>
  <div class="post-content">
    <?php
      the_content();
    ?>
  </div>
</div>

<?php
  endwhile;
  get_footer();
?>