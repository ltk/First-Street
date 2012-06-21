<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <?php if (current_theme_supports('bootstrap-responsive')) { ?><meta name="viewport" content="width=device-width, initial-scale=1.0"><?php } ?>

  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.5.3.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.7.2.min.js"><\/script>')</script>

  <?php roots_head(); ?>
  <?php wp_head(); ?>
	
  <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/less/bootstrap.less">
  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/less-1.3.0.min.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php roots_header_before(); ?>
  <?php
    /* if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header', 'top-navbar');
    } else {
      get_template_part('templates/header', 'default');
    } */
  ?>
  <?php roots_header_after(); ?>

  <header id="header" class="inner group">

    <a id="brand pull-left">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="First Street" />
    </a>

    <ul id="utility-nav" class="teal nav">
      <li>Contact Us</li>
      <li>Login</li>
    </ul>

    <ul id="primary-nav" class="nav">
      <li>Take a Tour</li>
      <li>Get Started</li>
      <li>What's New</li>
      <li>About</li>
    </ul>

  </header>
