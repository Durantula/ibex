<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<!-- #content -->

<footer>

<div class="footer">
    <img src="<?php echo get_template_directory_uri();?>/img/logo_new.png" alt="">
    
	<div class="footerNavigation">
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
	</div>

	<p>&copy; Help@Hand Aged Care Placements | ABN : 46 866 701 058</p>

	<div class="trust-box">
		<img src="<?php echo get_template_directory_uri();?>/img/aasp.png" alt="aasp qualified">
	</div>
</div>

</footer>





<!-- Custom javascript -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/app.js"></script>


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.simple-text-rotator.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/app.js" defer></script>


<script>

	$("#contactModal").on('click', function(e){
		e.preventDefault();

		var radioVal = $("input:radio[name=advice]:checked").val();
		console.log(radioVal);
		if(radioVal != null){
			$('#contact1').modal('hide');
			$('#contact2').modal('show');
		}else{
			alert("not selected");
		}
		
	});


	$(".partnerRadio").on('click', function(e){
		var radioStatus = $("input:radio[name=partner]:checked").val().toLowerCase();
		console.log(radioStatus);
	

		if(radioStatus == "partner"){
			$(".meeting2-single").fadeOut();
			$(".meeting2-partner").fadeIn();
		}else if(radioStatus == "single"){
			$(".meeting2-partner").fadeOut();
			$(".meeting2-single").fadeIn();
		}

	});


    $(".input__field").on("click", function(){
       $(this).parent().addClass("input--filled");
    });

    $(".input__field").on("focusout", function(){
        if($(this).val() == ""){
            $(this).parent().removeClass("input--filled");
        }
    });


    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        // nav:true,
        responsive:{
            0:{
                items:1
            },
        }
    })

	$("#blog-return").on("click",function(){
		window.history.back();
	});

	$('.dropdown-toggle').click(function() { var location = $(this).attr('href'); window.location.href = location; return false; });

</script>

<script>
// self executing function here
(function() {
   // your page initialization code here
   // the DOM will be available here
	$(".mainHeadingFade").animate({
		opacity: 1,
		"margin-top" : "0px"
	}, 1000);

	$(".bannerHeading").animate({
		opacity: 1,
		"margin-top" : "0px"
	}, 1000);
})();
</script>




<?php wp_footer(); ?>
</body>
</html>
