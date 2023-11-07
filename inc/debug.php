<?php

// remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

function add_custom_admin_bar_css() {
    if (is_admin_bar_showing()) {
        echo '<style type="text/css">';
        echo '@media (max-width: 991px) { header .menu-site { margin-top: 32px; } } @media (max-width: 782px) { header .menu-site { margin-top: 46px; } }';
        echo '</style>';
    }
}
add_action('wp_head', 'add_custom_admin_bar_css');

/**
 * Opt out for suggesting the persistent object cache
 */
add_filter( 'site_status_should_suggest_persistent_object_cache', '__return_false' );
