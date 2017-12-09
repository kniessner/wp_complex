<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package complex
 */

get_header(); ?>

		<main id="main" class="site-main">
		<!--<div class="start_image" ><img class="screen_fit" src="<?php bloginfo('template_url');?>/src/img/logo_form.png" /> </div>-->

		 <?php if ( have_posts() ) : ?>
             <?php while ( have_posts() ) : the_post(); ?>
					<div class="container">
						<?php the_content(); ?>
					</div>
		    <?php endwhile; ?>

        <?php else : ?>
             <?php //get_template_part( 'loop/loop-error' ); ?>
		<?php endif; ?>
		</main><!-- #main -->


		<?php
		if ( is_front_page() ) {
			?><div id="Orbit"></div><?php
			}
		}
		?>


<?php
get_footer();
