<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title>The Morty Blog</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/manifest.json') ?>">
    <link rel="mask-icon" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/safari-pinned-tab.svg') ?>" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

    <?php if ( is_prod() ) : ?>
    	<!-- Facebook Pixel Code -->
    	<script>
    	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    	document,'script','https://connect.facebook.net/en_US/fbevents.js');
    	fbq('init', '1764001357210273');
    	fbq('track', "PageView");</script>
    	<noscript><img height="1" width="1" style="display:none"
    	src="https://www.facebook.com/tr?id=1764001357210273&ev=PageView&noscript=1"
    	/></noscript>
    	<!-- End Facebook Pixel Code -->
    <?php endif; ?>

    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="d-lg-none w-100 d-flex justify-content-between">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="d-flex" href="/">
        <img class="navbar-brandimage align-self-center" src="<?php echo get_parent_theme_file_uri('/assets/images/bloglogo.png') ?>" alt="Morty Blog" />
      </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php
                    $categories = get_categories();
                    foreach($categories as $category) {
                       echo '<a class="dropdown-item" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                    }   
                  ?>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://www.himorty.com/">Morty</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.himorty.com/how-it-works">How It Works</a>
              </li>
            </ul>
          </div>
          <div class="col-4 d-none d-lg-flex justify-content-center">
            <a href="https://www.himorty.com/blog">
              <img class="navbar-brandimage" src="<?php echo get_parent_theme_file_uri('/assets/images/bloglogo.png') ?>" alt="Morty Blog" />
            </a>
          </div>
          <div class="col-4 col-lg-3 offset-lg-1 justify-content-end">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </nav>
