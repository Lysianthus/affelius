smoothScroll.init({
	"easing": "easeInOutQuad"
});

$('.showcase-menu__item__heading').click(function(){
	$(this).parent().children('.showcase-menu__item__list').slideToggle("slow");
});

$('#menu-toggler--hamburger').click(function() {
	$('#wrapper').toggleClass('push');
	$(this).toggleClass('is-active');
	$('body').toggleClass('no-overflow');
});

$('#menu-toggler--text').click(function() {
	$('#wrapper').toggleClass('push');
	$('#menu-toggler--hamburger').removeClass('is-active');
	$('body').toggleClass('no-overflow');
});

$('#agree').click(function(){
	$('.showcase__blurb').slideToggle("slow");
});

$(document).scroll(function(){
	if (document.body.scrollTop > 300){
		$("#scrop").fadeIn();
	} else {
		$("#scrop").hide();
	}
});

var sc_project = 8964756;
var sc_invisible = 1;
var sc_security = "f7c74947";
var scJsHost = (("https:" == document.location.protocol) ? "https://secure." : "http://www.");
document.write("<sc" + "ript type='text/javascript' src='" + scJsHost + "statcounter.com/counter/counter.js'></" + "script>");

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-67527433-4', 'auto');
ga('send', 'pageview');