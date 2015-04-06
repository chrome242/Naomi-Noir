<?php

// get the config file, set the section.
require_once("inc/config.php");
$section = HOME;

// header
include(ROOT_PATH."inc/head.php");
include(ROOT_PATH."inc/navbar.php");

// hero image
include(ROOT_PATH."Home/logo.php");

// body content
include(ROOT_PATH."Home/news.php");
include(ROOT_PATH."Home/bottom.php");

// closing footer
include(ROOT_PATH."inc/footer.php");