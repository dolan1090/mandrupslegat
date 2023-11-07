<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php the_title(); ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="icon" href="<?php $ecentura_image_favicon = get_option('ecentura_image_favicon');
                            echo wp_get_attachment_image_url($ecentura_image_favicon, 'full'); ?>" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/dist/main.css" type="text/css" media="all">
</head>

<body>
    <header>
        <div class="boxnav-brand">
            <div class="container">
                <button class="open-menu" aria-label="Menu Open"><i class="fa fa-bars"></i></button>
                <div class="nav-brand">
                    <a href="<?php bloginfo('url'); ?>" aria-label="To home page">
                        <?php $ecentura_image_logo = get_option('ecentura_image_logo');
                        echo wp_get_attachment_image($ecentura_image_logo, 'full');
                        ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="menu-box">
            <div class="container">
                <div class="menu-site">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'container' => 'false',
                            'menu_id' => '',
                            'menu_class' => '',
                            'link_before' => ' ',
                            'link_after' => ' '
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </header>