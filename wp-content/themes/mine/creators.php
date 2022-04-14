<?php
/**
 * Template Name: Creators
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

$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

get_header();
?>

<style>
.more-money {
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/black-bg.png');
    background-size: cover;
    background-repeat: no-repeat;
}

.mine_store {
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brown-bg.png');
    background-size: cover;
    background-repeat: no-repeat;
}
</style>



<section class="banner pt-20">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-vector.png" alt="Banner" class="mobile w-100 d-block d-sm-block d-md-none d-lg-none" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-desktop.png" alt="Banner" class="desk w-100 d-none d-sm-none d-md-block d-lg-block">
    <div class="bannersub-container col-12 col-lg-8 col-md-8 pt-xs-20 pb-xs-20 text-xs-center">
        <div class="bannersub-inner">
            <p class="banner-text manregular">Create. Curate. Earn 5X</p>
            <h1 class="banner-text manbold">Make Mo₹e with <br>Mine.Store</h1>
        </div>
        <div class="bannersub-inner1">
            <p class="banner-text1 manregular">Extraordinary content deserves extraordinary returns.<br>Request an invite!</p>
            <button class="draw" onclick="window.open('./creators/', '_blank').focus();">Sign Up</button>
        </div>
    </div>
</section>


<section class="more-money pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="manextrabold text-center color-white pt-20 pb-30">How You Can Make Mo₹e</h2>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-center pb-xs-20">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/more-money-1.png">
                <div class="cont-box text-center pt-20">
                    <p class="color-white manbold more_header">1. Pick 5 brands every month.</p>
                    <p class="color-white manlight more_header">Plan your content, collaborate
                        with brands suitable for your
                        organic content.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-center pb-xs-20">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/more-money-2.png">
                <div class="cont-box text-center pt-20">
                    <p class="color-white manbold more_header">2. Get paid for making content.</p>
                    <p class="color-white manlight more_header">Brands pay you for creating
                        your organic content.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-center pb-xs-20">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/more-money-3.png">
                <div class="cont-box text-center pt-20">
                    <p class="color-white manbold more_header">3. Add link to bio. Multiply your
                        monthly income</p>
                    <p class="color-white manlight more_header">Curate products for your own
                        storefront. Drive traffic and earn atleast
                        40% to 70% on every order.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center pt-30 pb-20">
                <button class="draw" onclick="window.open('./creators/', '_blank').focus();">Sign Up</button>
            </div>
        </div>
    </div>
</section>

<section class="mine_store pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="manextrabold text-center color-black pt-20 pb-30">Get Personal with Mine.Store/YourName</h2>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 text-center abs d-none d-lg-block d-md-block d-sm-none">
                <div class="cont-box1 text-center pt-20">
                    <p class="color-black manregular cont1">Curate Products that <br><span
                            class="subcont mansemibold">your audience</span> love</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center abs d-none d-lg-block d-md-block d-sm-none">
                <div class="cont-box11 text-center pt-20">
                    <p class="color-black manregular cont11">Showcase your content <br>on <span
                            class="subcont mansemibold">your store</span> to <br>drive 5X conversions <br></p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center d-none d-lg-block d-md-block d-sm-none">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mobile.png">
                <div class="cont-box text-center pt-30">
                    <p class="color-black fs-18 mansemibold cont">Get your personal link to mine.store. Plan your Picks
                        of the Month</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center abs d-none d-lg-block d-md-block d-sm-none">
                <div class="cont-box111 text-center pt-20">
                    <p class="color-black manregular cont111">Track Performance of <br>your curation on <br> <span
                            class="subcont mansemibold">your dashboard.</span></p>
                </div>
            </div>
            <div class="col-sm-12 text-center d-block d-lg-none d-md-none d-sm-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/more-money-mobile-section.png">
                <div class="cont-box text-center pt-30">
                    <p class="color-black fs-18 mansemibold cont">Get your personal link to mine.store. Plan your Picks
                        of the Month</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 text-center pb-20">
                <button class="draw colo" onclick="window.open('./creators/', '_blank').focus();">Make Mine
                    Yours</button>
            </div>
        </div>
    </div>
</section>

<section class="Form">
    <div class="container">
        <div class="row align-self-center">
            <div class="col-lg-6 col-md-6 col-sm-12 align-self-center d-none d-lg-block d-md-block d-sm-none">
                <div class="cont-support">
                    <p class="contact_header manbold color-black pb-30 pb-md-0">Imagine this. For every product worth Rs.1000
                        sold on your store, earn anywhere between
                        Rs.500 to Rs.700. Ready?</p>

                    <form action="<?php echo site_url()?>/creatorsendtogravity.php" method="post" target="_top" id="contact-form" data-toggle="validator"
                        role="form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-contact" pattern="^[a-zA-Z][a-zA-Z\s]*$"
                                required="" placeholder="Name*" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="insta" class="form-control-contact" pattern="^[a-zA-Z][a-zA-Z\s]*$"
                                required="" placeholder="Insta Handle*" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-contact"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="" placeholder="Email Id*" />
                        </div>
                        <div class="form-group">
                            <textarea name="comments" class="form-control-contact color-white" rows="4" id="comment"
                                placeholder="Your favorite brands"></textarea>
                        </div>
                        <div class="form-group mb-0 pt-20 pt-md-0 pb-xs-20">
                            <button type="submit" id="contactsubmit" class="btn btn-submit sub-btn">Sign Up</button>
                        </div>
                        <input type="hidden" class="form-url" name="SourceURL" id="SourceURL"
                            value="<?php echo $actual_link;?>" />

                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 align-self-center text-center pt-xs-20 pt-sm-20">
                <div class="content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/form-image.png">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 align-self-center d-block d-lg-none d-md-none d-sm-block">
                <div class="cont-support text-center">
                    <p class="contact_header manbold color-black pb-30">Imagine this. For every product worth Rs.1000
                        sold on your store, earn anywhere between
                        Rs.500 to Rs.700. Ready?</p>

                    <form action="<?php echo site_url()?>/creatorsendtogravity.php" method="post" target="_top" id="contact-form" data-toggle="validator"
                        role="form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-contact" pattern="^[a-zA-Z][a-zA-Z\s]*$"
                                required="" placeholder="Name*" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="insta" class="form-control-contact" pattern="^[a-zA-Z][a-zA-Z\s]*$"
                                required="" placeholder="Insta Handle*" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-contact"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="" placeholder="Email Id*" />
                        </div>
                        <div class="form-group">
                            <textarea name="comments" class="form-control-contact color-white" rows="4" id="comment"
                                placeholder="Your favorite brands"></textarea>
                        </div>
                        <div class="form-group mb-0 pt-20 pt-xs-0 pb-xs-50">
                            <button type="submit" id="contactsubmit" class="btn btn-submit sub-btn">Sign Up</button>
                        </div>
                        <input type="hidden" class="form-url" name="SourceURL" id="SourceURL"
                            value="<?php echo $actual_link;?>" />

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>