<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail('medium', array('class' => 'thumbnail')); ?>
<p class="small"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
<?php endif; ?>