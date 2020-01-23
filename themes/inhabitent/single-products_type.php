<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="product-main" role="main">
		
		<img src="<?php echo CFS()->get( 'image' );?>" >
		<?php while ( have_posts() ) : the_post(); ?>
            <div class="product-content">
			    <?php get_template_part( 'template-parts/content', 'single' ); ?>
            </div>
        </div>
			<?php the_post_navigation(); ?>


		<?php endwhile; // End of the loop. ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
