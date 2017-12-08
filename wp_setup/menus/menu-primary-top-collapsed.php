<?php
/**
 * Primary Menu Wrapper
 *
 * Displays the Primary Menu collapsed top right
 *
 */

 ?>

<div class="menu-primary-top-collapsed">
  <nav class="collapse" id="main_menu">
      <?php if ( has_nav_menu( 'primary' ) ) : ?>

		  <?php
      wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => ' mr-auto ', 'menu_id' => 'menu-primary-items', 'fallback_cb' => '' ) );
      ?>

		  <?php
		//mt-2 mt-md-0
		endif; ?>
  </nav>
</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
     <i class="fa fa-bars" aria-hidden="true"></i>
</button>
