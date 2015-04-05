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
  
  // move Nav bar to include, remove home due to name click == home
  
  //TODO: join all CSS files into a css/style file
    // xx css
    // xx about
    // xx cast
    // classes
    // xx crew
    // design
    // making
    // portfolio
    // productions
    // resume
  
  //TODO: Add fixes to files to make them rectify with the CSS changes:
    // About (text, mini-nav, main-image)
    // 
  
  //TODO: move over from small case to Capitalize directory strucutre, updating as we go
    // about
    // cast
    // classes
    // crew
    // design
    // making
    // portfolio
    // productions
    // resume
    
  //TODO: remove auto drop of the first section in the design section
  
  //TODO: Update main page: FLOT, FLAG, about WJL
  
  //TODO: update footer
  
  //TODO: redirect rules for changed locations (301's)
  
  //TODO: fix the slideshow on the classes
  
  //TODO: Update about
  
  //TODO: Update CV
  
  //TODO: Update About
  
  //TODO: Update Making Of
  
  //TODO: Consider making both pdf templates one in the same
  
  //TODO: Remove templates when the time is right