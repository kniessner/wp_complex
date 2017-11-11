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
                        
                        <?php 
                        
                        //echo "<script type=\"text/javascript\">\n";
                        //echo "var strJson = " . json_encode($images) . "\n";
                        //echo "var arrAsObj = JSON.parse(strJson)\n";
                        //echo "</script>\n";
                        $images = get_field('featured_images');


                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        if( $images ): ?>

                    


                        <?php endif; ?>


                        <?php endwhile; ?>
  
                    <?php else : ?>

                        <?php get_template_part( 'loop/loop-error' ); ?>

                    <?php endif; ?>
            </main>

    <canvas id="point_mesh"></canvas>

<?php get_footer(); ?>