<?php
/**
 * Template Name: Products
 */

get_header(); ?>


<!-- Main Header Carousel -->
<div class="headerBox">

    <div class="header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home.jpg')">
    <?php include "template-parts/navigation.php" ?>
       
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

<div class="services-main-box remove-border">
<?php $args = array( 'post_type' => 'service');
$loop = new WP_Query( $args );
$counter = 1;
if($loop->have_posts()):?>
    <div class="container">    
        <div class="about-expertise">
            <h1>Our Services</h1>
        </div>
    </div>
    <div class="container">
        <?php while ( $loop->have_posts() ) : $loop->the_post();
        
            $postID = $post->ID;?>

            <div id="service<?php echo $counter ?>" class="row about-expertise-table main-expertise">
                <div class="col-lg-1"></div>
                <div class="col-lg-3 col-md-4 about-expertise-item">
                    <img src="<?php echo get_field('icon',$postID)?>" alt="Urgent Respite">
                    
                </div>
                <div class="col-lg-7 about-services">
                    <p class="heading"><?php echo get_field('service_full_name',$postID)?></p>
                    <p><?php echo get_field('description',$postID)?></p>
                </div>
                <div class="col-lg-1"></div>
            </div>
            <?php $counter++ ?>
        <?php endwhile;?>
    </div>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>
<?php get_footer();?>

