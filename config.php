<?php

// Local
$root = $_SERVER['DOCUMENT_ROOT'] . '/valhaven/';
$root_href = "//localhost/valhaven/";

// Server
// $root = $_SERVER['DOCUMENT_ROOT'] . '\txm2015\valhaven';
// $root_href = "http://seanwaynedoyle.com/txm2015/valhaven/";

define('ROOT_PATH', $root);
define('ROOT_HREF', $root_href);

define('HEADER', $root . DIRECTORY_SEPARATOR. 'views' . DIRECTORY_SEPARATOR . 'header.php');
define('FOOTER', $root . DIRECTORY_SEPARATOR. 'views' . DIRECTORY_SEPARATOR . 'footer.php');

define('CH_PATH', $root_href . 'chapters/');

define('VIDEO_PATH', $root_href . 'videos/' );
define('IMAGE_PATH', $root_href . 'images/');
define('CSS_PATH', $root_href . 'css/');
define('JS_PATH', $root_href . 'js/');