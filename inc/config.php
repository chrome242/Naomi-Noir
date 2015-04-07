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
  
  // 'todonextime' list:
  // --check browser for how to deal with pdfs, download on mobile, getting rid of awsome imbed on them =(
  // --as a followup, fix redundant pdftemplate files.
  // --make included files for design more granular, consider move to DB.
  // --same with productions
  // --same with portfolio
  // --make all file src root relative.
  // --move to a provider that allows htaccess files
  
  
  //TODO: Update about (N)
  
  //TODO: Update CV (N)

  //TODO: Update Making Of (N)
  