<?php
include '../../head.php';
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
            <h1>Teams</h1>

    <?php
    if (isset($globalVar)){
        foreach ($globalVar["teams"] as $team){
            echo "<div class='row'>";
            echo "<div class='col-md-12'>";
            echo "<h2>$team[title]</h2>";
            echo "<p>$team[description]</p>";
            echo "<a href='$team[link]'><img src='$team[image]'></a>";
            echo "<div class='row'>";
            echo "<div class='col-md-12'>";
            echo "<h1>Projects</h1>";
            foreach ($team["projects"] as $project){
                echo "<ul>";
                echo "<h2>$project[title]</h2>";
                echo "<div class='content'>";
                echo "<p class='ProjectDiscription'>$project[description]</p>";
                echo "<a class='ProjectIMG' href='$project[link]'><img src='$project[image]'></a>";
                echo "</div>";
                echo "</ul>";
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        };
    }
    ?>
        </div>
    </div>
</div>

<?php
include '../../footer.php';
?>
