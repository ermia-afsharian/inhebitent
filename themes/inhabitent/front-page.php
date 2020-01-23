<?php

get_header(); ?>

<section class="hero">
    <img class="full-logo" src=<?php echo get_stylesheet_directory_uri() . '/images/logos/inhabitent-logo-full.svg';?> alt="">
</section>
<main>
        <section class="product-info">
            <h2>Shop Stuff</h2>
            <?php
                $terms = get_terms( 'product_taxonomy');
                ?>
            <div class="product-type">
               

                <?php foreach ( $terms as $term ):  ?>
                    <div class="product-type-block">
                        <img src=<?php echo get_stylesheet_directory_uri() . '/images/product-type-icons/'. $term->name .'.svg';?> alt="<?php echo $term->name .'description';?>">
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo esc_url( get_term_link( $term ) )?>" class="btn"><?php echo $term->name; ?> stuff</a></p>
                        </div>
                        <?php endforeach;?>
            </div>
            </section>
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
            <section class="journal-front">
            <?php
                $args = array( 'post_type' => 'post', 'order' => 'ASC', 'numberposts' => 3);
                $product_posts = get_posts( $args ); // returns an array of posts
                ?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
                <div>
                    <?php the_post_thumbnail(); ?>
                    <div class="journal-front-border">
                        <span>
                            <?php the_date(); ?> /
                            <?php comments_number(); ?>
                        </span>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <a class="black-btn" href="<?php the_permalink(); ?>">Read Entry</a>
                   </div>
                </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                    




            </section>





<!-- ---------------------------------------------------------------------------------------------------------------------- -->

            <!-- <section class="adventures container">
                <h2>Latest Adventures</h2>
                <ul class="adventure">
                    <li class="ad1">
                     <div class="story-wrapper">
                                                    
                                                   <div class="story-info">
                           <h3 class="entry-title"><a href="https://tent.academy.red/adventure/getting-back-to-nature-in-a-canoe/" rel="bookmark">Getting Back to Nature in a Canoe</a></h3>                           <a class="white-btn" href="https://tent.academy.red/adventure/getting-back-to-nature-in-a-canoe/">Read More</a>
                        </div>
                     </div>
                  </li>
                    <li class="ad2">
                     <div class="story-wrapper">
                                           
                                                   <div class="story-info">
                           <h3 class="entry-title"><a href="https://tent.academy.red/adventure/a-night-with-friends-at-the-beach/" rel="bookmark">A Night with Friends at the Beach</a></h3>                           <a class="white-btn" href="https://tent.academy.red/adventure/a-night-with-friends-at-the-beach/">Read More</a>
                        </div>
                     </div>
                    </li>
                    <li class="ad3">
                     <div class="story-wrapper">
                                                 <div class="story-info">
                           <h3 class="entry-title"><a href="https://tent.academy.red/adventure/taking-in-the-view-at-big-mountain/" rel="bookmark">Taking in the View at Big Mountain</a></h3>                           <a class="white-btn" href="https://tent.academy.red/adventure/taking-in-the-view-at-big-mountain/">Read More</a>
                        </div>
                     </div>
                    </li>
                    <li class="ad4">
                     <div class="story-wrapper">
                                            <h3 class="entry-title"><a href="https://tent.academy.red/adventure/a-night-with-friends-at-the-beach/" rel="bookmark">Star-Gazing at the Night Sky</a></h3>                           <a class="white-btn" href="https://tent.academy.red/adventure/star-gazing-at-the-night-sky/">Read More</a>
                        </div>
                     </div>
                    </li>
                </ul>
               <p class="see-more">
                  <a href="https://tent.academy.red/adventures/" class="btn">More Adventures</a>
               </p>
                     </section> -->
</main>


<?php get_footer(); ?>