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

    $title = "Chapter 4";
    $description = "This is a description of the chapter.";
    $keywords = "Valhaven, Valhaven Island, Humber, Humber Transmedia Project, Transmedia";

    $modal = "4-library.php"; // name of the modal window file located in ./modals/

    $prev = "ch_3";
    $next = "ch_5";
    
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

            include 'ch_4.php';

        break;

    }