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

    $keywords = "Valhaven, Valhaven Island, Humber, Humber Transmedia Project, Transmedia";

    $prev = "ch_1";
    $next = "ch_3";

    // ---------------------------- //
    // ------ Perform Switch ------ //
    // ---------------------------- //

    switch ($action){
        
        // ------ Show Default ------ //

        case 'default':

            $title = "Gardiner's Apartment";
            $description = "This is a description of the chapter.";

            $headScripts = array("jquery-1.11.3.min.js", "three.min.js", "screenfull.js");

            // javascript files for this chapter:
            $customScripts = array("app.js", "video.js", "video-init.js", "video-modal-init.js"); // add the file name in quotations, seperated by commas

            $modal = "2-apartment.php"; // name of the modal window file located in ./modals/

            $poster = "valhaven.jpg"; // default video background for this chapter
            $webm = "ch_2.webm"; // webm video file for this chapter
            $mp4 = "ch_2.mp4"; // mp4 video file for this chapter
            $ogv = "ch_2.ogv"; // ogv video file for this chapter

            include 'ch_2.php';

        break;

         case 'room':

            $title = "Gardiner's Room";
            $description = "This is a description of the chapter.";

            $headScripts = array("jquery-1.11.3.min.js", "screenfull.js");

            // javascript files for this chapter:
            $customScripts = array("app.js", "video.js", "2-room.js"); // add the file name in quotations, seperated by commas

            include "room.php";

        break;

    }