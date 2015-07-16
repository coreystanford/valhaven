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

    $title = "Chapter 2";
    $description = "This is a description of chapter two.";
    $keywords = "Valhaven, Valhaven Island, Humber, Humber Transmedia Project, Transmedia";

    $modal = "modal_2.php"; // name of the modal window file located in ./modals/

    $next = "ch_3";
    $prev = "ch_1";
    
    // javascript files for this chapter:
    $customScripts = array("video.js", "modal-init.js", "modal.js"); // add the file name in quotations, seperated by commas

    // ---------------------------- //
    // ------ Perform Switch ------ //
    // ---------------------------- //

    switch ($action){
        
        // ------ Show Default ------ //

        case 'default':

            $poster = "valhaven.jpg"; // default video background for this chapter
            $webm = "_DSC0007_1.webm"; // webm video file for this chapter
            $mp4 = "_DSC0007_1.mp4"; // mp4 video file for this chapter
            $ogv = "_DSC0007_1.ogv"; // ogv video file for this chapter

            include 'ch_2.php';

        break;

    }