<div class="navContainer">
  <div class="navbar-shadow"></div>
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded greyScale">
      
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_home.png" alt="Help at Hand Logo"></a>
    <div class="navContact">
    </div>
      <?php
      wp_nav_menu([
        'menu'            => 'Primary',
        'theme_location'  => 'top',
        'container'       => 'div',
        'container_id'    => 'bs4navbar',
        'container_class' => 'collapse navbar-collapse justify-content-end',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav',
        'depth'           => 2,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()
      ]);
      ?>
    <div class="socials">
      <div class="circle">
          <i class="fa fa-facebook" aria-hidden="true"></i>
      </div>
     
    </div>
      

  </nav>

</div>
  