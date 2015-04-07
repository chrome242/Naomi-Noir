<?php

// get the config file, set the section.
require_once("../inc/config.php");
$section = RESUME;

// header
include(ROOT_PATH."inc/head.php");
include(ROOT_PATH."inc/navbar.php");

// body content
echo '<embed src="../files/resume/NS_Resume_2014.pdf" width="98%" height="1050" alt="resume" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">';
// closing footer
include(ROOT_PATH."inc/footer.php");