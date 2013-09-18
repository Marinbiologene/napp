<?php if ( has_post_thumbnail() ) : ?>
<figure class="featured">
  <?php the_post_thumbnail('large'); ?>
  <figcaption><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></figcaption>
</figure>
<?php endif; ?>