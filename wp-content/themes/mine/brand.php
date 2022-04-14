<?php
/**
 * Template Name: Brand
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
.black-bg{
    background-color:#111111;
}
a.draw.colo.scroll {
    text-decoration: none;
}
#letsgetstartedyellow a{
    background: #e4ca2d;
    border: 0;
    box-sizing: border-box;
    padding: 5px 20px 5px 20px;
    color: #fff;
    font-size: 18px;
    border-radius: 5px;
    text-align: center;
    text-transform: uppercase;
    font-family: 'MontserratSemiBold';
}
#letsgetstarted a{
    background: #3d3b50;
    border: 0;
    box-sizing: border-box;
    padding: 5px 20px 5px 20px;
    color: #fff;
    font-size: 18px;
    border-radius: 5px;
    text-align: center;
    text-transform: uppercase;
    font-family: 'MontserratSemiBold';
}
#letsgetstarted a:hover,
#letsgetstarted a:focus,
#letsgetstarted a:active,{
    background: #3d3b50;
    border: 0;
    box-sizing: border-box;
    padding: 5px 20px 5px 20px;
    color: #fff;
    font-size: 18px;
    border-radius: 5px;
    text-align: center;
    text-decoration:none;
    text-transform: uppercase;
    font-family: 'MontserratSemiBold';
}
.brand_logo button {
    background: #3d3b50;
    border: 0;
    box-sizing: border-box;
    padding: 5px 20px 5px 20px;
    color: #fff;
    font-size: 18px;
    border-radius: 5px;
    text-align: center;
    text-transform: uppercase;
    font-family: 'MontserratSemiBold';
}

ul.brnd-logo {
    padding-inline-start: 0;
    margin-left: 0;
}

ul.brnd-logo li {
    display: inline-block;
    padding-left: 15px;
}

.mine_advan {
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brand-black-bg.png');
    background-size: cover;
    background-repeat: no-repeat;
}

.brand_logo {
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brand-logo-bg.png');
    background-size: cover;
    background-repeat: no-repeat;
}

ul.new-logo {
    padding-inline-start: 0;
    margin-left: 0;

}

ul.new-logo li {
    display: inline-block;
    position: relative;
    list-style: none;
    margin: 10px 0px;
    padding-left: 20px;
    background: url('<?php echo get_template_directory_uri(); ?>/assets/images/rupee-sign.png')no-repeat;
    background-position: left 5.5px;
    margin-bottom: 10px;
}

ul.new-logo1 {
    padding-inline-start: 0;
    margin-left: 0;

}

ul.new-logo1 li {
    display: inline-block;
    position: relative;
    list-style: none;
    margin: 10px 0px;
    padding-left: 20px;
    background: url('<?php echo get_template_directory_uri(); ?>/assets/images/rupee-sign.png')no-repeat;
    background-position: left 5.5px;
    margin-bottom: 26px;
}

.mine_advan button {
    background: #fef7ef;
    border: 0;
    box-sizing: border-box;
    padding: 5px 20px 5px 20px;
    color: #050505;
    font-size: 18px;
    border-radius: 5px;
    text-align: center;
    text-transform: uppercase;
    font-family: 'ManropeExtraBold', sans-serif;
}

hr.project-info {
    margin-top: 175px;
    margin-bottom: 21px;
    border: 0;
    border-top: 1px solid #fff;
    -webkit-transform: rotate(90deg);
}
.banner-brand .black {
    background-color: #3c3a4f;
}
.banner-brand .brown {
    background-color: #c39a88;
}
.banner-brand .rwblack {
    background-color: #3c3a4f;

}
.banner-brand .conte-text {
    padding-left: 25%;
}
.banner-brand .button-brand {
    padding-left: 25%;
}
.banner-brand button {
    background: #e4ca2d;
    border: 0;
    box-sizing: border-box;
    padding: 5px 20px 5px 20px;
    color: #010101;
    font-size: 18px;
    border-radius: 5px;
    text-align: center;
    text-transform: uppercase;
    font-family: 'MontserratSemiBold';
}

p.contact_header1 {
    font-size: 30px;
    font-weight:bold;

}

.campign_wrap img {
    position: absolute;
    left: 43%;
    top: -25px;
    /* transform: translate(-21px,0px); */
}
.campaign-one{
    background-color:#413848;
    padding:20px;
    border-radius:15px;
    margin: 0 50px;
}
.campaign-two{
    background-color:#ca9fac;
    padding:20px;
    border-radius:15px;
    margin: 0 50px;
}
.campaign-three{
    background-color:#92c8ca;
    padding:20px;
    border-radius:15px;
    margin: 0 50px;
}
.box-one img{
    background-color:#413848;
}
.box-two img{
    background-color:#ca9fac;
}
.box-three img{
    background-color:#92c8ca;
}
.col-lg-12.lines_wrapper {padding: 0px 110px;/* position: absolute; *//* bottom: -93px; */margin: 0px 30px;}

