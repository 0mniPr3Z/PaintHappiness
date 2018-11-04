jQuery(document).ready(function(){
	
	jQuery("#layerslider_1").layerSlider({    		
		autoStart			: true,
		pauseOnHover		: false,
		firstLayer			: 1,
		animateFirstLayer	: true,
		twoWaySlideshow		: true,
		keybNav				: true,
		touchNav			: true,
		imgPreload			: true,
		navPrevNext			: true,
		navStartStop		: true,
		navButtons			: true,
		skin				: 'lightskin',
		skinsPath			: 'css/skins/',
  		globalBGColor		: 'white',
  		yourLogo			: false,
		yourLogoStyle		: 'position: absolute; left: 10px; top: 10px; z-index: 99;',
		yourLogoLink		: false,
		yourLogoTarget		: '_self',
		
		loops				: 0,
		forceLoopNum		: true,
		autoPlayVideos		: false,
		
		    		
		autoPauseSlideshow	: 'auto',
		youtubePreview		: 'maxresdefault.jpg',
		
		cbInit				: function() { },
		cbStart				: function() { },
		cbStop				: function() { },
		cbPause				: function() { },
		cbAnimStart			: function() { },
		cbAnimStop			: function() { },
		cbPrev				: function() { },
		cbNext				: function() { }
	});

});
