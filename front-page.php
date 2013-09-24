<section <?php post_class(); ?>>

<header>
<?php get_template_part('templates/page', 'header'); ?>
</header>

<?php global $query_string; // required

echo $query_string;
$posts = query_posts($query_string.'&posts_per_page=-1&post_type=species&orderby=title&order=ASC'); ?>

<ul class="species-collection nav">
  <?php get_template_part('loop'); ?>
</ul>

<?php wp_reset_query(); // reset the query ?>

</section>
