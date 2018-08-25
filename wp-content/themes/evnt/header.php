<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
		<title>VIRUS | Value Influencer to Rocket & Uprise Startup</title>
		<meta name="description" content="스타트업 가치&문화 확산 네트워크">
		<meta property="og:type" content="website">
		<meta property="og:title" content="VIRUS네트워크">
		<meta property="og:description" content="스타트업 가치&문화 확산 네트워크">
		<meta property="og:image" content="http://virus.network/wp-content/uploads/2017/11/VIRUS_logo_homepage.png">
		<meta property="og:url" content="http://virus.network">
		<meta name="twitter:card" content="VIRUS">
		<meta name="twitter:title" content="VIRUS네트워크">
		<meta name="twitter:description" content="스타트업 가치&문화 확산 네트워크">
		<meta name="twitter:image" content="http://virus.network/wp-content/uploads/2017/11/VIRUS_logo_homepage.png">
		<meta name="twitter:domain" content="http://virus.network">
		<meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="profile" href="<?php esc_url('http://gmpg.org/xfn/11'); ?>">
        <link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <div class="wsmenucontainer">
            <div class="overlapblackbg"></div>
            <div class="wsmobileheader">
                <a id="wsnavtoggle" class="animated-arrow"><span></span></a>
                <a class="smallogo">
                    <?php
                    $theme_logo = get_theme_mod('evnt_theme_logo', '');
                    if (empty($theme_logo)) {
                        ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="<?php echo esc_html__('logo', 'evnt') ?>">
                    <?php } else { ?>
                        <img src="<?php echo esc_url($theme_logo); ?>" alt="<?php echo esc_html__('logo', 'evnt') ?>">
                    <?php } ?>
                </a>
            </div>
            <header class="topheader">
                <div class="header-image">
                    <img src="<?php esc_url(header_image()); ?>" alt="<?php echo esc_html__('Header Image', 'evnt') ?>">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class=" bigmegamenu">
                                <div class="logo">
                                    <a href="<?php echo esc_url(home_url('/')); ?>">
                                        <?php
                                        $theme_logo = get_theme_mod('evnt_theme_logo', '');
                                        if (empty($theme_logo)) {
                                            ?>
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="<?php echo esc_html__('logo', 'evnt') ?>">
                                        <?php } else { ?>
                                            <img src="<?php echo esc_url($theme_logo); ?>" alt="<?php echo esc_html__('logo', 'evnt') ?>">
                                        <?php } ?>
                                    </a>
                                </div>
                                <nav class="wsmenu">
                                    <?php
                                    wp_nav_menu(
                                            array('container_class' => 'wsmenu',
                                                'theme_location' => 'primary',
                                                'container' => 'false',
                                                'menu_class' => 'mobile-sub wsmenu-list',
                                                'fallback_cb' => 'evnt_walker_nav_menu::fallback',
                                                'walker' => new Evnt_Walker_Nav_Menu()
                                            )
                                    );
                                    ?>
                                </nav> <!--.main -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>

