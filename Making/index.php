<?php

// get the config file, set the section.
require_once("../inc/config.php");
$section = MAKING;

// header
include(ROOT_PATH."inc/head.php");
include(ROOT_PATH."inc/navbar.php");

// body content
include("content.php");

// closing footer
include(ROOT_PATH."inc/footer.php");