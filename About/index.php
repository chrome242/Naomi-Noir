<?php

// get the config file, set the section.
require_once("../inc/config.php");
$section = ABOUT;

// header
include(ROOT_PATH."inc/head.php");
include(ROOT_PATH."inc/navbar.php");

// body content

/* This page is a little diffrent then all the other pages on the site, and has
 * a 4 : 8 split in the same row. As a result the files here are a 4 col include
 * and a 8 col include. As such, the container for the entire body is opened in
 * the left column include file.
 */
include("main-image.php"); // left 4
include("text.php"); // right 8


// closing footer
include(ROOT_PATH."inc/footer.php");