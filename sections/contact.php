 <!-- Contact Sass Element: Contact -->

        <div class="contact">
            <h1 class="contact-heading">Contact</h1>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 ">
                       
                       
                        <div class="contact-form">
                            <p>Enquire Now</p>
                            <?php $shortcode = do_shortcode( '[contact-form-7 id="171" title="Contact Form"]' ); ?>
                            <?php echo $shortcode ?>
                        </div>
                        
                        
                        
            



                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="contact-details">

                            <div class="contact-information">
                                <p class="contact-information-heading">Head Office</p>
                                <p class="contact-information-subheading"><?php echo get_option('office_address'); ?></p>
                                <p class="contact-information-subheading"><?php echo get_option('office_suburb') . ', ' .  get_option('office_state') . ' ' . get_option('office_postcode');?></p>
                            </div>
                            <div class="contact-information">
                                <p class="contact-information-subheading"><?php echo get_option('office_email'); ?></p>
                                <p class="contact-information-subheading"><?php echo get_option('phone_number'); ?></p>
                            </div>

                            <hr>

                            <div class="contact-information">
                                <p class="contact-information-heading">Employment</p>
                                <p class="contact-information-subheading"><?php echo get_option('employ_info');?></p>
                            </div>
                    
                            <hr>

                            <div class="contact-number auto-margin-bottom">
                                <p class="contact-number-heading">Get a Quote</p>
                                <p class="contact-number-heading mainYellow"><?php echo get_option('phone_number'); ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


