$(document).ready(function(){

	// sticky header area
		$(window).on('scroll',function(){
			if($(this).scrollTop() > 20){
				$('.header-area-section').addClass("sticky");
			}else{
				$('.header-area-section').removeClass("sticky");
			}
		});

	// owlcarousel
	$('.banner-carousel').owlCarousel({
		items:1,
		// loop:true,
		// autoplay:true,
		// autoplayTimeout:3000
	});
// owlcarousel banner2
	$('.banner2-area').owlCarousel({
		items:1,
		nav:true,
		autoplay:true,
		autoplayTimeout:3000,
		loop:true,
		navText:['<i class="fas fa-angle-double-left"></i>','<i class="fas fa-angle-double-right"></i>']
	});


	// owlcarousel customer
	$('.customer-img-area').owlCarousel({
		items:4,
		loop:true,
		autoplay:true,
		autoplayTimeout:3000,
		nav:true,
		navText:['<i class="fas fa-angle-double-left"></i>','<i class="fas fa-angle-double-right"></i>'],
		responsiveClass:true,
		responsive:{
			320:{
				items:1
			},
			576:{
				items:2
			},
			992:{
				items:4
			}
		}
	});



	// owlcarousel twitter
	$('.tiwtter-area').owlCarousel({
		items:1,
		loop:true,
		autoplay:true,
		autoplayTimeout:3000,
		dots:true
	});


	// mixitup
	var mixer = mixitup('.portfolio-all');



	// magnificpopup
	$('.portfolio-popup').magnificPopup({
	  type: 'image',
		  gallery:{
		    enabled:true
		  }

	});


// skills

var skills = {
  ht: 90,
  cs: 80,
  js: 60,
  rc: 50,
  jq: 60
};

$.each(skills, function(key, value) {
  var skillbar = $("." + key);

  skillbar.animate(
    {
      width: value + "%"
    },
    3000,
    function() {
      $(".speech-bubble").fadeIn();
    }
  );
}); 



// responsive start

$('.menu-bars a i').click(function(){
	$('.menu-area ul').slideToggle(1000);
});




})


