<?php
//create a global variable list
global $contactVar;
global $aboutVar;
global $Teamvar;
$globalVar = array(
    "title" => "Portfolio Nick Oost",
    "description" => "This is my portfolio",
    "author" => "Jesse",
    "keywords" => "portfolio, Nick Oost, Nick's portfolio",
    "css" => array(
        //check if the file exists

//        "../../../../src/css/index.css",
//        "../../../../src/css/Footer.css",
//        "../../../../src/css/nav.css",
//        "../../../../src/css/about.css",
        "../css/index.css",
        "../css/Footer.css",
        "../css/nav.css",
        "../css/about.css",
        "../css/contact.css",
        "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
        "https://fonts.googleapis.com/css?family=Roboto:400,100,300,700",
    ),
    "js" => array(
        "src/js/script.js",
        "src/js/main.js",
    ),
    "pages" => array(
        "home" => "../views/index.php",
        "about" => "../views/about.php",
        "contact" => "../views/contact.php",
        "team" => "../views/team.php",
    ),
    "images" => array(
        "logo" => "../img/logo.png"
    ),
);

//require the varables for pages
require_once "AboutVar.php";
require_once "ContactVar.php";
require_once "TeamVar.php";
//add the about variable list to the global variable list
$globalVar = array_merge($globalVar, $aboutVar);
$globalVar = array_merge($globalVar, $Teamvar);
//add the contact variable list to the global variable list
$globalVar = array_merge($globalVar, $contactVar);
?>