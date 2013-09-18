<li>
  <a href="<?php the_permalink(); ?>" class="<?= do_shortcode('[ct id="ct_Classifica_radio_a43a"]') ?>"><?php the_title(); ?>
    <span class="tagline"><?php get_template_part('templates/species-content/species-classification-alt1'); ?></span>
    <span class="pull-right glyphicon glyphicon-chevron-right"></span>
  </a>

  <article <?php post_class(); ?>>
    <header>
      <h2 class="entry-title">
        <?php get_template_part('templates/species-title'); ?>
      </h2>
    </header>
    <div class="entry-content">
      <?php get_template_part('templates/species-content'); ?>
    </div>
    <footer>
      <?php get_template_part('templates/species-meta'); ?>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
</li>
