$(document).ready(function () {
	$('.dropdown-trigger').dropdown({
		constrainWidth: false,
		coverTrigger: false,
		closeOnClick: true
	});
	$('.sidenav').sidenav();
	$('.collapsible').collapsible();
	$('.slider').slider({
		indicators: false
	});
	$('.tooltipped').tooltip({
		position: 'left',
		html: '<span>Preview & Download</span>'
	});
});