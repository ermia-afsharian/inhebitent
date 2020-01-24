<?php

get_header(); ?>

<section class="products-type">
	<?php
	$term = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );?>
	<h1><?php echo $term->name;?></h1>
	<p><?php echo $term->description?></p>
	
</section>
<main id="main" class="site-main product-front shop-main" role="main">

		<?php if ( have_posts() ) : ?>



			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>
				

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' );
                ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
