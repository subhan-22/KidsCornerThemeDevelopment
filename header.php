<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <title> <?php bloginfo('name'); ?> </title>
    <?php wp_head(); ?>
  </head>
    <!-- Nav bar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <?php dynamic_sidebar( 'nav_logo' ); ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto c-lato font-weight-bold " >
          <?php
          wp_nav_menu(array
          ('theme_location' => 'primary_menu',
          'container_class' => 'custom-nav-link'));
          dynamic_sidebar( 'header-social-icon' );
          ?>
        </ul>
      </div>
    </nav>
    <!-- Nav bar end -->
