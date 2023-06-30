<?php
//create a global variable list
global $aboutVar, $contactVar;
$globalVar = array(
    "title" => "Portfolio Nick Oost",
    "description" => "This is my portfolio",
    "author" => "Jesse",
    "keywords" => "portfolio, Nick Oost, Nick's portfolio",
    "css" => array(
        "../../../../src/css/index.css",
        "../../../../src/css/Footer.css",
        "../../../../src/css/nav.css",
        "../../../../src/css/about.css",
        "../../../../src/css/contact.css",
        "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
        "https://fonts.googleapis.com/css?family=Roboto:400,100,300,700",
    ),
    "js" => array(
        "src/js/script.js",
        "src/js/main.js",
    ),
    "pages" => array(
        "home" => "../../../../src/views/index.php",
        "about" => "../../../../src/views/about.php",
        "contact" => "../../../../src/views/contact.php"
    ),
    "images" => array(
        "logo" => "../../../../src/img/logo.png"
    ),
);

//require the varables for pages
require_once "AboutVar.php";
require_once "ContactVar.php";
//add the about variable list to the global variable list
$globalVar = array_merge($globalVar, $aboutVar);
//add the contact variable list to the global variable list
$globalVar = array_merge($globalVar, $contactVar);
?>