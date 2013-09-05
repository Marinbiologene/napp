<header class="page">

  <div class="container">
    <a href="<?php echo home_url(); ?>">
      <div id=header>
        <h1>Grønt NAPP</h1>
          <p class="lead">Spis bærekraftig sjømat med god samvittighet!</p>
        </div>
    </a>
    <small class="pull-right">En app i beta fra <a href="http://marinbiologene.no">Marinbiologene</a> og <a href="http://bgraphic.no">bGraphic</a>.</small>
  </div>

</header>

<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-inner">
    <div class="container">
   
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
          </button>
      </div>    
      
      <div class="collapse navbar-collapse navbar-collapse">
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
      </div>


       
    </div>
  </div>
</nav>
    