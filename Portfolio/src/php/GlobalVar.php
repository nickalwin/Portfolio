<?php
//create a global variable list
global $aboutVar;
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
    ),
    "js" => array(
        "src/js/script.js"
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

//create a variable to acces the AboutVar.php file
require_once "AboutVar.php";
//add the about variable list to the global variable list
$globalVar = array_merge($globalVar, $aboutVar);
?>