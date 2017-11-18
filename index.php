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
		
		
		<div class="skill_slider">
				<div class="word_base"><h4>Complex</h4></div>
				<div class="slider word_slider">
					  <div class="slide"><h4> Design</h4></div>
					  <div class="slide"><h4> Photography</h4></div>
					  <div class="slide"><h4> Art</h4></div>
					  <div class="slide"><h4> Care</h4></div>
					  <div class="slide"><h4> Concepts</h4></div>
					  <div class="slide"><h4> Experiences</h4></div>
				</div>
		</div>

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

		<div id="Orbit"></div>

<?php
get_footer();
