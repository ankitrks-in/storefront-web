<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mine' ); ?></a> -->

        <header id="masthead" class="site-header">
            <nav class="navbar">
                <div class="container">
                    <section class="wrapper">
                        <a href="<?php echo get_site_url(); ?>" class="brand monthairline">Mine.Store</a>
                        <button type="button" class="burger" id="burger">
                            <span class="burger-line"></span>
                            <span class="burger-line"></span>
                            <span class="burger-line"></span>
                            <span class="burger-line"></span>
                        </button>
                        <div class="menu" id="menu">
                            <ul class="menu-inner">
                                <li class="menu-item"><a href="<?php echo get_site_url();?>" class="menu-link">Creators</a></li>
                                <li class="menu-item"><a href="<?php echo get_site_url();?>/brands" class="menu-link">Brands</a></li>
                                <li class="menu-item"><a href="<?php echo get_site_url();?>/brands/#brandform" class="scroll menu-link">Contact Us</a></li>
                            </ul>
                        </div>
                    </section>
                </div>
            </nav>
        </header><!-- #masthead -->