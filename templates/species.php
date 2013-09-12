<li>
  <a class="<?= do_shortcode('[ct id="ct_Classifica_radio_a43a"]') ?>"><?php the_title(); ?>
    <span class="tagline"><?php get_template_part('templates/species-meta-classification-alt1'); ?></span>
    <span class="pull-right glyphicon glyphicon-chevron-right"></span>
  </a>

  <article <?php post_class(); ?>>
    <header>
      <h2 class="entry-title">
        <?php the_title(); ?>
        <?php if(get_the_terms($post->ID, 'nicknames')) : ?>
          <span class="tagline"><?php echo the_terms($post->ID, 'nicknames') ?></span>
        <?php endif; ?>
      </h2>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
      <?php get_template_part('templates/species-meta-classification-alt2'); ?>
      <?php get_template_part('templates/species-meta-climate'); ?>
      <?php get_template_part('templates/species-meta-badge'); ?>
      <?php get_template_part('templates/species-image'); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
</li>
