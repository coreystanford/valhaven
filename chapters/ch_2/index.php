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
    $description = "This is a description of the chapter.";
    $keywords = "Valhaven, Valhaven Island, Humber, Humber Transmedia Project, Transmedia";

    $prev = "ch_1";
    $next = "ch_3";
    
    // javascript files for this chapter:
    $customScripts = array("app.js", "video.js", "video-init.js", "video-modal-init.js"); // add the file name in quotations, seperated by commas

    // ---------------------------- //
    // ------ Perform Switch ------ //
    // ---------------------------- //

    switch ($action){
        
        // ------ Show Default ------ //

        case 'default':

            $modal = "2-notebook_map.php"; // name of the modal window file located in ./modals/

            $poster = "valhaven.jpg"; // default video background for this chapter
            $webm = "_DSC0007_1.webm"; // webm video file for this chapter
            $mp4 = "_DSC0007_1.mp4"; // mp4 video file for this chapter
            $ogv = "_DSC0007_1.ogv"; // ogv video file for this chapter

            include 'ch_2.php';

        break;

        case 'hospital':

            $modal = "2_1-hospital.php"; // name of the modal window file located in ./modals/

            $poster = "valhaven.jpg"; // default video background for this chapter
            $webm = "_DSC0007_1.webm"; // webm video file for this chapter
            $mp4 = "_DSC0007_1.mp4"; // mp4 video file for this chapter
            $ogv = "_DSC0007_1.ogv"; // ogv video file for this chapter

            include 'ch_2.php';

        break;

        case 'press':

            $modal = "2_2-press.php"; // name of the modal window file located in ./modals/

            $poster = "valhaven.jpg"; // default video background for this chapter
            $webm = "_DSC0007_1.webm"; // webm video file for this chapter
            $mp4 = "_DSC0007_1.mp4"; // mp4 video file for this chapter
            $ogv = "_DSC0007_1.ogv"; // ogv video file for this chapter

            include 'ch_2.php';

        break;

        case 'cdc':

            $modal = "2_3-cdc.php"; // name of the modal window file located in ./modals/

            $poster = "valhaven.jpg"; // default video background for this chapter
            $webm = "_DSC0007_1.webm"; // webm video file for this chapter
            $mp4 = "_DSC0007_1.mp4"; // mp4 video file for this chapter
            $ogv = "_DSC0007_1.ogv"; // ogv video file for this chapter

            include 'ch_2.php';

        break;

        case 'return':

            include HEADER;
            include FOOTER;

        break;

    }