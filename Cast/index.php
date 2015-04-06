<?php

// get the config file, set the section.
require_once("../inc/config.php");
$section = CAST;

// header
include(ROOT_PATH."inc/head.php");
include(ROOT_PATH."inc/navbar.php");

// body content
include("cast.php");
include("extras.php");

// closing footer
include(ROOT_PATH."inc/footer.php");