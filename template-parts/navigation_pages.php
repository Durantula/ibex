<div class="navContainer nav_page">
  <div class="navbar-shadow"></div>
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      
      <button id="nav-icon1" class="navbar-toggler navbar-toggler-right navigation-pages-burger" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_home_all_white.png" alt="Help at Hand Logo"></a>
    <div class="navContact mr-auto">
    </div>

    <div class="navBox1">

      <div class="navbox2">
        <?php
          wp_nav_menu([
            'menu'            => 'footer',
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
        <div class="socials socials-pages">
            <a target="_blank" href="<?php echo get_option('linkedin_page_url'); ?>">
              <div class="circle">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
              </div>
            </a>
            <a target="_blank" href="<?php echo get_option('facebook_page_url'); ?>">
              <div class="circle">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
              </div>
            </a>
        </div>
      </div>  
    </div>
  </nav>
</div>
  