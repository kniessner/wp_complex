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

                        echo "<script type=\"text/javascript\">\n";
                        echo "var strJson = " . json_encode($images) . "\n";
                        //echo "var arrAsObj = JSON.parse(strJson)\n";
                        echo "</script>\n";

                        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                        if( $images ): ?>


                            <div class="masonry-grid" id="main_images" data-images="<?php echo json_encode($images);?>">
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