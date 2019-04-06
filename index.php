<?php
/**
 * The main template file
 * Template Name: Home
 * Template Name: Landing page template
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vokke
 * @subpackage Wattle
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<body>

<?php include "template-parts/header.php" ?>

<div class="home-recommendation">
    <div class="transparent-filter"></div>
    <div class="content">
        <h4>"The only provider when you want a job done well."</h4>
        <p>James Convey - Senior Engineering Manager</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bhp.png')" alt="bhp logo" class="logo">
    </div>
</div>

<div class="product">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <h1 class="product-heading">Product Range</h1>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-3">
                <div class="product-box">
                    <div class="transparent-filter"></div>
                    <div class="product-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/product4.jpg')"></div>
                    <div class="content">
                    <h1>Chains</h1>
                    <p>It might be hard to know what exactly to expect from the grad program, instead of wondering, how about we let an ex grad tell you all about their experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-box">
                    <div class="transparent-filter"></div>
                    <div class="product-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/product2.jpg')"></div>
                    <div class="content">
                    <h1>Sprockets</h1>
                    <p>It might be hard to know what exactly to expect from the grad program, instead of wondering, how about we let an ex grad tell you all about their experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-box">
                    <div class="transparent-filter"></div>
                    <div class="product-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/product3.jpg')"></div>
                    <div class="content">
                    <h1>Grad program experience with Ash</h1>
                    <p>It might be hard to know what exactly to expect from the grad program, instead of wondering, how about we let an ex grad tell you all about their experience.</p>
                    </div>
                </div>
            </div>
        </div>

        <h4>See more of our products</h4>
    </div>

 
</div>
<!-- <?php include "template-parts/service_offering.php" ?> -->


<!-- <?php include "template-parts/home-about.php" ?> -->

<!-- 
<?php
if( have_rows('testimonial') ):?>
    <div class="testimonial">
        <div class="container">
            <div class="owl-carousel owl-theme ">
                <?php
                while ( have_rows('testimonial') ) : the_row();?>
                    <div class="item">
                        <p><?php the_sub_field('name')?></p>
                        <h4><?php the_sub_field('comment')?></h4>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
<?php endif; ?> -->

       

<?php get_footer() ?>



