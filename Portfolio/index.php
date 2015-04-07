<?php

// get the config file, set the section.
require_once("../inc/config.php");
$section = PORTFOLIO;

// header
include(ROOT_PATH."inc/head.php");
include(ROOT_PATH."inc/navbar.php");

// body content
include("jumbotron.php");
include("scripts.php");
include("essays.php");
include("video.php");

// closing footer
include(ROOT_PATH."inc/footer.php");