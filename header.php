<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo is_front_page() ? get_bloginfo( 'name' ) : wp_title( '' ); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link href="/wp-content/themes/wearefyi/images/favicon.png" rel="shortcut icon" type="image/x-icon">
    
    <link rel="preload" href="/wp-content/themes/wearefyi/fonts/GraphikRegular.woff" as="font" crossorigin="anonymous" />
    <link rel="preload" href="/wp-content/themes/wearefyi/fonts/GraphikRegular.woff2" as="font" type="font/woff2" crossorigin>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="header">
        <a href="/" class="header-logo">
            <img src="/wp-content/themes/wearefyi/images/logo.svg" alt="We Are FYI" width="52" height="22">
        </a>

        <button class="hamburger" type="button" data-toggle="" aria-controls="NavCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

        <div class="header-nav-collapse" id="NavCollapse">
            <nav class="header-nav">
                <?php
                    wp_nav_menu([
                        'theme_location' => 'header-menu',
                        'container' => false,
                        'menu_class' => 'list-unstyled'
                    ]);
                ?>
            </nav>
        </div>
    </header>
    