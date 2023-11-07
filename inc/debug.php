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
