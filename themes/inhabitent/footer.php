<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
						<div class="contact">
						<h3>CONTACT INFO</h3>
						<p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
						<p><i class="fa fa-phone"><a href="tel:5553434567891">778-456-7891</a></i></p>
						<p><i class="fa fa-facebook-square"></i><i class="fa fa-twitter-square"></i><i class="fa fa-google-plus-square"></i></p>
					</div>			
					<div class="business-hours">
							<h3>Business Hours</h3>
							<p><span class="day">Monday-Friday:</span> 9am to 5pm</p>
							<p><span class="day-">Saturday:</span> 10am to 2pm</p>
							<p><span class="k">Sunday:</span> Closed</p>
						</div>
					<div class="footer-block-item">
						<div class="text-logo">
							<a href="http://localhost/wordpress/" rel="home">
								<img src=<?php echo get_stylesheet_directory_uri() . '/images/logos/inhabitent-logo-text.svg';?>>
							</a>
						</div>
					</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
