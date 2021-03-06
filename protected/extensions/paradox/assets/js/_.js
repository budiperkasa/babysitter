/*
 * Copyright (c) 2013 MyPassion
 * Author: MyPassion 
 * This file is made for CURRENT TEMPLATES
*/



// ----------------------------------------------------  CONTACT FORM
function submitForm(){
	"use strict";
	
	jQuery.post('plugin/sendmail.php',jQuery('#contactForm').serialize(), function(msg) {
		jQuery(".alertMessage").fadeOut(1).html(msg).fadeIn(1500);
	});
	// Hide previous response text
	jQuery(msg).remove();
	// Show response message
	contactform.prepend(msg);
}



jQuery(document).ready(function(){
	
	"use strict";
	
// -----------------------------------------------------  NOTIFICATIONS CLOSER
	jQuery('span.closer').click(function(e){
		e.preventDefault();
		jQuery(this).parent('.notifications').stop().slideToggle(500);
	});	

// -----------------------------------------------------  FLEX SLIDER
	if(jQuery().flexslider) {
		jQuery('.flexslider').flexslider({
			animation: 'fade',
			controlNav: false,
			slideshowSpeed: 4000,
			animationDuration: 300
		});	
		jQuery('.flex-next').html('<i class="fa fa-chevron-circle-right fa-3x"></i>');
		jQuery('.flex-prev').html('<i class="fa fa-chevron-circle-left fa-3x"></i>');
	}
// -----------------------------------------------------  TWITTER FEED	
	if(jQuery().tweet) {
		jQuery('.twitterfeed').tweet({
			join_text: false,
			username: "formythemes", // Change username here
			modpath: './js/twitter/', // Twitter files path
			avatar_size: false, // you can active avatar
			count: 2, // number of tweets
			loading_text: "Loading tweets...",
			seconds_ago_text: "%d seconds ago: ",
			a_minutes_ago_text: "a minute ago: ",
			minutes_ago_text: "%d minutes ago: ",
			a_hours_ago_text: "an hour ago: ",
			hours_ago_text: "%d hours ago: ",
			a_day_ago_text: "a day ago: ",
			days_ago_text: "%d days ago: ",
			view_text: "view tweet on twitter"
		});
	}

// -----------------------------------------------------  MASONRY STYLE	
	if(jQuery().isotope) {
		
		var gridwidth = (jQuery('.masonry-wrap-4columns').width() / 4);
		jQuery('.masonry-wrap-4columns').isotope({
			layoutMode: 'masonry',
			itemSelector: '.masonry',
			masonry: {
				columnWidth: gridwidth,
				gutterWidth: 10
			},
		});
		
		var gridwidth = (jQuery('.masonry-wrap-3columns').width() / 3);
		jQuery('.masonry-wrap-3columns').isotope({
			layoutMode: 'masonry',
			itemSelector: '.masonry',
			masonry: {
				columnWidth: gridwidth,
				gutterWidth: 10
			},
		});
	}

// -----------------------------------------------------  EASY PIE CHART

	jQuery(".timeline li:nth-child(2n)").addClass("rightli");
	
	

// -----------------------------------------------------  EASY PIE CHART
	
	jQuery('.chart').waypoint({	
		
		handler: function mpchart(){
					jQuery('.percentage').easyPieChart({
						barColor: '#3c4852',
						trackColor: '#eee',
						scaleColor: '#eee',
						lineCap: 'butt',
						rotate: 0,
						lineWidth: 15,
						animate: 1500,
						size:150,
						onStep: function(value) {
							this.$el.find('span').text(Math.round(value));
						}
					});	
				},
		offset: '95%'
	
	})

	
            
// -----------------------------------------------------  NICE SCROLL
	function niceScrollInit(){
		jQuery("html").niceScroll({
			preservenativescrolling: false,
			cursorwidth: '12px',
			cursorborder: 'none',
			cursorborderradius:'2px',
			cursorcolor:"#151515",
			autohidemode: false, 
			background:"#666"
		});
	}
	
	if(jQuery(window).width() > 5979){ niceScrollInit(); }

// -----------------------------------------------------  FLICKR FEED
	jQuery('#basicuse').jflickrfeed({
		limit: 6,
		qstrings: {
			id: '52617155@N08'//'92335820@N08'
		},
		itemTemplate: 
		'<li>' +
			'<a href="{{link}}" target="_blank"><img src="{{image_s}}" alt="{{title}}"  /></a>' +
		'</li>'
	});	

// -----------------------------------------------------  STICKY MENU	
	if(jQuery(window).width() > 979){jQuery(".topbar, .nav-wrap").sticky({ topSpacing: 0});}
	var fromtop = jQuery(".topbar").height();
	//jQuery(".head-slider").css({paddingTop:fromtop});
		
// -----------------------------------------------------  SEARCH POPUP
	jQuery('.search-button a').click(function(){
		jQuery('.popup-search').stop(true,true).slideToggle(300);
		return false;
	});

// -----------------------------------------------------  DEVICE MENU TOGGLE
	jQuery('.nav-toggle a').click(function(){
		jQuery('.mobile-menu').stop(true,true).slideToggle(500);
		return false;
	});
	jQuery('.mobile-menu ul li a').prepend('<i class="icon-right-dir"></i>');
	
	
	
	jQuery('ul.sf-menu').superfish({
		delay:       100,                            // one second delay on mouseout
		speed:       'fast',                          // faster animation speed
		autoArrows:  true                            // disable generation of arrow mark-up	
	});
	
	
	var logoHeight = parseInt(jQuery('.logo img').attr('height'));
	
	jQuery(window).bind('scroll',smallNav);
	
	function smallNav(){
		var $offset = $(window).scrollTop();
		var $windowWidth = $(window).width();
		var shrinkNum = 6;
		
		if($offset > 100 && $windowWidth >= 1000) {
			
			jQuery('.topbar .logo img').stop(true,true).animate({
				'height' : logoHeight*3/4
			},{queue:false, duration:250, easing: 'easeOutCubic'});
			
			jQuery('.topbar .logo').stop(true,true).animate({
				'margin-top' : '15px',
				'margin-bottom' : '15px'
			},{queue:false, duration:250, easing: 'easeOutCubic'});
			
			jQuery('.topbar #nav>ul, .topbar .search-include').stop(true,true).animate({
				'margin-top' : '10px',
				'margin-bottom' : '10px'
			},{queue:false, duration:250, easing: 'easeOutCubic'});	
			
			
			jQuery(window).unbind('scroll',smallNav);
			jQuery(window).bind('scroll',bigNav);
		}
	}
	
	function bigNav(){
		var $offset = $(window).scrollTop();
		var $windowWidth = $(window).width();
		var shrinkNum = 6;
		
		if($offset < 100 && $windowWidth >= 1000) {
			
			jQuery('.topbar .logo img').stop(true,true).animate({
				'height' : logoHeight
			},{queue:false, duration:250, easing: 'easeOutCubic'});
			
			jQuery('.topbar .logo').stop(true,true).animate({
				'margin-top' : '30px',
				'margin-bottom' : '30px'
			},{queue:false, duration:250, easing: 'easeOutCubic'});
			
			jQuery('.topbar #nav>ul, .topbar .search-include').stop(true,true).animate({
				'margin-top' : '30px',
				'margin-bottom' : '30px'
			},{queue:false, duration:250, easing: 'easeOutCubic'});
			
			
			jQuery(window).bind('scroll',smallNav);
			jQuery(window).unbind('scroll',bigNav);
		}
	}
	
// -----------------------------------------------------  CAROUSELS	
	jQuery('#carousel').carouFredSel({
		auto: {
			items: 1,
			timeoutDuration : 4000
		},
		width: '100%',
		prev : {
			button : "#car_prev",
			key : "left",
			items : 1,
			duration : 750
		},
		next : {
			button : "#car_next",
			key : "right",
			items : 1,
			duration : 750
		},
		mousewheel: false,
		swipe: {
			onMouse: false,
			onTouch: true
		} 
	});
	
	jQuery('#carousel-2').carouFredSel({
		auto: {
			items: 1,
			timeoutDuration : 4000
		},
		width: '100%',
		prev : {
			button : "#car_prev_2",
			key : "left",
			items : 1,
			duration : 750
		},
		next : {
			button : "#car_next_2",
			key : "right",
			items : 1,
			duration : 750
		},
		mousewheel: false,
		swipe: {
			onMouse: false,
			onTouch: true
		} 
	});

	
// -----------------------------------------------------  UI ELEMENTS	
	jQuery( ".tabs" ).tabs();
	
	jQuery( ".accordion" ).accordion({
		heightStyle: "content"
	});
	
	jQuery("[rel=tooltip]").tooltip();
// -----------------------------------------------------  PORTFOLIO HOVER EFFECT
	var currentWindowWidth = jQuery(window).width();
	
	jQuery('div.maskImage').css({opacity:0, top:0});
	if(currentWindowWidth >= 979){
		jQuery('.portfolio-item, .item, .image-wrap').mouseenter(function(e) {
			jQuery(this).find('.maskImage').animate({ opacity:1}, 200);
			jQuery(this).find('.maskImage a span').animate({ top:'40%'}, 200);
		}).mouseleave(function(e) {
			jQuery(this).find('.maskImage').animate({ opacity:0}, 200);
			jQuery(this).find('.maskImage a span').animate({ top:-48+"px"}, 200);
		});
	}
	
// -----------------------------------------------------  SKILLS
	jQuery('.skill-percent').css({width:'100%'});
	
	jQuery('.skills').waypoint({	
		
		handler: function diagram(){
					jQuery('.skills li').each(function(){
						var progressBar = jQuery(this),
						progressValue = progressBar.find('.skill-percent-back').attr('data-value');
						if (!progressBar.hasClass('animated')) {
							progressBar.addClass('animated');
							progressBar.find('.skill-percent').delay(200).animate({
								width: progressValue + "%"
							}, 1200);
						}
					});	
				},
		offset: '80%'
	
	})
	
// -----------------------------------------------------  PROJECT ISOTOPE
	if(jQuery().isotope) {
		// Needed variables
		var $container = jQuery("#portfolio-list");
		var $filter = jQuery("#portfolio-filter");
			
		// Run Isotope  
		$container.isotope({
			filter				: '*',
			layoutMode   		: 'masonry',
			animationOptions	: {
			duration			: 750,
			easing				: 'linear'}
		});	
		
		// Isotope Filter 
		$filter.find('a').click(function(){
		  var selector = jQuery(this).attr('data-filter');
			$container.isotope({ 
			filter				: selector,
			animationOptions	: {
			duration			: 750,
			easing				: 'linear',
			queue				: false}
		  });
		  return false;
		});	
		
		// Copy categories to item classes
		$filter.find('a').click(function() {
			$filter.find('a').removeClass('current');
			jQuery(this).addClass('current');
		});
	}

	
	
	
// ----------------------------------------------------- ANIMATIONS

	jQuery(".portfolio_blocks_wrap").waypoint({  // home portfolio 1
	
		handler: function portfolioPopup(){
					jQuery('.portfolio_blocks_wrap .item').each(function(i){
						var popupItem = jQuery(this)
						if (!popupItem.hasClass('mypassion-animation')) {
							setTimeout(function(){ popupItem.addClass('mypassion-animation') }, (i * 200));
						}
					});	
				},
		offset: '80%'
		
	});
	
	
	jQuery(".og-grid").waypoint({  // home portfolio 2
	
		handler: function portfolioPopup(){
					jQuery('.og-grid li').each(function(i){
						var popupItem = jQuery(this)
						if (!popupItem.hasClass('mypassion-animation')) {
							setTimeout(function(){ popupItem.addClass('mypassion-animation') }, (i * 200));
						}
					});	
				},
		offset: '80%'
		
	});
	
	
	jQuery(".blog_blocks_wrap").waypoint({  // home blog
	
		handler: function blogPopup(){
					jQuery('.blog_blocks_wrap .item').each(function(i){
						var popupItem = jQuery(this)
						if (!popupItem.hasClass('mypassion-animation')) {
							setTimeout(function(){ popupItem.addClass('mypassion-animation') }, (i * 200));
						}
					});	
				},
		offset: '80%'
		
	});

	
	jQuery(".service-blocks-wrap-2").waypoint({  // home parallax service
	
		handler: function servicePopup(){
					jQuery('.service-blocks-wrap-2 li').each(function(i){
						var popupItem = jQuery(this)
						if (!popupItem.hasClass('mypassion-animation')) {
							setTimeout(function(){ popupItem.addClass('mypassion-animation') }, (i * 200));
						}
					});	
				},
		offset: '80%'
		
	});
	
	
	jQuery(".pricing-table").waypoint({  // home pricing table
	
		handler: function pricingPopup(){
					jQuery('.pricing-table .pricing').each(function(i){
						var popupItem = jQuery(this)
						if (!popupItem.hasClass('mypassion-animation')) {
							setTimeout(function(){ popupItem.addClass('mypassion-animation') }, (i * 200));
						}
					});	
				},
		offset: '80%'
		
	});
	
	jQuery(".timeline li").waypoint({  // timeline
	
		handler: function timelinePopup(){
					jQuery('.timeline li').each(function(i){
						var popupItem = jQuery(this)
						if (!popupItem.hasClass('mypassion-animation')) {
							setTimeout(function(){ popupItem.addClass('mypassion-animation') }, (i * 200));
						}
					});	
				},
		offset: '80%'
		
	});
	
	
	jQuery(".entrytitle").waypoint({  // entry titles
	
		handler: function titlePopup(){
					jQuery(this).each(function(i){
						var popupItem = jQuery(this)
						if (!popupItem.hasClass('mypassion-animation')) {
							setTimeout(function(){ popupItem.addClass('mypassion-animation') }, (i * 200));
						}
					});	
				},
		offset: '90%'
		
	});
	
	jQuery(".social-list").waypoint({  // entry titles
	
		handler: function titlePopup(){
					jQuery(".social-list li").each(function(i){
						var popupItem = jQuery(this)
						if (!popupItem.hasClass('mypassion-animation')) {
							setTimeout(function(){ popupItem.addClass('mypassion-animation') }, (i * 50));
						}
					});	
				},
		offset: '90%'
		
	});
	
	jQuery(".showcase").waypoint({  // showcase
	
		handler: function titlePopup(){
					jQuery(".showcase>div.add-animation").each(function(i){
						var popupItem = jQuery(this)
						if (!popupItem.hasClass('mypassion-animation')) {
							setTimeout(function(){ popupItem.addClass('mypassion-animation') }, (i * 50));
						}
					});	
				},
		offset: '80%'
		
	});
	
	

// ----------------------------------------------------- REVOLUTION SLIDER

	if (jQuery.fn.cssOriginal!=undefined)
	  jQuery.fn.css = jQuery.fn.cssOriginal;
	  jQuery('.fullwidthbanner').revolution({
		delay:9000,
		startwidth:1170,
		startheight:500,

		onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

		thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
		thumbHeight:50,
		thumbAmount:3,

		hideThumbs:1,
		navigationType:"none",				// bullet, thumb, none
		navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

		navigationStyle:"round-old",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


		navigationHAlign:"center",				// Vertical Align top,center,bottom
		navigationVAlign:"bottom",					// Horizontal Align left,center,right
		navigationHOffset:0,
		navigationVOffset:10,

		soloArrowLeftHalign:"left",
		soloArrowLeftValign:"center",
		soloArrowLeftHOffset:20,
		soloArrowLeftVOffset:0,

		soloArrowRightHalign:"right",
		soloArrowRightValign:"center",
		soloArrowRightHOffset:20,
		soloArrowRightVOffset:0,

		touchenabled:"on",						// Enable Swipe Function : on/off


		stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
		stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

		hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
		hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
		hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


		fullWidth:"on",

		shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
	});
	  
// -----------------------------------------------------  FANCYBOX	

	Grid.init();
	if(jQuery().fancybox){
		jQuery('.fancybox').fancybox();
	}
	
	
	
	jQuery('a.closer3').css({'display' : 'none'})
	
	jQuery('.styleswitcher a.closer2').click(function(){
		jQuery('a.closer3').fadeIn(100);
		jQuery('a.closer2').fadeOut(100);
		jQuery('.styleswitcher').animate({'left' : '100px'});
		return false;
	});
	
	jQuery('.styleswitcher a.closer3').click(function(){
		jQuery('a.closer2').fadeIn(100);
		jQuery('a.closer3').fadeOut(100);
		jQuery('.styleswitcher').animate({'left' : '0'});
		return false;
	});

	if($.cookie("css")) {
		jQuery("link.switch").attr("href",$.cookie("css"));
	}
	jQuery(".styleswitcher ul li a").click(function() { 
		jQuery("link.switch").attr("href",jQuery(this).attr('rel'));
		$.cookie("css",jQuery(this).attr('rel'), {expires: 365, path: '/'});
		return false;
	});

});


// -----------------------------------------------------  GOOGLE MAP		
/*jQuery(document).ready(function(){ 
	var myLatlng = new google.maps.LatLng(-34.397, 150.644);
	var myOptions = {
	  center: myLatlng,
	  zoom: 8,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map"),  myOptions);
	var marker = new google.maps.Marker({
	  position: myLatlng,
	  map: map,
	  title:"Click Me for more info!"
	});
	
	var infowindow = new google.maps.InfoWindow({});
	
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.setContent("Write here some description"); //sets the content of your global infowindow to string "Tests: "
		infowindow.open(map,marker); //then opens the infowindow at the marker
	});
	marker.setMap(map);
});*/

