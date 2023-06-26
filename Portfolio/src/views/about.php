<?php
include '../../head.php'
?>
<?php
include '../../header.php';
?>
<script>
    window.onload = function resize(){
        for (let i = 0; i < document.getElementsByClassName("content").length; i++) {
                document.getElementsByClassName("ProjectIMG")[i].style.height = document.getElementsByClassName("ProjectDiscription")[i].offsetHeight + "px";
                document.getElementsByClassName("ProjectIMG")[i].style.minHeight = "100px";
        }
    }
</script>
<div class="container_about">
    <div class="row">
        <div class="col-md-12">
            <h1>About me</h1>
            <p>
                <?php
                if (isset($globalVar)) {
                    echo $globalVar["description"];
                }
                ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>My skills</h1>
                <?php
                if (isset($globalVar)) {
                    foreach ($globalVar["skills"] as $skill =>$discription) {
                        echo "<ul>";
                        echo "<p>$skill: $discription</p>";
                        echo "</ul>";
                    }
                }
                ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>My Projects</h1>
                <?php
                if (isset($globalVar)) {
                    foreach ($globalVar["projects"] as $project) {
                        echo "<ul>";
                        echo "<h2>$project[title]</h2>";
                        echo "<div class='content'>";
                        echo "<p class='ProjectDiscription'>$project[description]</p>";
                        echo "<a class='ProjectIMG' href='$project[link]'><img src='$project[image]'></a>";
                        echo "</div>";
                        echo "</ul>";

                    }
                }
                ?>
        </div>
    </div>
        <div class="row">
        <div class="col-md-12">
            <h1>My hobbies</h1>
            <?php
            if (isset($globalVar)) {
                foreach ($globalVar["hobbies"] as $project) {
                    echo "<ul>";
                    echo "<h2>$project[title]</h2>";
                    echo "<div class='content'>";
                    echo "<p class='ProjectDiscription'>$project[description]</p>";
                    echo "<a class='ProjectIMG' href='$project[link]'><img src='$project[image]'></a>";
                    echo "</div>";
                    echo "</ul>";
                }
            }
            ?>
        </div>
    </div>
            <div class="row">
        <div class="col-md-12">
            <h1>My favorite movies</h1>
            <?php
            if (isset($globalVar)) {
                foreach ($globalVar["movies"] as $project) {
                    echo "<ul>";
                    echo "<h2>$project[title]</h2>";
                    echo "<div class='content'>";
                    echo "<p class='ProjectDiscription'>$project[description]</p>";
                    echo "<a class='ProjectIMG' href='$project[link]'><img src='$project[image]'></a>";
                    echo "</div>";
                    echo "</ul>";
                }
            }
            ?>
        </div>
    </div>
                <div class="row">
        <div class="col-md-12">
            <h1>My favorite series</h1>
            <?php
            if (isset($globalVar)) {
                foreach ($globalVar["series"] as $project) {
                    echo "<ul>";
                    echo "<h2>$project[title]</h2>";
                    echo "<div class='content'>";
                    echo "<p class='ProjectDiscription'>$project[description]</p>";
                    echo "<a class='ProjectIMG' href='$project[link]'><img src='$project[image]'></a>";
                    echo "</div>";
                    echo "</ul>";
                }
            }
            ?>
        </div>
    </div>
                    <div class="row">
        <div class="col-md-12">
            <h1>My favorite games</h1>
            <?php
            if (isset($globalVar)) {
                foreach ($globalVar["games"] as $project) {
                    echo "<ul>";
                    echo "<h2>$project[title]</h2>";
                    echo "<div class='content'>";
                    echo "<p class='ProjectDiscription'>$project[description]</p>";
                    echo "<a class='ProjectIMG' href='$project[link]'><img src='$project[image]'></a>";
                    echo "</div>";
                    echo "</ul>";
                }
            }
            ?>
        </div>
                    </div>
                </div>
<?php
include '../../footer.php';
?>

