<?php

// get the config file, set the section.
require_once("../inc/config.php");
$section = CLASSES;

// header
include(ROOT_PATH."inc/head.php");
include(ROOT_PATH."inc/navbar.php");

// body content
include("carousel.php");
include("marketing.php"); // open of container, sell point for classes.
// the above and below really have to be updated togather, due to the links between them.
include("featurettes.php");

// closing footer
include(ROOT_PATH."inc/footer.php");