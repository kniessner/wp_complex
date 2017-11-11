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
        
        </footer>  
        <div id="page_meta" data-meta="<?php echo get_post_meta( the_ID(), false ) ;?>"></div>    
        <?php wp_footer(); ?> 
    </body>
</html>