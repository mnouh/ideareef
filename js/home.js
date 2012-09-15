function toggle1(){
  	var signin_menu = document.getElementById('signin_menu')
  	if (signin_menu.style.display == 'none') {
  		signin_menu.style.display = 'block'
  	} else {
  		signin_menu.style.display = 'none'
  	}
  }
  
$(document).ready(function() {
		$("div#myController").tabs("#mySlides > div", { 

 
                


        // enable "cross-fading" effect 

        effect: 'fade', 

        fadeOutSpeed: "slow", 

 

        // start from the beginning after the last tab 

        rotate: true 

 

    // use the slideshow plugin. It accepts its own configuration 

    }).slideshow({autoplay:true});
ddtabmenu.definemenu("ddtabs1", 0);

	});