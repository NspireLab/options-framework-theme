<?php
/**
 * @package WordPress
 * @subpackage Options Framework Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Load meta info and title -->

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php wp_title(''); ?></title>
	
<!-- load stylesheets -->
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css">
	
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	
<!-- Favicon and Feed -->

	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
	
<!--.iPhone Web App Home Screen Icon -->

	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon.png" />
	
<!-- Enable Startup Image for iOS Home Screen Web App -->

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

<!-- Startup Image iPad Landscape (748x1024) -->

	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	
<!-- Startup Image iPad Portrait (768x1004) -->

	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	
<!-- Startup Image iPhone (320x460) -->

	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />

<!-- If jQuery already load, remove the line -->

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.foundation.js"></script>
	
<?php
// Enqueue threaded comments support. 
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
// Load head elements
	wp_head();
?>	

</head>

<body <?php body_class(); ?>>
	
<!-- Start the main container -->
	<div id="wrap" class="container" role="document">
		
<!-- Row for blog navigation -->
		
			<header class="container" role="banner">
				<div class="logo container four.columns">
					<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
					<h4 class="subheader"><?php bloginfo('description'); ?></h4>
				</div>
				<nav class="container twelve.colums" role="navigation">
					<?php 
						wp_nav_menu( array(
						'theme_location' => 'main_nav',
						'container' =>false,
						'menu_class' => '',
						'echo' => true,
						'before' => '',
						'after' => '',
						'link_before' => '',
						'link_after' => '',
						'depth' => 0,
						'items_wrap' => '<dl class="nav hide-on-phones"><dt>Blog Menu:</dt>%3$s</dl>',
					); ?>
				</nav>
			</header>
					
		<!-- Row for main content area -->
		<div id="main" class="container sixteen.columns">