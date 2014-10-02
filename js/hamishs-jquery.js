// JavaScript Document
$(document).ready(function(){

		$('#main').fadeIn('slow');
		$('#main-home').fadeIn('slow');

});

activeMenu();

function activeMenu(){
    var url = window.location.pathname.split('/');
    var component = (url[url.length - 1]);
    $("a[href*='" + component +"']").parent('li').addClass('active');
}