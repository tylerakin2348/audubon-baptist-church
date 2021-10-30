<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Audubon Baptist - A Church In The Park</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,700" rel="stylesheet" type="text/css">
  <style>
  @import url('https://fonts.googleapis.com/css?family=Neucha');
  </style>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300');
  </style>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Delius" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header id="top-header">
      <a class="assistive" href="#main-content"><span>Skip to main content</span></a>
    <!-- logo code written by Kirk Wight of Automatic : Thanks Kirk :) -->
    <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
        <div class='site-logo'>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
        </div>
    <?php else : ?>
            <div class="site-logo__container">
                <div class='site-logo'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></div>
                <span class='site-description'><?php bloginfo( 'description' ); ?></span>
            </div>
    <?php endif; ?>
    <button class="hamburger-icon">
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar crossbar"></span>
        <span class="hamburger-bar"></span>
    </button>
    <nav class="main-navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>

  </header>
  <div id="main-content"></div>
