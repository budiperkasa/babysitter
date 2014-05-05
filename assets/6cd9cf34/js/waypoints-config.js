	jQuery(".entrytitle").waypoint({  // entry titles
		handler: function titlePopup(){

					jQuery(this).each(function(i){

						var popupItem = jQuery(this)

						if (!popupItem.hasClass('intro-elements')) {

							setTimeout(function(){ popupItem.addClass('intro-elements') }, (i * 200));

						}

					});	

				},

		offset: '90%'

		

	});
	
		jQuery(".portfolio_blocks_wrap").waypoint({  // home portfolio 1
	
		handler: function portfolioPopup(){
					jQuery('.portfolio_blocks_wrap .item').each(function(i){
						var popupItem = jQuery(this)
						if (!popupItem.hasClass('intro-elements')) {
							setTimeout(function(){ popupItem.addClass('intro-elements') }, (i * 200));
						}
					});	
				},
		offset: '80%'
		
	});
