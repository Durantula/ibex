<?php
/**
 * Template Name: About
 */

get_header(); ?>


<?php include "template-parts/navigation_pages.php" ?>

<div class="page-banner">
    <div class="about-banner right-align" style="background-image: url(<?php echo get_template_directory_uri();?>/img/mainImage2.jpg)"></div>
    <div class="transparent-filter2"></div>
    <h1 class="bannerHeading"><?php echo get_field('main_heading')?></h1>
    <div class="contact-pages mainHeadingFade">
        <p><i class="fa fa-phone padding-right-side" aria-hidden="true"></i>03 9598 7717</p>
        <p class="padding-left-side"> <i class="fa fa-mobile padding-right-side" aria-hidden="true"></i>0407 863 725</p>
    </div>
</div>

<?php include "template-parts/service_offering.php" ?>

<div class="services-main-box">
    <div class="container services-container-box">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-lg-10">
                    <div class="about-information">
                        <?php the_field('content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>

