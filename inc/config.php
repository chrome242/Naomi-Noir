<?php
  // the root url of the site relative to the server root. Will be / on the local server
  define("BASE_URL", "/"); // for dev launch
  
  // the root path .. base_url should usally equal the concat to the end of the DOCROOT
  define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/");

  // the sections of the Site
  define("HOME", "");
  define("ABOUT", "About/");
  define("RESUME", "Resume/");
  define("PORTFOLIO", "Portfolio/");
  define("PRODUCTIONS", "Productions/");
  define("CAST", "Cast/");
  define("CREW", "Crew/");
  define("MAKING", "Making/");
  define("DESIGN", "Design/");
  define("CLASSES", "Classes/");
  
  //TODO LIST:
  
  // xx: move Nav bar to include, remove home due to name click == home
  
  // xx: move old css.css to /css/SECTION/style.css because the old system was so mucked.
    // xx css (home) should be fine in /css
    // xx about
    // xx cast
    // xx classes
    // xx crew
    // xx design
    // xx making
    // xx portfolio
    // xx productions
    // xx resume
  
  
  //TODO: move over from small case to Capitalize directory strucutre, updating as we go
    // xx about
    // xx cast
    // xx classes
    // crew
    // design
    // making
    // portfolio
    // productions
    // resume
    
  //TODO: remove auto drop of the first section in the design section
  
  //XX: Make /Home dir for root files, add .htdoc to protect that one.
  
  
  //TODO: Update main page: FLOT, FLAG, about WJL
  
  // xx: update footer
  
  //TODO: redirect rules for changed locations (301's)
  
  // xx: fix the slideshow on the classes
  
  //TODO: Update about
  
  //TODO: Update CV

  //TODO: Update Making Of
  
  //TODO: Consider making both pdf templates one in the same
  
  //TODO: Remove templates when the time is right