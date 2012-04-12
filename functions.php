<?php

/* 
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */
 
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo('template_directory') . '/admin/' );
	require_once dirname( __FILE__ ) . '/admin/options-framework.php';
}

// Add language supports. Please note that Reverie Framework does not include language files.
	load_theme_textdomain('reverie', get_template_directory() . '/lang');

// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');

// Add post formarts supports. http://codex.wordpress.org/Post_Formats
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

// Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
	add_theme_support('menus');
	register_nav_menus(array(
	'main_navigation' => __('Main Navigation', 'main_nav'),
	'second_navigation' => __('Second Navigation', 'second_nav')
));

// Register the sidebar(s)
	register_sidebar(array(
		'name' => 'BlogSideBar',
		'id' => 'blog-sidebar',
		'description' => 'Widgets in this area will be shown on the blog page.',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	));
	
	register_sidebar(array(
		'name' => 'PageSideBar',
		'id' => 'page-sidebar',
		'description' => 'Widgets in this area will be shown on the individual pages.',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	));		