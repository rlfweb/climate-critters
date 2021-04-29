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

<h1 class="welcome">Welcome!</h1>

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
<div class="items-center flex flex-column">

	<div class="home-critters">
		<span class=""><img src="/wp-content/themes/climate-critters/images/ClimateCritters-Headshot-bird.png" alt="Dr Isabella Barbini" width="300" class="responsive-images"></span>
		<span class="ph3"><img src="/wp-content/themes/climate-critters/images/ClimateCritters-Headshot-ant.png" alt="Juan Antonio" width="300" class="responsive-images"></span>
	</div>

	<div class="logo-container">
		<img src="/wp-content/themes/climate-critters/images/ClimateCrittersLogo.png" alt="Climate Critters logo" class="responsive-images">
	</div> 
	
	<div class="home-critters">
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
		<div class="home-statement lh-solid lh-copy-l mb0 pv3 pv4-l tc lh-copy f4 f3-l">
			<?php the_content(); ?>
	</div>	

<?php 
endwhile;
endif; 
?>
<!-- END - HOME-STATEMENT TEXT -->


<h1 class="f3 f2-l b mb4 mb5-l">Join us now!</h1>

<!-- BUTTON BLOCK -->
<div class="button-block flex flex-column flex-column-ns flex-column-m flex-row-l items-center justify-around-l">
	<div class="button-block-button green-block ph3 ma2 ma3-ns ma3-m ma3-l">
		<p class="blue-text mv3">Follow us</p>
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
	<div class="button-block-button blue-block mt4 mt4-ns mt4-m mt2-l mh3-l">
		<p class="blue-text mv3">Donate to<br>our cause</p>
	</div>
</div>
<!-- END BUTTON BLOCK -->

<h1 class="f3 f2-l mv5">It's time to make your voices&nbsp;heard!</h1>


<h1 class="conference mb0">COP26 2021 UN Climate Change Conference</h1>
<h3 class="conference mv0">1–12 November 2021 </h3>

<!-- Countdown -->
<?php echo do_shortcode('[wpcdt-countdown id="50"]'); ?>

<div class="countdown-text">
<div class="f4 pb2">FIGHT GLOBAL WARMING</div>
<div class="f3 pb2">STOP POLLUTION</div> 
<div class="f2 lh-title pb2">HEAL OUR PLANET</div> 
<div class="f1 lh-title pb2">SAVE THE WORLD</div> 
</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