img.line_1 {width: 45%;}

img.line_3 {width: 45%;}

img.line_2 {width: 1%;}

.box-one img,.box-two img ,.box-three img{
    background-color: transparent !important;
}

@media only screen and (max-width: 767px) {
    .banner-brand .conte-text {
        padding-left: 0;
        text-align: center;
    }
    .banner-brand .button-brand {
        padding-left: 0;
    }
    p.more_header {
        text-align: center;
    }
    .col-lg-12.lines_wrapper {
        display: none !Important;
    }
}
@media only screen and (min-width:768px) and (max-width:1023px) { 
    .banner-brand .conte-text {
        padding-left: 8%;
    }
    .banner-brand .button-brand {
        padding-left: 0;
    }
    .campign_wrap {
        margin: auto !important;
    }
    button#contactsubmitcampaign{
        margin-right: 40px;
    }
}
@media only screen and (min-width:1024px) and (max-width:1200px) {
    .banner-brand .conte-text {
        padding-left: 18%;
    }
    .banner-brand .button-brand {
        padding-left: 0;
    }
}
@media screen and (max-width: 600px) {
    .button-brand.pb-20.pt-20.text-center {
        padding-top: 0px !important;
    }
}

</style>



<section class="banner-brand pt-20">
    <div class="container-fluid">
        <div class="row align-self-center rwblack">
            <div class="ml-auto mr-auto col-lg-6 col-md-6 col-sm-12 pb-xs-20 black align-self-center d-none d-lg-block d-md-block d-sm-none">
                <div class="pt-20 conte-text wow wow fadeInDown">
                    <h1 class="color-white fs-40 montregular">From Stories to Sales</h1>
                    <p class="color-white fs-18 montultlightd">Get conversions along with branding</p>
                </div>
                <div class="pt-20 conte-text wow wow fadeInDown">
                    <p class="color-white fs-18 montultlightd">The Next Evolution of Influencer Marketing</p>
                </div>
                <div class="button-brand pt-20 pb-20 wow fadeInUp" data-wow-delay="0.1s">
                    <button class="draw" onclick="window.open('./brand/', '_blank').focus();">Get Conversions</button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pb-xs-20 brown align-self-center wow fadeIn">
                <div class="pt-20">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand-banner-vector.png">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pb-xs-20 black align-self-center d-block d-lg-none d-md-none d-sm-block">
                <div class="pt-20 conte-text">
                    <h2 class="color-white fs-30 montregular wow fadeInUp">From Stories to Sales</h2>
                    <p class="color-white fs-18 montultlightd wow fadeInUp">Get conversions along with branding</p>
                </div>
                <div class="pt-20 conte-text">
                    <p class="color-white fs-18 montultlightd wow fadeInUp">The Next Evolution of Influencer Marketing</p>
                </div>
                <div class="button-brand text-center pb-20 wow fadeInUp" id="letsgetstartedyellow" data-wow-delay="0.1s">
                    <!-- <button class="draw" onclick="window.open('./brand/', '_blank').focus();">Get Conversions</button> -->
                    <a class="draw colo scroll" href="#brandform">Get Conversions</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pt-50 pb-50 black-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-30">
                    <h2 class="montlight color-white text-center">Upto 50% Lower CAC than Performance Campaigns</h2>
                </div>
                <div class="row mt-50">
                    <div class="col-lg-4 col-md-4 mb-xs-45 col-12 equal-height mb-20 wow fadeInDown" data-wow-delay="0.1s">
                        <div class="campaign-one campign_wrap">
                            <div class="text-center mb-20 box-one">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/c_1.png" style="width:50px;height:50px;" alt="" />
                            </div>
                            <p class="campaign-text text-center color-white montregular">Pay Creators on a Fixed + Pay-Per-Conversion Model</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mb-xs-45 col-12 equal-height mb-20 wow fadeInDown" data-wow-delay="0.2s">
                        <div class="campaign-two campign_wrap">
                            <div class="text-center mb-20 box-two">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/c_2.png" style="width:50px;height:50px;" alt="" />
                            </div>
                            <p class="campaign-text text-center color-white montregular">Drive Users to<br>your D2C<br>Website</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mb-xs-45 col-12 equal-height mb-20 wow fadeInDown" data-wow-delay="0.3s">
                        <div class="campaign-three campign_wrap">
                            <div class="text-center mb-20 box-three">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/c_3.png" style="width:50px;height:50px;" alt="" />
                            </div>
                            <p class="campaign-text text-center color-white montregular">Get Conversions,<br>while building<br>your brand</p>
                        </div>
                    </div>
                    <div class="col-lg-12 d-lg-block d-md-block d-none d-sm-block d-xl-block lines_wrapper">
                    <img class="line_1 wow fadeInUp" data-wow-delay="0.1s" src="<?php echo get_template_directory_uri();?>/assets/images/line_1.png"  alt="" />
                    <img class="line_2 wow fadeInUp" data-wow-delay="0.2s" src="<?php echo get_template_directory_uri();?>/assets/images/line_2.png"  alt="" />
                    <img class="line_3 wow fadeInUp" data-wow-delay="0.3s" src="<?php echo get_template_directory_uri();?>/assets/images/line_3.png"  alt="" />
                    </div>
                </div>
                <div class="button-brand text-center pt-20 pb-20"  id="letsgetstartedyellow">
                    <!-- <button type="submit" id="contactsubmitcampaign" class="btn btn-submit sub-btn">Sign Up</button> -->
                    <a class="draw colo scroll" href="#brandform">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="mine_advan pt-50 pb-50 pb-xs-20 pt-xs-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="manextrabold text-center color-fef7ef pt-20 pb-30">The Mine.Store Advantage.</h2>
            </div>
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 pb-xs-20">
                <div class="cont-box text-left pt-20">
                    <p class="color-white fs-22 mansemibold more_header">45% LOWER ACQUISITION COST <br>+ BRAND AWARENESS</p>
                    <ul class="new-logo">
                        <li>
                            <p class="color-white manregular">Match with creators that help you build brand and reduce
                                CAC</p>
                        </li>
                        <li>
                            <p class="color-white manregular">Brand awareness through organic content</p>
                        </li>
                        <li>
                            <p class="color-white manregular">Better returns compared to traditional performance
                                campaigns</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <hr class="project-info">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 pb-xs-20">
                <div class="cont-box text-left pt-20">
                    <p class="color-white fs-22 mansemibold more_header">50% FIXED FEE + <br>PAY-PER-CONVERSION</p>
                    <ul class="new-logo1">
                        <li>
                            <p class="color-white manregular">Pay 40-50% of creators fixed content fee</p>
                        </li>
                        <li>
                            <p class="color-white manregular">Give variable incentives for every conversion</p>
                        </li>
                        <li>
                            <p class="color-white manregular">Get your brand spoken about at a lower cost</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center pt-30 pt-xs-10 pb-20 pb-xs-10">
                <button class="draw" onclick="window.open('./brand/', '_blank').focus();">Sign Up</button>
            </div>
        </div>
    </div>
