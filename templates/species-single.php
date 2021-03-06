<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <div class="page-header">
        <h1 class="entry-title">
          <?php get_template_part('templates/species-title'); ?>
        </h1>
        <p>
          <?php if (do_shortcode('[ct id="ct_Latin_text_9c2a"]')) : ?>
            <em class="tagline latin"><?php echo do_shortcode('[ct id="ct_Latin_text_9c2a"]') ?></em>
          <?php endif; ?>
        </p>
      </div>
      </header>
      <div class="entry-content">
        <?php get_template_part('templates/species-content'); ?>
      </div>
      <footer>
        <?php get_template_part('templates/species-meta'); ?>
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      </footer>
   </article>
<?php endwhile; ?>
