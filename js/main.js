// Tool Tip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Header transition
function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 100,
            main = document.getElementById("header");
            animated = document.getElementById("animated-header");
            logo = document.getElementById("menu")
        if (distanceY > shrinkOn) {
        	classie.add(main,"smaller");
            classie.add(animated,"smaller");
            classie.add(logo,"smaller");
        } else {
            if (classie.has(main,"smaller") || classie.has(animated,"smaller") || classie.has(logo,"smaller")) {
            	classie.remove(main,"smaller");
                classie.remove(animated,"smaller");
                classie.remove(logo,"smaller");
            }
        }
    });
}
window.onload = init();

// Scroll to top
jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.to-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('is-visible') : $back_to_top.removeClass('is-visible');
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});

// Lazy Load

$(function() {
    $("img.lazy").lazyload({
    effect : "fadeIn"
});
});

// Hover Box

$(function() {

	$(' .grid li .img-container').each( function() { $(this).hoverdir(); } );

});

// User Panel Slider

(function panel() {

	var bodyEl = document.body,
		content = document.getElementById( 'main-page-wrapper' ),
		openbtn = document.getElementById( 'open-button' ),
		closebtn = document.getElementById( 'close-button' ),
		isOpen = false;

	function init() {
		initEvents();
	}
	function initEvents() {
		openbtn.addEventListener( 'click', toggleMenu );
		if( closebtn ) {
			closebtn.addEventListener( 'click', toggleMenu );
		}

		// close the menu element if the target it´s not the menu element or one of its descendants..
		content.addEventListener( 'click', function(ev) {
			var target = ev.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		} );
	}
	function toggleMenu() {
		if( isOpen ) {
			classie.remove( bodyEl, 'show-menu' );
		}
		else {
			classie.add( bodyEl, 'show-menu' );
		}
		isOpen = !isOpen;
	}
	init();
})();

// Responsive User Panel

(function panelResp() {

	var bodyEl = document.body,
		content = document.getElementById( 'main-page-wrapper' ),
		openbtn = document.getElementById( 'open-button-resp' ),
		closebtn = document.getElementById( 'close-button-resp' ),
		isOpen = false;

	function init() {
		initEvents();
	}
	function initEvents() {
		openbtn.addEventListener( 'click', toggleMenu );
		if( closebtn ) {
			closebtn.addEventListener( 'click', toggleMenu );
		}

		// close the menu element if the target it´s not the menu element or one of its descendants..
		content.addEventListener( 'click', function(ev) {
			var target = ev.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		} );
	}
	function toggleMenu() {
		if( isOpen ) {
			classie.remove( bodyEl, 'show-menu' );
		}
		else {
			classie.add( bodyEl, 'show-menu' );
		}
		isOpen = !isOpen;
	}
	init();
})();

// Nano Scroller 

$(".nano").nanoScroller({
	preventPageScrolling: true
	});

// Email Share Modal

$('#email-share').on('show.bs.modal', function () {
    $('#myInput').focus()
});

// Progress bar load

$(document).ready(function(){
  $('.bar').animate({width:'80%'}, 1500);
});

// For Fun!

var consoleMessage = " Hello person. Why are you sneaking a peek at my console? Is there an error below?! \n If there is please let me know so I can fix it. I want this area to look pretty and clean! \n Errors are not pretty and I doubt they're very clean. Filthy errors, stinking up the place with their insufferable red alert attitudes. \n I'm rambeling... sorry! Please go back to your web browsing!";
console.log(consoleMessage);

