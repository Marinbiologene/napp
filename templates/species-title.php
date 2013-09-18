<?php the_title(); ?>
<?php if(get_the_terms($post->ID, 'nicknames')) : ?>
  <span class="tagline nicknames"><?php echo the_terms($post->ID, 'nicknames') ?></span>
<?php endif; ?>
