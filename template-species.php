<?php
/*
Template Name: Seafood List
*/
?>

<section <?php post_class(); ?>>
<header>
<?php get_template_part('templates/page', 'header'); ?>
</header>
<?php get_template_part('templates/content', 'page'); ?>

<?php global $query_string; // required
$posts = query_posts($query_string.'&posts_per_page=-1&post_type=species&orderby=title&order=ASC'); ?>

<ul class="species-collection nav">
  <?php get_template_part('loop'); ?>
</ul>

<?php wp_reset_query(); // reset the query ?>

</section>