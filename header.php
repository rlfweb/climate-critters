<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Climate_Critters
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,500;1,400;1,700&display=swap" rel="stylesheet">

	<!-- Donorbox popup -->

<script type="text/javascript" defer src="https://donorbox.org/install-popup-button.js"></script>

<!-- Mailchimp Newsletter Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'climate-critters' ); ?></a>

	<header id="masthead" class="site-header container">

		<div class="site-title">
			<a href="<?php echo get_site_url(); ?>">
						<div class="logo pt4 pb3 ph1">
						<img src="/wp-content/uploads/ClimateCritters-site-title.png" alt="Climate Critters logo" class="responsive-images">
						</div>
			</a>
		</div><!-- .site-title -->

		
		<nav id="site-navigation" class="main-navigation flex-l justify-center tc lh-solid">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'climate-critters' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->