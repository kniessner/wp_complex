<?php
/**
 * Page Template
 *
 *Template Name: Media Template
 *
 */
    get_header(); ?>

            
            
                    <?php if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post(); ?>
                      
                        <?php 
                        $images = get_field('featured_images');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $images ): ?>
                            <ul>
                                <?php foreach( $images as $image ): ?>
                                    <li>
                                      <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>


                        <?php endwhile; ?>
  
                    <?php else : ?>

                        <?php get_template_part( 'loop/loop-error' ); ?>

                    <?php endif; ?>
    

<?php get_footer(); ?>