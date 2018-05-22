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

<?php include "template-parts/service_offering.php" ?>


<?php include "template-parts/home-about.php" ?>


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
<?php endif; ?>

       
<?php if( have_rows('featured') ):?>
    <div class="qualifications">
        <div class="heading">
            <div class="line"></div>
            <p>As featured in</p>
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="qualifications-box">
            <?php
            while ( have_rows('featured') ) : the_row();?>
                <img src="<?php the_sub_field('agency_image')?>" alt="">
            <?php endwhile;?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer() ?>



