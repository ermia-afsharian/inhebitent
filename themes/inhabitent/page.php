<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="sidebar-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		

		</main><!-- #main -->
		<div class="comments-area email-input">
		<form action="/find-us/#wpcf7-f61-p9-o1" method="post" class="wpcf7-form" novalidate="novalidate">
			<div style="display: none;">
				<input type="hidden" name="_wpcf7" value="61">
				<input type="hidden" name="_wpcf7_version" value="5.1.1">
				<input type="hidden" name="_wpcf7_locale" value="en_US">
				<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f61-p9-o1">
				<input type="hidden" name="_wpcf7_container_post" value="9">
				<input type="hidden" name="g-recaptcha-response" value="">
			</div>
				<p class="name"><label>Name <span class="required">*</span></label><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </p>
				<p class="email"><label>Email <span class="required">*</span></label><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </p>
				<p class="subject"><label>Subject <span class="required">*</span></label><span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </p>
				<p class="message"><label>Message <span class="required">*</span></label><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span> </p>
				<p><input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit submit"><span class="ajax-loader"></span></p>
			<div class="wpcf7-response-output wpcf7-display-none"></div>
		</form></div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
