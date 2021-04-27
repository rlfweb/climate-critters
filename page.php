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

		<!-- if it’s a video or audio component, show us them -->
		<?php elseif( get_row_layout() == 'video-audio' ): ?>
			<?php get_template_part( 'template-parts/content-video' ); ?>

			<!-- if it’s a donate component, show it -->
		<?php elseif( get_row_layout() == 'donate' ): ?>
			<?php get_template_part( 'template-parts/content-donate' ); ?>

			<!-- if it’s a caption component, show us them -->
			<?php elseif( get_row_layout() == 'caption' ): ?>
				<?php get_template_part( 'template-parts/content-caption' ); ?>

	<?php endif; 
endwhile; endif; ?>

<!-- ACF REPEATER FIELDS CONTENT -->

<?php if( have_rows('repeater_fields') ): ?>
<?php while ( have_rows('repeater_fields') ) : the_row(); ?>
<div id="section" class="content-area">
	<div class="holder">
		<div id="halfimg" class="half">
			<img src="<?php the_sub_field('repeater-image'); ?>">
		</div>
		<div id="halftext" class="half">
			<p class="critter-title db"><?php the_sub_field('repeater-title'); ?></p>
			<p class="db"><?php the_sub_field('repeater-text'); ?></p>
		</div>
	</div>
</div>
<?php endwhile; ?>        
<?php else : endif; ?>


	</div><!-- .entry-content -->

	</main><!-- #main -->

<?php

get_footer();
