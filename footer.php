<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Climate_Critters
 */

?>

	<footer id="colophon" class="site-footer container">
	
	<div>
		<h1 class="cc-footer-tagline">Climate Critters - working together to change the world</h1>
		</div>

		<div class="footer-grid">

			<div class="footer-left">
				<p>Subscribe to our newsletter for all the latest news.</p>
				<button>Sign up now</button>
			</div><!-- #footer-left -->

			<div class="footer-middle">
				<div>
					<p>Telephone: +44 (0)1327 261631</p>
					<p>info@climatecritters.co.uk</p>
				</div>
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
			</div><!-- #footer-middle -->

			<div class="footer-right">
				<div class="address">
					<p>The Priors Hall<br>
					Shuckburgh Road<br>
					Southam CV47 7RS<br>
					UK</p>
				</div>

				<div class="footer-copyright">
					&copy;  
					Climate Critters
					<?php echo date("Y"); ?>
				</div>
			</div>	<!-- #footer-right -->


</div><!-- #footer-grid -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
