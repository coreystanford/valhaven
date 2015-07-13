<?php

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
    
    // javascript files for this chapter:
    $customScripts = []; // add the file name in quotations, seperated by commas

	// ---------------------------- //
    // ------ Perform Switch ------ //
    // ---------------------------- //

    switch ($action){
        
        // ------ Show Default ------ //

        case 'default':

            $poster = ; // default video background for this chapter
            $mp4 = ; // mp4 video file for this chapter
            $webm = ; // webm video file for this chapter
            $ogv = ; // mp4 video file for this chapter

            include 'ch1.php';

        break;

    }