<?php
/* 
====================
	HEADER
====================
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
    <meta name="referrer" content="always"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="<?php echo THEME_IMAGES; ?>/favicon.png" rel="icon" type="image/x-icon">

    <title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('title'); ?></title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php include_once("trackingscripts.php") ?>

<div id="main-container">

    <header id="masthead" class="site-header">

        <div class="row">
            <div class="medium-4 columns">
                <a href="<?php echo home_url(); ?>" class="logo">
                    <?php get_template_part('images/svg-includes/logo-svg') ?>
                </a>
            </div>

            <div class="medium-8 columns">
                <nav class="main-nav" aria-label="Site Navigation" itemscope
                     itemtype="https://schema.org/SiteNavigationElement">
                    <div class="mobile-wrap">
                        <button class="mobile-trigger" type="button">
                            <?php _e('Menu', 'amped-theme'); ?>
                            <span class="mobile-trigger-box">
                            <span class="mobile-trigger-inner"></span>
                        </span>
                        </button>
                        <?php get_template_part('templates/menu', 'nav'); ?>
                    </div>
                </nav>
            </div>

        </div>

    </header>

    <div class="site-content <?php echo is_front_page() ? 'home' : 'page' ?>-content">