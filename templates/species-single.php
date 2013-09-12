<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <div class="page-header">
        <h1 class="entry-title">
        <?php the_title(); ?>
        <?php if(get_the_terms($post->ID, 'nicknames')) : ?>
          <span class="tagline"><?php echo the_terms($post->ID, 'nicknames') ?></span>
        <?php endif; ?>
        </h1>
      </div>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
        <?php get_template_part('templates/species-meta-classification', get_post_format()); ?>
        <?php get_template_part('templates/species-meta-climate', get_post_format()); ?>
        <?php get_template_part('templates/species-meta-badge', get_post_format()); ?>
        <?php get_template_part('templates/species-image'); ?>
      </div>
      <footer>
         <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      </footer>
      <?php comments_template('/templates/comments.php'); ?>
   </article>
<?php endwhile; ?>
