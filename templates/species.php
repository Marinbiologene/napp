<li>

  <a class="<?= do_shortcode('[ct id="ct_Classifica_radio_a43a"]') ?>" href="#"><?php the_title(); ?><span></span><span class="pull-right glyphicon glyphicon-chevron-right"></span></i></a>
  
  <article <?php post_class(); ?>>
   <header>
     <h2 class="entry-title"><?php the_title(); ?></h2>
   </header>
   <div class="entry-content">
     <?php the_content(); ?>
     <?php get_template_part('templates/species-meta-classification'); ?>
     <?php get_template_part('templates/species-meta-climate'); ?>
     <?php get_template_part('templates/species-meta-badge'); ?>
     <?php get_template_part('templates/species-image'); ?>
   </div>
   <footer>
     <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
   </footer>
  </article>

</li>
