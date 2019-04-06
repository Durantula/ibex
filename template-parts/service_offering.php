<?php $args = array( 'post_type' => 'service');
$loop = new WP_Query( $args );
$counter = 1;
if($loop->have_posts()):?>
    <div class="container-fluid service-offering">
        <div class="row">
          
            <?php while ( $loop->have_posts() ) : $loop->the_post();
                
                $postID = $post->ID;?>

                <div class="col-md-2 col-xs-4">
                    <div class="about-expertise-item">
                        <img src="<?php echo get_field('icon',$postID)?>" alt="Urgent Respite">
                        <p><?php echo get_field('service_short_name',$postID)?></p>
                    </div>
                </div>
                <?php $counter++ ?>
            <?php endwhile;?>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>