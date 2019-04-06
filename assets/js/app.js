
(function($) {

        $(".rotate").textrotator({
        animation: "dissolve", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
        separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
        speed: 2000 // How many milliseconds until the next word show.
        });

        /**
     * When the user clicks the navbar toggler
     *
     * @param e {Event} The click event
     */
    var onNavbarClick = function(e) {
		console.log("triggered");
        e.preventDefault();
        e.stopPropagation();
        $(".navbar-collapse").toggle();
    };

    $(".navbar-toggler").on("click", onNavbarClick);
    

    $('#nav-icon1').click(function(){
		$(this).toggleClass('open');
    });
    


    /**
     * Owl Carousel - HOME PAGE
     */
	$('.owl-carousel').owlCarousel({
        loop:true,
        center: true,
        margin:10,
        // nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

    /**
     * Owl Carousel - Differentiating Points
     */
	$('.owl-different').owlCarousel({
        loop:true,
        center: true,
        margin:10,
        autoPlay:true,
        autoplayTimeout:100,
        // nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    // $(".home-blog-box").mouseover(function(){
    //     console.log("working");
    //     $(".home-blog-box").animate({marginTop: '-=15px'});
       
    // }); 

    $("#seek-answer").on("click", function(){
        $("#seek-answer").find(".faq-answer").toggle();
        $("#seek-answer").find(".fa-plus").toggleClass('rotated');
    });



})(jQuery)