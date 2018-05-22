

<?php if( have_rows('benefits') ):?>
<div class="home-about">
    <div class="container">  
        <div class="home-about-box">  
            <div class="advantages"> 
                <h1>With you every step of the way</h1>
                <div class="row">
                    <?php while ( have_rows('benefits') ) : the_row();?>
                      <div class="col-md-4">
                          <div class="advantages-box">
                              <div class="circleBox">
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

