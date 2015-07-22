(function(){

	// Preloader + Video
	var preloader = document.getElementById("preloader"),
		video = document.getElementById('ch_video');

	// -------------------------------- //
	// ---- Custom Button for iPad ---- //
	// -------------------------------- //

	// check is userAgent is an iPad
	if(navigator.userAgent.match(/iPad/i) != null){

		var preIcon = document.getElementById('inner-preload-icon');
		preIcon.style.visibility = "hidden";

		var proceed = document.createElement("BUTTON");
		proceed.innerHTML = "PROCEED";
		proceed.setAttribute("id", "proceed");
		preloader.appendChild(proceed);

		var proceedBtn = document.getElementById('proceed');
		proceedBtn.ontouchstart = function(e){
			e.preventDefault();
			video.play(); 
			video.pause(); 
			initVideo(); 
			preloader.removeChild(proceedBtn);
			preIcon.style.visibility = "visible";
		}

	}
	
	// -------------------------- //
	// ---- Initialize Video ---- //
	// -------------------------- //

	vidControl.initVideoThrough();

})();