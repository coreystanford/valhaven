(function(){

	video.addEventListener('ended',function(){

		video.removeEventListener('mousemove', vidControl.handleMouseMove);
		// video.removeEventListener('touchstart', handleMouseMove);

		map.removeEventListener('mouseenter',
			sliders.showMap, false);
		map.removeEventListener('mouseleave',
			sliders.hideMap, false);
		notebook.removeEventListener('mouseenter',
			sliders.showNotebook, false);
		notebook.removeEventListener('mouseleave',
			sliders.hideNotebook, false);

	});

})();