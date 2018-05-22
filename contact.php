<?php
/**
 * Template Name: Contact
 */

get_header(); ?>



<?php include "template-parts/navigation_pages.php" ?>


<div class="page-banner">
    <div class="about-banner" style="background-image: url(<?php echo get_template_directory_uri();?>/img/contactBackground.jpg)"></div>
    <div class="transparent-filter2"></div>
    <h1 class="bannerHeading"><?php echo get_field('main_heading')?></h1>
    <div class="contact-pages mainHeadingFade">
        <p><i class="fa fa-phone padding-right-side" aria-hidden="true"></i>03 9598 7717</p>
        <p class="padding-left-side"> <i class="fa fa-mobile padding-right-side" aria-hidden="true"></i>0407 863 725</p>
    </div>
    
</div>

<?php include "template-parts/service_offering.php" ?>

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

