<?php
include '../../head.php'
?>
<?php
include '../../header.php';
?>
<div class="container_about">
    <div class="row">
        <div class="col-md-12">
            <h1>About me</h1>
            <p>
                <?php
                echo $globalVar["description"];
                ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>My skills</h1>
                <?php
                foreach ($globalVar["skills"] as $skill =>$discription) {
                    echo "<ul>";
                    echo "<p>$skill: $discription</p>";
                    echo "</ul>";
                }
                ?>
        </div>
    </div>
        <div class="row">
        <div class="col-md-12">
            <h1>My hobbies</h1>
                <?php
                foreach ($globalVar["hobbies"] as $hobby) {
                    echo "<ul>";
                    foreach ($hobby as $key => $value) {
                        echo "<p>$key: $value</p>";
                    }
                    echo "</ul>";
                }
                ?>
        </div>
    </div>
            <div class="row">
        <div class="col-md-12">
            <h1>My favorite movies</h1>
                <?php
                foreach ($globalVar["movies"] as $movie) {
                    echo "<ul>";
                    foreach ($movie as $key => $value) {
                        echo "<p>$key: $value</p>";
                    }
                    echo "</ul>";
                }
                ?>
        </div>
    </div>
                <div class="row">
        <div class="col-md-12">
            <h1>My favorite series</h1>
                <?php
                foreach ($globalVar["series"] as $serie) {
                    echo "<ul>";
                    foreach ($serie as $key => $value) {
                        echo "<p>$key: $value</p>";
                    }
                    echo "</ul>";
                }
                ?>
        </div>
    </div>
                    <div class="row">
        <div class="col-md-12">
            <h1>My favorite games</h1>
                <?php
                foreach ($globalVar["games"] as $game) {
                    echo "<ul>";
                    foreach ($game as $key => $value) {
                        echo "<p>$key: $value</p>";
                    }
                    echo "</ul>";
                }
                ?>
        </div>
                    </div>
                </div>
<?php
include '../../footer.php';
?>

