<header class="header">
  <div class="container">
  	<nav class="navbar navbar-expand-md navbar-light bg-faded">
     <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
     	<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-header.png" />
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
      <div class="nav-toggle-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
     </button>
     <?php
     wp_nav_menu([
       'menu'            => 'top',
       'theme_location'  => 'menu-1',
       'container'       => 'div',
       'container_id'    => 'bs4navbar',
       'container_class' => 'collapse navbar-collapse',
       'menu_id'         => 'primary-menu',
       'menu_class'      => 'navbar-nav ml-auto',
       'depth'           => 2,
       'fallback_cb'     => 'bs4navwalker::fallback',
       'walker'          => new bs4navwalker()
     ]); ?>
  	</nav>
  </div>
  <div class="header-backdrop"></div>
</header><!-- .header -->