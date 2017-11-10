<?php
/**
 * Primary Menu Wrapper
 *
 * Displays the Primary Menu collapsed top right
 *
 */

 ?>

<div class="menu-primary-top-collapsed">
  
  <nav class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Menu</h4>
      <?php if ( has_nav_menu( 'primary' ) ) : ?>

		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'navbar-nav mr-auto ', 'menu_id' => 'menu-primary-items', 'fallback_cb' => '' ) ); ?>

		<?php 
		//mt-2 mt-md-0
		endif; ?>

<?php get_template_part( 'menu-primary' ); ?>
    </div>
  </nav>

  <div class="action_panel">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <i class="fa fa-linkedin" aria-hidden="true"></i>
    <i class="fa fa-github" aria-hidden="true"></i>
  </div>
</div>


