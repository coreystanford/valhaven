<?php

    // phpinfo();
    // die();

    require './config.php';

    // -------------------------------------- //
    // ------ Determine Current Action ------ //
    // -------------------------------------- //

    // ------ POST ------ //

    if (isset($_POST['action'])) {
	    $action = $_POST['action'];
	} 

	// ------ GET ------ //

	else if (isset($_GET['action'])) {
	    $action = $_GET['action'];
	} 

	// ------ DEFAULT ------ //

	else {
	    $action = 'default';
	}

    // -------------------------- //
    // ------ Home Globals ------ //
    // -------------------------- //

    $title = "Welcome to Valhaven";
    $description = "This is a description of the welcome page";
    $keywords = "Valhaven, Valhaven Island, Humber, Humber Transmedia Project, Transmedia";

    $modal = "0-tablet.php"; // name of the modal window file located in ./modals/

    $next = "ch_1";

    $headScripts = array("jquery-1.11.3.min.js", "screenfull.js");

    // javascript files for just the homepage:
    $customScripts = array("app.js", "video.js", "home-video-init.js", "video-modal-init.js"); // add the file name in quotations, seperated by commas

	// ---------------------------- //
    // ------ Perform Switch ------ //
    // ---------------------------- //

    switch ($action){
        
        // ------ Show Default ------ //

        case 'default':

            $poster = "valhaven.jpg"; // default video background for this chapter
            $webm = "ch_0.webm"; // webm video file for this chapter
            $mp4 = "ch_0.mp4"; // mp4 video file for this chapter
            $ogv = "ch_0.ogv"; // ogv video file for this chapter

            include 'home.php';

        break;

    }