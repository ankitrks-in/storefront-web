<?php
/**
 * Template Name: Brand Thank You Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mine
 */

get_header();
?>

<style>
    .thankyou_banner .bannersub-thank {
    position: absolute;
}
.thankyou_banner .bannersub-thank {
    margin-top: -13%;
    margin-left: 8%;
}
.thankyou_mobile {
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/black-bg.png');
    background-size: cover;
    background-repeat: no-repeat;
}
@media only screen and (min-width:768px) and (max-width:1023px) {
    .thankyou_banner .bannersub-thank {
    margin-top: -15%;
    margin-left: 0%;
}
}
@media only screen and (min-width:1024px) and (max-width:1200px) {
    .thankyou_banner .bannersub-thank {
    margin-top: -14%;
    margin-left: 0%;
}
}

</style>

<section class="thankyou_banner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thankyou-banner-vector.png" alt="Banner" class="mobile w-100 d-block d-sm-block d-md-none d-lg-none" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thankyou-banner-desktop.png" alt="Banner" class="desk w-100 d-none d-sm-none d-md-block d-lg-block">
    <div class="bannersub-thank col-12 col-lg-8 col-md-8 pt-xs-20 pb-xs-20 text-xs-center d-none d-sm-none d-md-block d-lg-block">
        <div class="bannersub-thank">
            <h1 class="banner-text montregular color-white">We are excited you have <br>signed up with us!</h1>
            <p class="banner-text montlight color-white pt-20">Stay tuned and we will get back to you within a <br>business day to jumpstart our partnership.</p>
        </div>
    </div>
</section>
<section class="thankyou_mobile d-block d-sm-block d-md-none d-lg-none">
    <div class="bannersub-thank col-12 col-lg-8 col-md-8 pt-xs-20 pb-xs-20 text-xs-center">
        <div class="bannersub-thank">
            <h1 class="banner-text montregular fs-xs-24 color-white">We are excited you have <br>signed up with us!</h1>
            <p class="banner-text montlight color-white pt-20">Stay tuned and we will get back to you within a <br>business day to jumpstart our partnership.</p>
        </div>
    </div>
</section>





<?php get_footer(); ?>