<section <?php post_class(); ?>>
<header>
<?php get_template_part('templates/page', 'header'); ?>
</header>

<?php

global $query_string; // required

$query_var = get_search_query();
$query_has_results = false;

$args_latin = array(
  'post_type' => 'species',
  'posts_per_page' => '-1',
  'orderby' => 'title',
  'order' => 'ASC',
  'meta_query' => array(
    'relation' => 'OR',
    array(
      'key' => 'ct_Latin_text_9c2a',
      'value' => get_search_query(),
      'compare' => 'LIKE'
    )
  )
);

$args_badge = array(
  'post_type' => 'species',
  'posts_per_page' => '-1',
  'orderby' => 'title',
  'order' => 'ASC',
  'meta_query' => array(
    'relation' => 'OR',
    array(
      'key' => 'ct_Badges_checkbox_110e ',
      'value' => get_search_query(),
      'compare' => 'LIKE'
    )
  )
);

$args_synonyms = array(
  'post_type' => 'species',
  'posts_per_page' => '-1',
  'orderby' => 'title',
  'order' => 'ASC',
  'tax_query' => array(
    'relation' => 'OR',
    array(
      'taxonomy' => 'nicknames',
      'field' => 'slug',
      'terms' => array( get_search_query() )
    ),
    array(
      'taxonomy' => 'synonyms',
      'field' => 'slug',
      'terms' => array(  get_search_query() )
    )
  )
);

?>


<!-- Regular search results -->

<?php $posts = query_posts($query_string.'&posts_per_page=-1&post_type=species&orderby=title&order=ASC'); ?>

<?php if (have_posts()) : ?>

  <?php $query_has_results = true; ?>

  <ul class="species-collection nav">
    <?php get_template_part('loop'); ?>
  </ul>

<?php endif; ?>

<?php wp_reset_query(); // reset the query ?>

<!-- Badge results -->

<?php $posts = query_posts($args_latin); ?>

<?php if (have_posts()) : ?>

  <?php $query_has_results = true; ?>

  <h2>Latinske treff</h2>

  <ul class="species-collection nav">
    <?php get_template_part('loop'); ?>
  </ul>

<?php endif; ?>

<?php wp_reset_query(); // reset the query ?>

<!-- Badge results -->

<?php $posts = query_posts($args_badge); ?>

<?php if (have_posts()) : ?>

  <?php $query_has_results = true; ?>

  <h2>Sjømat merket "<?php echo $query_var ?>"</h2>

  <ul class="species-collection nav">
    <?php get_template_part('loop'); ?>
  </ul>

<?php endif; ?>

<?php wp_reset_query(); // reset the query ?>

<!-- Synonyms results -->

<?php $posts = query_posts($args_synonyms); ?>

<?php if (have_posts()) : ?>

  <?php $query_has_results = true; ?>

  <h2>Var du på utkikk etter en av disse?</h2>

  <ul class="species-collection nav">
    <?php get_template_part('loop'); ?>
  </ul>

<?php endif; ?>

<?php wp_reset_query(); // reset the query ?>

<!-- No results -->

<?php if (!$query_has_results) : ?>
  <div class="alert">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
<?php endif; ?>

</section>
