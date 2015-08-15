<?php

    require '../config.php';

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

    $title = "About";
    $description = "Credits and information about this Humber Transmedia project.";
    $keywords = "About, About Us, Valhaven, Valhaven Island, Humber, Humber Transmedia Project, Transmedia";
    
    $headScripts = array("jquery-1.11.3.min.js");
    
    // javascript files for this chapter:
    $customScripts = array('app.js', 'about.js'); // add the file name in quotations, seperated by commas

	// ---------------------------- //
    // ------ Perform Switch ------ //
    // ---------------------------- //

    switch ($action){
        
        // ------ Show Default ------ //

        case 'default':

            include 'about.php';

        break;

    }