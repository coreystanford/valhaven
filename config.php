<?php

$root = $_SERVER['DOCUMENT_ROOT'] . '/valhaven/';
$root_href = "//localhost/valhaven/";

define('ROOT_PATH', $root);
define('ROOT_HREF', $root_href);

define('HEADER', $root . 'views/header.php');
define('FOOTER', $root . 'views/footer.php');

define('CH_PATH', $root_href . 'chapters/');

define('VIDEO_PATH', $root_href . 'videos/' );
define('IMAGE_PATH', $root_href . 'images/');
define('CSS_PATH', $root_href . 'css/');
define('JS_PATH', $root_href . 'js/');