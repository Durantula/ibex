<?php
/**
 * Template Name: Contact
 */

get_header(); ?>



<!-- Main Header Carousel -->
<div class="headerBox">

    <div class="header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home.jpg')">
    <?php include "template-parts/navigation.php" ?>
        <!-- <div class="transparent-filter"></div> -->
        
        <div class="container mainCenterContent">
            <div class="row mainTopMessage">
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <h1 class="mainHeadingFade"><?php echo get_field('main_heading')?></h1>
                    <!-- <p class="mainHeadingFade">Call now</p>
                    <div class="action">
                        <div class="contact-group">
                            <i class="fa fa-phone mainHeadingFade" aria-hidden="true"></i>
                            <p class="mainHeadingFade"><?php echo get_option('phone_number'); ?></p>
                        </div>
                        <div class="contact-group">
                            <i class="fa fa-mobile padding-left-contact mainHeadingFade" aria-hidden="true"></i>
                            <p class="mainHeadingFade"><?php echo get_option('mobile_number'); ?></p>
                        </div>
                    </div> -->
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>


<div class="services-main-box">
    <div class="contact services-container-box">
        <div class="container ">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-lg-5 col-md-10 home-contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="39" title="Contact Form 2"]')?>

                </div>

                <div class="col-lg-5">
                    <div class="row contact-information-details">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <h2>Location</h2>
                                <p><?php echo get_option('office_address'); ?> <?php echo get_option('office_suburb'); ?> <?php echo get_option('office_postcode'); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info">
                                <h2>Mailing</h2>
                                <p><?php echo get_option('mailing_address'); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info">
                                <h2>Phone</h2>
                                <p class="greyOveride"><?php echo get_option('phone_Number'); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info">
                                <h2>Mobile</h2>
                                <p class="greyOveride"><?php echo get_option('mobile_number'); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info">
                                <h2>Email</h2>
                                <p><?php echo get_option('office_email'); ?></p>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="contact-info">
                                <h2>Social Media</h2>
                                <a target="_blank" href="<?php echo get_option('facebook_page_url'); ?>"><p>Facebook</br></p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>

