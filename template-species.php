<?php
/*
Template Name: Seafood List
*/
?>

<?php get_template_part('page'); ?>

<?php global $query_string; // required
$posts = query_posts($query_string.'&posts_per_page=-1&post_type=species&orderby=title&order=ASC'); ?>

<ul class="species-collection nav">
  <?php get_template_part('loop'); ?>
</ul>

<?php wp_reset_query(); // reset the query ?>