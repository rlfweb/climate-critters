<?php 
$args = array (
  'posts_per_page' => 1,
  'post_type' => 'subheading',
  'category_name' => 'updates',
  )
?>

<?php $query = new WP_Query( $args ); ?>
 
<!-- The Loop -->
<?php
if ( $query->have_posts() ): 
    while ( $query->have_posts() ):
        $query->the_post(); ?>
       <h2><?php the_content();?></h2>
<?php endwhile; endif; ?>

<!-- Restore original Post Data -->
<?php wp_reset_postdata(); ?>