</section> -->

<section class="brand_logo pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="manextrabold text-center color-fef7ef pt-20 pb-30"><span style="text-decoration:underline">PROVEN</span> Branding + Sales model across categories</h2>
            </div>
            <!-- <div class="col-lg-12 col-md-12 col-sm-12 text-center pb-50 pb-xs-30 pb-sm-30">
                <div class="logo text-center pt-20">
                    <ul class="brnd-logo">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/boat-logo.png"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/happilo.png"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fashor.png"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/go-colors.png"></li>
                    </ul>

                </div>
            </div> -->
            <div class="col-lg-3 col-md-3 col-sm-12 pb-50 pb-xs-30 pb-sm-30 text-center wow fadeIn" data-wow-delay="0.1s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boat-logo.png">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 pb-50 pb-xs-30 pb-sm-30 text-center wow fadeIn" data-wow-delay="0.2s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/happilo.png">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 pb-50 pb-xs-30 pb-sm-30 text-center wow fadeIn" data-wow-delay="0.3s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fashor.png">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 pb-50 pb-xs-30 pb-sm-30 text-center wow fadeIn" data-wow-delay="0.4s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/go-colors.png">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center pb-20" id="letsgetstarted">
                <!-- <button class="draw colo" onclick="window.open('./brand/', '_blank').focus();">Let’s get started</button> -->
                <a class="draw colo scroll" href="#brandform">Let’s get started</a>
            </div>
        </div>
    </div>
