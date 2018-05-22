<?php
/**
 * The main template file

* Template Name: Default Template
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Duran
 * @subpackage Allroad
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<body>

<?php include "template-parts/navigation_pages.php" ?>


<div class="page-banner">
    <h1><?php the_title(); ?></h1>
</div>


<?php include "template-parts/service_offering.php" ?>


<div class="services-main-box">
    <div class="blog-post services-container-box">
        <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="heading">
                    <p class="date">Posted: <?php echo human_time_diff( get_post_time('U')); ?></p>
                </div>
                <div class="content">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-2"></div></div>
        </div>
    </div>
</div>





<?php get_footer(); ?>






        