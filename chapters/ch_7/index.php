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

    $title = "Chapter 7";
    $description = "This is a description of chapter.";
    $keywords = "Valhaven, Valhaven Island, Humber, Humber Transmedia Project, Transmedia";

    $prev = "ch_6";

    // ---------------------------- //
    // ------ Perform Switch ------ //
    // ---------------------------- //

    switch ($action){
        
        // ------ Show Default ------ //

        case 'default':

            $headScripts = array("jquery-1.11.3.min.js");

            // javascript files for this chapter:
            $customScripts = array("app.js", "video.js", "video-init.js", "video-modal-init.js"); // add the file name in quotations, seperated by commas

            $modal = "7-discussion.php"; // name of the modal window file located in ./modals/

            $poster = "valhaven.jpg"; // default video background for this chapter
            $webm = "ch_7.webm"; // webm video file for this chapter
            $mp4 = "ch_7.mp4"; // mp4 video file for this chapter
            $ogv = "ch_7.ogv"; // ogv video file for this chapter

            include 'ch_7.php';

        break;

        case 'links':

            $headScripts = array();

            // javascript files for this chapter:
            $customScripts = array("about.js"); // add the file name in quotations, seperated by commas

            include 'links.php';

        break;

    }