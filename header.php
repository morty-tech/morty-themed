<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/manifest.json') ?>">
    <link rel="mask-icon" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/safari-pinned-tab.svg') ?>" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed">

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="d-lg-none w-100 d-flex justify-content-between">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="/">
        <img class="navbar-brandimage" src="<?php echo get_parent_theme_file_uri('/assets/images/bloglogo2x.png') ?>" alt="Morty Blog" />
      </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.himorty.com/">Morty</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.himorty.com/how-it-works">How It Works</a>
              </li>
            </ul>
          </div>
          <div class="col-4 d-none d-lg-flex justify-content-center">
            <a href="/">
              <img class="navbar-brandimage" src="<?php echo get_parent_theme_file_uri('/assets/images/bloglogo2x.png') ?>" alt="Morty Blog" />
            </a>
          </div>
          <div class="col-4 col-lg-3 offset-lg-1 justify-content-end">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </nav>

<div>
