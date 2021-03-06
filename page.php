<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Climate_Critters
 */

get_header();
?>

	<main id="primary" class="site-main container">

	<!-- THE CONTENT -->
	<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		endwhile; // End of the loop.
	?>
	
	<!-- CUSTOM FIELDS CONTENT -->

	<div class="entry-content">

<!-- if we have some flexible content, let’s loop through it -->
<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); 

if( get_row_layout() == 'text' ): ?>
 <?php get_template_part( 'template-parts/content-text' ); ?>
	 
<!-- if there's a gallery component, get it -->
<?php elseif (get_row_layout() == 'gallery' ): ?>
	<?php get_template_part( 'template-parts/content-gallery' ); ?>

		<!-- if it’s a video component, show us them -->
		<?php elseif( get_row_layout() == 'video' ): ?>
			<?php get_template_part( 'template-parts/content-video' ); ?>

		<!-- if it’s an audio component, show us them -->
		<?php elseif( get_row_layout() == 'audio' ): ?>
			<?php get_template_part( 'template-parts/content-audio' ); ?>

			<!-- if it’s a donate component, show it -->
		<?php elseif( get_row_layout() == 'donate' ): ?>
			<?php get_template_part( 'template-parts/content-donate' ); ?>

			<!-- if it’s a caption component, show us them -->
			<?php elseif( get_row_layout() == 'caption' ): ?>
				<?php get_template_part( 'template-parts/content-caption' ); ?>

	<?php endif; 
endwhile; endif; ?>

<!-- ACF REPEATER FIELDS CONTENT -->
<!-- if we have repeater fields, loop through them -->
<?php if( have_rows('repeater_fields') ): while ( have_rows('repeater_fields') ) : the_row(); ?>
<?php get_template_part( 'template-parts/content-repeater' ); ?>
<?php endwhile; ?>        
<?php else : endif; ?>


	</div><!-- .entry-content -->

	</main><!-- #main -->

<?php

get_footer();
