<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Climate_Critters
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">

<h1>Welcome!</h1>

<!-- HOME-SUBHEAD TEXT -->
	<!-- Query for page-subhead custom post type and get the correct post by category -->
		<?php query_posts(
			'posts_per_page=1
			&post_type=home-subhead'
		); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!-- Home Subhead -->
		<div class="home-subhead" id="statement">	
				<div class="home-subhead">
					<?php the_content(); ?>
				</div>
			</div>	

		<?php 
		endwhile;
		endif; 
		?>
<!-- END - HOME-SUBHEAD TEXT -->

</header><!-- .entry-header -->



<div class="entry-content">

<!-- HOME-STATEMENT TEXT -->
<!-- Query for home-statement custom post type and get just one single post -->
<?php query_posts(
	'posts_per_page=1
	&post_type=home-statement'
); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Home Statement -->
<div class="statement" id="statement">	
		<div class="home-statement">
			<?php the_content(); ?>
		</div>
	</div>	

<?php 
endwhile;
endif; 
?>
<!-- END - HOME-STATEMENT TEXT -->

<h1>Join us now!</h1>
<h1>Button Block</h1>
<h1>It's time to make your voices heard</h1>


<h1>COP26 2021 UN Climate Change Conference</h1>
<h1>1–12 Nov 2021 </h1>


<div>FIGHT GLOBAL WARMING</div>
<div>STOP POLLUTION</div> 
<div>HEAL OUR PLANET</div> 
<div>SAVE THE WORLD</div> 
 
	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
