<article <?php post_class(); ?>>
 <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 </header>
 <div class="entry-content">
   <?php the_content(); ?>
    <?php get_template_part('templates/species-meta-classification', get_post_format()); ?>
    <?php get_template_part('templates/species-meta-climate', get_post_format()); ?>
    <?php get_template_part('templates/species-meta-badge', get_post_format()); ?>
 </div>
</article>
