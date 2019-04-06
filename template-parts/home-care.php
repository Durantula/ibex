<?php if( have_rows('home_care') ):?>
<div class="home-about home-care">
    <div class="container">  
        <div class="home-about-box">  
            <div class="advantages"> 
                <div class="home-care-box">
                    <img class="home-care-logo" src="<?php the_field('home_care_logo')?>" alt="">
                    <h1 class="home-care-heading"><strong>Complimentary</strong> Home Care Advisory Service</h1>
                    <h4 class="home-care-subheading">Finding A Reputable Home Care Provider Who Has Your Best Interests In Mind Can Be Overwhelming</h4>
                
                    <li class="home-care-benefit-list">Don't get ripped off</li>
                    <li class="home-care-benefit-list">Make sure you are choosing an organisation that staff reputable service providers</li>
                    <li class="home-care-benefit-list">Let us guide you every step of the way to obtain the best outcome for your home care</li>
                </div>
               
                <div class="row">
                    <?php while ( have_rows('home_care') ) : the_row();?>
                      <div class="col-md-4">
                          <div class="advantages-box">
                              <div class="circleBox home-care-circle">
                                  <img src="<?php the_sub_field('icon')?>" alt="" class="icon">
                              </div>
                              <h3><?php the_sub_field('heading')?></h3>
                              <p><?php the_sub_field('content')?></p>
                          </div>
                      </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

