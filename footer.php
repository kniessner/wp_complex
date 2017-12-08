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
        <footer id="footer">

        <?php get_template_part( 'wp_setup/menus/menu-subsidiary' ); ?>
        </footer>
				<?php
					$post = get_post();
					dump($post);
				?>
<<<<<<< HEAD
				dcecbe5f-1b4f-47e8-8070-9f9ca0b67c8b
=======
				
>>>>>>> ed422655ef2dc7a292e0219813706681ddaa9f32
        <div id="page_meta" data-type="" data-id="<?php the_ID() ;?>"></div>
        <?php wp_footer(); ?>
    </body>
</html>
