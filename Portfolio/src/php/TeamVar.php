<?php
global $aboutVar;
$Teamvar = array(
    "teams" => array(
        "team1" => array(
            "title" => "Team 1",
            "description" => "This is team 1",
            "link" => "https://www.google.nl",
            "image" => "../img/placeholder.png",
            "projects" => array(
                $aboutVar["projects"]["project1"],
                $aboutVar["projects"]["project2"],
                $aboutVar["projects"]["project3"],
            ),
        ),
        "team2" => array(
            "title" => "Team 2",
            "description" => "This is team 2",
            "link" => "https://www.google.nl",
            "image" => "../img/placeholder.png",
            "projects" => array(
                $aboutVar["projects"]["project4"],
                $aboutVar["projects"]["project5"],
                $aboutVar["projects"]["project6"],
            ),
        ),
    ),
);