<?php

    require '../../config.php';

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

    // ----------------------------- //
    // ------ Chapter Globals ------ //
    // ----------------------------- //

    $title = "Chapter 1";
    $description = "This is a description of chapter one.";
    $keywords = "Valhaven, Valhaven Island, Humber, Humber Transmedia Project, Transmedia";

    $modal = "1-office.php"; // name of the modal window file located in ./modals/

    $next = "ch_2";
    
    // javascript files for this chapter:
    $customScripts = array("app.js", "video.js", "video-init.js", "video-modal-init.js"); // add the file name in quotations, seperated by commas

    // ---------------------------- //
    // ------ Perform Switch ------ //
    // ---------------------------- //

    switch ($action){
        
        // ------ Show Default ------ //

        case 'default':

            $poster = "valhaven.jpg"; // default video background for this chapter
            $webm = "sample.webm"; // webm video file for this chapter
            $mp4 = "sample.mp4"; // mp4 video file for this chapter
            $ogv = "sample.ogv"; // ogv video file for this chapter

            include 'ch_1.php';

        break;

        case 'hospital':

            $modal = "1_1-hospital.php"; // name of the modal window file located in ./modals/

            $poster = "valhaven.jpg"; // default video background for this chapter
            $webm = "ch_1-1.webm"; // webm video file for this chapter
            $mp4 = "ch_1-1.mp4"; // mp4 video file for this chapter
            $ogv = "ch_1-1.ogv"; // ogv video file for this chapter

            $prev = "ch_1";

            include 'ch_1.php';

        break;

        case 'press':

            $modal = "1_2-press.php"; // name of the modal window file located in ./modals/

            $poster = "valhaven.jpg"; // default video background for this chapter
            $webm = "ch_1-2.webm"; // webm video file for this chapter
            $mp4 = "ch_1-2.mp4"; // mp4 video file for this chapter
            $ogv = "ch_1-2.ogv"; // ogv video file for this chapter

            $prev = "ch_1";

            include 'ch_1.php';

        break;

        case 'cdc':

            $modal = "1_3-cdc.php"; // name of the modal window file located in ./modals/

            $poster = "valhaven.jpg"; // default video background for this chapter
            $webm = "sample.webm"; // webm video file for this chapter
            $mp4 = "sample.mp4"; // mp4 video file for this chapter
            $ogv = "sample.ogv"; // ogv video file for this chapter

            $prev = "ch_1";

            include 'ch_1.php';

        break;

        case 'flashback':

            $modal = "1_4-flashback.php"; // name of the modal window file located in ./modals/

            $poster = "valhaven.jpg"; // default video background for this chapter
            $webm = "sample.webm"; // webm video file for this chapter
            $mp4 = "sample.mp4"; // mp4 video file for this chapter
            $ogv = "sample.ogv"; // ogv video file for this chapter

            $prev = "ch_1";

            include 'ch_1.php';

        break;

        case 'return':

            include HEADER;
            include FOOTER;

        break;

    }