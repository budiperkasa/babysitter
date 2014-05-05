
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

	
