$(document).ready(function () {
	$('.dropdown-trigger').dropdown({
		constrainWidth: false,
		coverTrigger: false,
		closeOnClick: true,
		hover: true
	});
	$('.sidenav').sidenav();
	$('.collapsible').collapsible();
	// $('.slider').slider({
	// 	indicators: false,
	// 	height: 400
	// });
	$('.carousel.carousel-slider').carousel({
        fullWidth: false,
        indicators: false,
        dragged: false,
       
        
        // autoplay();
        // function autoplay() {
        //     $('.carousel').carousel('next');
        //     setTimeout(autoplay, 4500);
        // }
      });
	$('.tooltipped').tooltip({
		position: 'left',
		html: '<span>Preview & Download</span>'
	});
	
    $('.tabs').tabs({
		// swipeable:true
	});
	$('.modal').modal({
		endingTop: '2%'
		
	});
	$('.materialboxed').materialbox();
  
});