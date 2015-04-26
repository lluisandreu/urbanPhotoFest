// JavaScript Document
$(document).ready(function(){

		$('#main').fadeIn('slow');
		$('#main-home').fadeIn('slow');

		$('.owl-gallery').owlCarousel({
			items: 1,
		    stagePadding: 100,
		    loop:true,
		    margin:10,
		    dots: true,
		    //dotsEach: true,
		    nav:true,
		})

});

activeMenu();

function activeMenu(){
    var url = window.location.pathname.split('/');
    var component = (url[url.length - 1]);
    $("a[href*='" + component +"']").parent('li').addClass('active');
}