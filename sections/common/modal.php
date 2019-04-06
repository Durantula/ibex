
<!-- Modal -->
<div class="modal fade" id="bookAcademy" tabindex="-1" role="dialog" aria-labelledby="#bookAcademyTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button class="close-button" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="booking-headingbox">
                <div class="booking-headingbox-heading">
                    <img class="services-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/academy.png" alt="">
                    <h1>allroad academy</h1>
                </div>
            </div>

             
                <div class="booking-form">

                    <?php $shortcode = do_shortcode( '[contact-form-7 id="175" title="Book Now form"]' ); 
                        echo $shortcode;
                    ?>

                </div>
        </div>
    </div>
</div>



