if(jQuery(window).width() > 979){ jQuery().UItoTop({ easingType: 'easeOutQuart' }); }

	jQuery("a[href='#top']").click(function() {
		jQuery("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});

