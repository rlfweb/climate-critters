<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Climate_Critters
 */

get_header();
?>

	<main id="primary" class="site-main container">

	<header>
	<?php
	the_archive_title( '<h1 class="page-title">', '</h1>' );
	?>
</header><!-- .page-header -->


<?php	get_template_part( 'template-parts/content-subhead' ) ?>
	
<?php if ( have_posts() ) : ?>

<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();

	/*
	 * Include the Post-Type-specific template for the content.
	 * If you want to override this in a child theme, then include a file
	 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
	 */
	?>

<!-- grid layout for news archive page -->
<div class="archive-grid">

<!-- image on the left -->
	<div class="archive-thumbnail mb4 ph3">
		<?php if ( has_post_thumbnail()) : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>
	</div><!-- #archive-thumbnail -->

<!-- title and posted date on the right -->
	<div class="archive-content ph3">
			<h3 class="post-title tl mb0"> <?php the_title(); ?> </h3>
			<p class="post-date tl f6"> Posted on <?php the_date( ); ?> </p>
			<p class="post-content tl f6"> <?php the_content(); ?> </p>
	</div><!-- #archive-content -->

</div><!-- #archive-grid -->


	<?php 
endwhile;
endif;
?>





	</main><!-- #main -->

<?php

get_footer();
