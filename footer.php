<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins.
 *
 */
?>
	</div>



		<?php
		if ( is_front_page() ) {
			?><div id="Orbit"><canvas id="point_mesh"></canvas></div>

			<?php
			}

		?>
        <footer id="footer">

        <?php get_template_part( 'wp_setup/menus/menu-subsidiary' ); ?>
        </footer>

        <div id="page_meta" data-type="<?php echo $type; ?>" data-id="<?php the_ID() ;?>"></div>
        <?php wp_footer(); ?>
    </body>
</html>
