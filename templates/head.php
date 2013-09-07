<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="description" content=<?= get_bloginfo('description')?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Facebook open graph image -->
  <meta property="og:image" content="http://grontnapp.no/app-icons/ios/iTunesArtwork.png"/>
  
  <!-- IOS Home Screen Icons -->
  <link rel="apple-touch-icon" href="<?= get_bloginfo('stylesheet_directory')?>/assets/img/app-icons/ios/Icon.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?= get_bloginfo('stylesheet_directory')?>/assets/img/app-icons/ios/Icon-72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?= get_bloginfo('stylesheet_directory')?>/assets/img/app-icons/ios/Icon@2x.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?= get_bloginfo('stylesheet_directory')?>/assets/img/app-icons/ios/Icon-72@2x.png" />
  <meta name="apple-mobile-web-app-capable" content="yes" />

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
