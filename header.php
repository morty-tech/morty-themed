<!doctype html>
<html lang="en">

<head <?php do_action( 'add_head_attributes' ); ?>>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>The Morty Blog</title>

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/apple-touch-icon.png') ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/favicon-32x32.png') ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/favicon-16x16.png') ?>">
	<link rel="manifest" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/manifest.json') ?>">
	<link rel="mask-icon" href="<?php echo get_parent_theme_file_uri('/assets/images/favicons/safari-pinned-tab.svg') ?>" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
		rel="stylesheet">

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

<body>
	<header>header</header>