</section>

<section class="Form" id="brandform">
    <div class="container">
        <div class="row align-self-center">
            <div class="col-lg-5 col-md-5 col-sm-12 align-self-center d-none d-lg-block d-md-block d-sm-none">
                <div class="cont-support">
                    <p class="contact_header1 montlight color-black fs-30 pb-30 pb-md-0">Make a return on influence.</p>
                    <form action="<?php echo site_url()?>/brandsendtogravity.php" method="post" target="_top" id="contact-form"
                        data-toggle="validator" role="form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-contact" pattern="^[a-zA-Z][a-zA-Z\s]*$"
                                required="" placeholder="Brand Name*" />
                        </div>
                        <div class="form-group">
                            <input type="url" name="website" class="form-control-contact" pattern="[(http(s)?):\/\/(www\.)?\w-/=#%&\.\?]{2,}\.[a-z]{2,}([\w-/=#%&\.\?]*)" required="" placeholder="Website*" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-contact" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="" placeholder="Your Email Id*" />
                        </div>
                        <div class="form-group">
                            <textarea name="comments" class="form-control-contact color-white" rows="4" id="comment" placeholder="Your favorite brands"></textarea>
                        </div>
                        <div class="form-group mb-0 pt-20 pt-md-0 pb-xs-20">
                            <button type="submit" id="contactsubmit" class="btn btn-submit sub-btn">Sign Up</button>
                        </div>
                        <input type="hidden" class="form-url" name="SourceURL" id="SourceURL" value="<?php echo $actual_link;?>" />
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
            <div class="col-lg-5 col-md-5 col-sm-12 align-self-center text-center pt-xs-20 pt-sm-20 wow fadeIn">
                <div class="content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/form-image.png">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 align-self-center d-block d-lg-none d-md-none d-sm-block">
                <div class="cont-support text-center">
                <p class="contact_header1 montlight color-black pb-30 pb-md-0">Make a return on influence.</p>

                    <form action="<?php echo site_url()?>/brandsendtogravity.php" method="post" target="_top" id="contact-form"
                        data-toggle="validator" role="form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-contact" pattern="^[a-zA-Z][a-zA-Z\s]*$"
                                required="" placeholder="Brand Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="website" class="form-control-contact" pattern=""
                                required="" placeholder="Website" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-contact"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="" placeholder="Your Email Id*" />
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

<!-- <script type="text/javascript">
    $(document).ready(function($) {
        $(window).on("load", function () {
            if ($(window).width() > 767.98) {
            var height = 0;
            $(".campaign-text").each(function () {
                if (height < $(this).outerHeight()) {
                height = $(this).outerHeight();
                }
            });
            $(".campaign-text").css("height", height);
            }
        });
    });
</script> -->

<?php get_footer(); ?>