$(document).ready(function(){

// aos aimate
  AOS.init();

var skills = {
  ht: 90,
  cs: 90,
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
// 		// skills end
		

		// megnifiq popup
		$('.works-popup').magnificPopup({
		 type: 'image',
		 gallery:{
		    enabled:true
 		 }
	});
		
		// megnifiq
		var mixer = mixitup('.contain-megni',{
	  	animation: {
	        applyPerspective: true,
	        queue: true,
	        effects: 'fade translateZ(-100px)'
	    }
	  });



		$('.circle-counter h2').counterUp({
	       	delay: 10,
	  	   time: 2000
       });



		$(window).scroll(function () {

			if (this.scrollY > 0) {
			$('.header-area-section').addClass("sticky");
			} else {
			$('.header-area-section').removeClass("sticky");
			}
			
	});

		// mobile-icon
		$('.header-logo a i').click(function(){
			$('.menu-area ul').slideToggle(1000);

			return false;
		});

		// scrollTop
		$('.menu-area ul li a').click(function(){
			$('html,body').animate({
				scrollTop:$($(this).attr('href')).offset().top
			},1000);
			return false;
		})


		$('.owl-carousel').owlCarousel({
			items:1,
		    loop:true,
		    dots:false,
		    nav:true,
		    navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>']
		})





var string = "Javascript Typing Animation"; /* type your text here */
var array = string.split("");
var timer;

function frameLooper () {
	if (array.length > 0) {
		document.getElementById("text").innerHTML += array.shift();
	} else {
		clearTimeout(timer);
			}
	loopTimer = setTimeout('frameLooper()',70); /* change 70 for speed */

}
frameLooper();

});