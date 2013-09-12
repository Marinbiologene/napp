<section <?php post_class(); ?>>

<?php global $query_string; // required
$posts = query_posts($query_string.'&posts_per_page=-1&post_type=species&orderby=title&order=ASC'); ?>

<ul class="species-collection nav">
  <li class="species"><?php get_search_form(); ?></li>
  <?php get_template_part('loop'); ?>
</ul>

<?php wp_reset_query(); // reset the query ?>

</section>
