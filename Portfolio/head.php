<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    global$globalVar;
    //include the global variables
    include 'src/php/GlobalVar.php';
    //include the css files
    foreach ($globalVar["css"] as $css) {
        echo "<link rel='stylesheet' href='$css'>";
    }
    //include the js files
    foreach ($globalVar["js"] as $js) {
        echo "<script src='$js'></script>";
    }
    ?>
    <meta charset="UTF-8">
    <title>
        <?php
        //include the title
        echo $globalVar["title"];
        ?>
    </title>
</head>
<body>