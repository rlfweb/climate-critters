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

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>

			<!-- UPDATES-SUBHEAD TEXT -->
	<!-- Query for page-updates custom post type and get the correct post by category -->
	<?php query_posts(
			'posts_per_page=1
			&post_type=updates-subhead'
		); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!-- Updates Subhead -->
		<div class="updates-subhead" id="statement">	
				<div class="updates-subhead">
					<?php the_content(); ?>
				</div>
			</div>	

		<?php 
		endwhile;
		endif; 
		?>


<?php
 
//  Reset main loop
$args = array ( 'post_parent' => 5 );
query_posts( $args );
 
if ( have_posts() ):
    while ( have_posts() ) :
        the_post();
 
        // Do stuff with the post content.
        the_title();
        the_permalink(); // Etc.
 
    endwhile;
else:
    // Insert any content or load a template for no posts found.
endif;
 
wp_reset_query();
 
?>
<!-- END - UPDATES-SUBHEAD TEXT -->

			</header><!-- .page-header -->




<h2>News</h2>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();
