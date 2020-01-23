<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); if(  is_archive() ){ echo 'product-article' ;}; ?> " <?php post_class(); ?>>
	<header class="entry-header">
		<div class="product-block">
			<div class="<?php if(is_home()){ echo 'post-header';}else{ echo 'product-header';}; ?>">
				<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
				<img src="<?php echo CFS()->get( 'image' );?>" >
				<div class="product-describtion">
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<?php if(is_home()){ ?>
					<p><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?></p>
					<?php };?>
					<?php if(!is_home()){ ?>

					<p><?php echo CFS()->get( 'price' );?></p>
					<?php };?>
					
				</div>
			</div>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			
		</div><!-- .entry-meta -->
		<?php endif; ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php if( ! is_archive() ){ the_excerpt();}; ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
