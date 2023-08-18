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

var _paq = window._paq = window._paq || [];
/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
_paq.push(["setCookieDomain", "*.affeli.us"]);
_paq.push(["setDoNotTrack", true]);
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
	var u="https://tiramisu.bouvardia.blue/";
	_paq.push(['setTrackerUrl', u+'matomo.php']);
	_paq.push(['setSiteId', '5']);
	var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
})();