<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?>&nbsp;&nbsp;&nbsp;</a>
    </div>

   <nav class="collapse navbar-collapse navbar-collapse" role="navigation">
   <?php
     if (has_nav_menu('left_main_navigation')) :
       wp_nav_menu(array('theme_location' => 'left_main_navigation', 'menu_class' => 'nav navbar-nav navbar-left'));
     endif;
   ?>
                   
   <?php
     if (has_nav_menu('right_main_navigation')) :
       wp_nav_menu(array('theme_location' => 'right_main_navigation', 'menu_class' => 'nav navbar-nav navbar-right'));
     endif;
   ?>
   </nav>
  </div>
</header>