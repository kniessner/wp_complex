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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<!--<div class="start_image" ><img class="screen_fit" src="<?php bloginfo('template_url');?>/src/img/logo_form.png" /> </div>-->
		
		<div id="Orbit"></div>

		<div id="app" ></div>
		<div class="skill_slider">
			
			<div class="container">
				<div class="word_base"><h4>Digital</h4></div>
				<div class="slider word_slider">
				  <div class="slide"><p> Design</p></div>
				  <div class="slide"><p> Photography</p></div>
				  <div class="slide"><p> Art</p></div>
				  <div class="slide"><p> Care</p></div>
				  <div class="slide"><p> Concepts</p></div>
				  <div class="slide"><p> Experiences</p></div>
			</div>
		</div>

		 <?php if ( have_posts() ) : ?>
             <?php while ( have_posts() ) : the_post(); ?>
					<div class="content container">
						<?php the_content(); ?>
					</div>
		    <?php endwhile; ?>

        <?php else : ?>

             <?php //get_template_part( 'loop/loop-error' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
