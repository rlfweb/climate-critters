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

<!-- SUBHEADING TEXT -->
<?php 
$args = array (
  'posts_per_page' => 1,
  'post_type' => 'subheading',
  'category_name' => 'home',
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
<!-- END - SUBHEADING TEXT -->

</header><!-- .entry-header -->



<div class="entry-content">

<!-- IMAGE BLOCK -->
<div class="items-center pt4 flex flex-column">

	<div>
		<span class="ph3"><img src="/wp-content/themes/climate-critters/images/ClimateCritters-Headshot-bird.png" alt="Dr Isabella Barbini" width="300" class="responsive-images"></span>
		<span class="ph3"><img src="/wp-content/themes/climate-critters/images/ClimateCritters-Headshot-ant.png" alt="Juan Antonio" width="300" class="responsive-images"></span>
	</div>

	<div class="logo-container">
		<img src="/wp-content/themes/climate-critters/images/ClimateCritters-Logo-disc.png" alt="Climate Critters logo" width="600" class="responsive-images">
		<div class="logo-centered f-headline site-title logo-text">The<br>Climate<br>Critters</div>
	</div>
	
	<div>
		<span class="ph3"><img src="/wp-content/themes/climate-critters/images/ClimateCritters-Headshot-bear.png" alt="Cosmo the Bear" width="300" class="responsive-images"></span>
		<span class="ph3"><img src="/wp-content/themes/climate-critters/images/ClimateCritters-Headshot-apple.png" alt="Pippa Cox" width="300" class="responsive-images"></span>
		<span class="ph3"><img src="/wp-content/themes/climate-critters/images/ClimateCritters-Headshot-tree.png" alt="Elmer Arbour" width="300" class="responsive-images"></span>
	</div>

</div>
<!-- END - IMAGE BLOCK -->

<!-- HOME-STATEMENT TEXT -->
<!-- Query for home-statement custom post type and get just one single post -->
<?php query_posts(
	'posts_per_page=1
	&post_type=home-statement'
); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Home Statement -->
<div class="statement" id="statement">	
		<div class="home-statement pv4 tc f3">
			<?php the_content(); ?>
		</div>
	</div>	

<?php 
endwhile;
endif; 
?>
<!-- END - HOME-STATEMENT TEXT -->


<h1 class="f2 b pv3">Join us now!</h1>

<!-- BUTTON BLOCK -->
<div class="button-block flex flex-row justify-around">
	<div class="button-block-button green-block ph3">
		<h1>Follow us</h1>
		<div class="social-links">
					<a href="https://www.facebook.com/ClimateCritters/" target="_blank" >
						<img src="<?php bloginfo('template_directory')?>/images/facebook.svg" class="icon">
					</a>
					<a href="https://twitter.com/ClimateCritters/" target="_blank" >
						<img src="<?php bloginfo('template_directory');?>/images/twitter.svg" class="icon">
					</a>
					<a href="https://instagram.com/climatecritters/" target="_blank" >
						<img src="<?php bloginfo('template_directory');?>/images/instagram.svg" class="icon">
					</a>
					<a href="https://www.youtube.com/channel/UC6PFlrk2IaIe3NUjAuJxjEA/" target="_blank" >
						<img src="<?php bloginfo('template_directory');?>/images/youtube.svg" class="icon">
					</a>
					</div>
	</div>
	<div class="button-block-button blue-block ph3">
		<h1>Donate to our cause</h1>
	</div>
</div>
<!-- END BUTTON BLOCK -->

<h1 class="f1 mv5">It's time to make your voices heard!</h1>


<h1 class="f2 b mb0">COP26 2021 UN Climate Change Conference</h1>
<h1 class="f2 b mv0">1–12 November 2021 </h1>

<!-- Countdown -->
<?php echo do_shortcode('[wpcdt-countdown id="50"]'); ?>

<div class="countdown-text">
<div class="f4">FIGHT GLOBAL WARMING</div>
<div class="f3">STOP POLLUTION</div> 
<div class="f2">HEAL OUR PLANET</div> 
<div class="f1">SAVE THE WORLD</div> 
</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
