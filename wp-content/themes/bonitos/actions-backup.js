$(document).ready(function(){

 $(function() {
	$('#da-slider').cslider({
		autoplay:true,
		interval:10000
	});
});
$(function() {
	var sticky_navigation_offset_top = $('#branding').offset().top;
	
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop(); // our current vertical position from the top
		
		if (scroll_top > sticky_navigation_offset_top) { 
			$('#branding').css({ 'position': 'fixed', 'top':0, 'left':0, 'border-top': '3px solid #75CBC7' });
			$('#slide2').css({'padding-top': '103px'});
		} else {
			$('#branding').css({ 'position': 'relative', 'border-top':0 }); 
			$('#slide2').css({'padding-top': '0px'});
		}   
	};
	
	sticky_navigation();
	
	$(window).scroll(function() {
		 sticky_navigation();
	});

	$('a[href="#"]').click(function(event){ 
		event.preventDefault(); 
	});
	
});


$('.texture-with-border article:nth-child(3n+1)').addClass('quote-middle');

$('#home').click(function(){
	$('html, body').animate({
		scrollTop:0}, 'slow');
		return false;
});
$('.home-nav').click(function(){
	$('html, body').animate({
		scrollTop:0}, '2000');
		return false;
});
$('.home-nav img').click(function(){
	$('html, body').animate({
		scrollTop:0}, '2000');
		return false;
});
$('.da-link').click(function(){
	$(this).parent('.da-slide').find('.whats-in-it').fadeIn();
});
$('.whats-in-it').mouseleave(function(){
	$(this).fadeOut();
});

$(".our-mission").click(function() {
     $('html, body').animate({
         scrollTop: $("#slide2").offset().top -40
     }, 2000);
     
     $('html, body').animate({
     	 scrollTop: $("#slide2").offset().top + 50
     }, 1000);
});
$(".where-to-buy").click(function() {
     $('html, body').animate({
         scrollTop: $("#slide3").offset().top - 50
     }, 2000);
});
/*$("#contact").click(function() {
     $('html, body').animate({
         scrollTop: $(".contact-hit").offset().top - 50 
     }, 2000);
}); */
$(".our-founder").click(function() {
     $('html, body').animate({
         scrollTop: $("#slide4").offset().top - 50
     }, 2000);
});
$(".what-theyre-saying").click(function() {
     $('html, body').animate({
         scrollTop: $("#slide5").offset().top - 150
     }, 2000);
});
$(".contact-us").click(function() {
     $('html, body').animate({
         scrollTop: $("#slide6").offset().top - 50
     }, 2000);

});


//footer links love
$('.navigation1 li, .navigation2 li').hover(function(){
		$(this).stop(true, true).animate({
			color: "#C9F7F3"
		}, 400 );
	},function(){
		$(this).stop(true, true).animate({
			color: "#fff"
		}, 200 );
});

$('a').not('.da-link').hover(function(){
		$(this).stop(true, true).animate({
			color: "#75CBC7"
		}, 400 );
	},function(){
		$(this).stop(true, true).animate({
			color: "#a8bc58"
		}, 200 );
});






$.fn.ToggleInputValue = function(){
    return $(this).each(function(){
        var Input = $(this);
        var default_value = Input.val();

        Input.focus(function() {
           if(Input.val() == default_value) Input.val("");
        }).blur(function(){
            if(Input.val().length == 0) Input.val(default_value);
        });
    });
}

$('input').ToggleInputValue();



}); //end of doc ready