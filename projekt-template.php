<?php
/**
 * Page Template
 *
 *Template Name: Media Template
 *
 */
    get_header(); ?>

            
            <main id="main" class="site-main">
                    <?php if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post(); ?>
                        <h1> Photo COmplex </h1>
                        <?php 
                        $images = get_field('featured_images');
                        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                        if( $images ): ?>
                            
                            <div class="masonry-grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>
                                <?php foreach( $images as $image ): ?>
                                     <div class="grid-item">
                                       <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                                     </div> 

                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>


                        <?php endwhile; ?>
  
                    <?php else : ?>

                        <?php get_template_part( 'loop/loop-error' ); ?>

                    <?php endif; ?>
            </main>
            
    <canvas id="point_mesh"></canvas>

<?php get_footer(); ?>