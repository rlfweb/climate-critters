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

	<footer id="colophon" class="site-footer ph4-m ph4-l container">
	
	<div>
		<p class="cc-footer-tagline f3 f3-ns f2-m f2-l ">Climate Critters - working together to change the&nbsp;world</p>
		</div>

		<div class="footer-grid">

			<div class="footer-left">
				<p class="ma0">Subscribe to our newsletter for all the latest&nbsp;news</p>

				<div id="mc_embed_signup">
<form action="https://climatecritters.us1.list-manage.com/subscribe/post?u=3e12933f424bc396092f85eb3&amp;id=c692e23926" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3e12933f424bc396092f85eb3_c692e23926" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
			</div><!-- #footer-left -->

			<div class="footer-middle">
				<div>
					<p>Telephone: +44&nbsp;(0)1327&nbsp;261631</p>
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
