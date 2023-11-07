<?php

function themes_setup()
{

	add_theme_support('post-thumbnails');
	// Add post thumbails

	register_nav_menu('main-menu', __('Menu Top'));
	register_nav_menu('bottom-menu', __('Menu Bottom'));
	// End menu

}

add_action("init", "themes_setup");

function add_loginout_link($items)
{
	if (is_user_logged_in()) {
		$items .= '<li><a href="' . wp_logout_url() . '">' . __('Logout') . '</a></li>';
	} else {
		$items .= '<li><a href="' . wp_login_url() . '">' . __('Login') . '</a></li>';
	}
	return $items;
}
add_filter('wp_nav_menu_items', 'add_loginout_link', 10, 2);
