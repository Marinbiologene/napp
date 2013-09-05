<?php if(get_post_type() == 'species') : ?>
  <?php get_template_part('templates/species', 'single'); ?>
<?php else : ?>
  <?php get_template_part('templates/content', 'single'); ?>
<?php endif; ?>