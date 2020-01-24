<?php

get_header(); ?>

<section class="products-type">
	<h1>SHOP STUFF</h1>
	<?php
        $terms = get_terms( 'product_taxonomy');
    ?>
    <ul>
	<?php foreach ( $terms as $term ):  ?>
        <li><a href="<?php echo esc_url( get_term_link( $term ) )?>" class="btn"><?php echo $term->name; ?></a></li>
    <?php endforeach;?>
    </ul>
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
