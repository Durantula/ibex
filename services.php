<?php
/**
 * Template Name: Services
 */

get_header(); ?>


<?php include "template-parts/navigation_pages.php" ?>


<div class="page-banner">
    <div class="about-banner bottom-align" style="background-image: url(<?php echo get_template_directory_uri();?>/img/helpHand.jpg)"></div>
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

