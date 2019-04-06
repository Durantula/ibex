<?php
/**
 * Template Name: Blog
 */

get_header(); ?>


<?php include "template-parts/navigation_pages.php" ?>


<div class="page-banner">
    <div class="about-banner backgroundTop" style="background-image: url(<?php echo get_template_directory_uri();?>/img/testimonial.jpg)"></div>
    <div class="transparent-filter2"></div>
    <h1 class="bannerHeading"><?php echo get_field('main_heading')?></h1>
    <div class="contact-pages mainHeadingFade">
        <p><i class="fa fa-phone padding-right-side" aria-hidden="true"></i>03 9598 7717</p>
        <p class="padding-left-side"> <i class="fa fa-mobile padding-right-side" aria-hidden="true"></i>0407 863 725</p>
    </div>
</div>


<?php include "template-parts/service_offering.php" ?>



<?php 
if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
else { $paged = 1; }

$post_query = new WP_Query('posts_per_page=20&paged=' . $paged); 




if($post_query->have_posts() ) :?>
    <div class="services-main-box">
        <div class="container success-stories-box services-container-box">
            <div class="blog">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row">
                        <?php while($post_query->have_posts() ) :
                            $post_query->the_post();   
                            $post_id = get_the_ID();?>
                        
                                <div class="col-xl-4 col-lg-6">
                                    
                                    <div class="blogPost blog-hover">
                                        <a href="<?php echo get_permalink(); ?>">
                                            <!-- <div class="blogImage">
                                                <div class="blog-picture" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)"></div>
                                                <div class="blog-filter"></div>
                                            </div> -->

                                            <div class="content">
                                                <h1><?php the_title(); ?></h1>
                                                <p class="date">Posted: <?php echo human_time_diff( get_post_time('U')); ?></p>
                                                <p><?php the_field("post_excerpt", $post_id)?></p>
                                            </div>

                                            <div class="read-more">
                                                <div class="circleBox">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>
                                                <p>Read more</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        <?php endwhile; ?>
                    </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer();?>