<!DOCTYPE html>
<html>
<head>
    <title>Mijn eerste PHP-pagina</title>
</head>
<body>
<h1>Welkom op mijn website!</h1>

<?php
// Hier begint de PHP-code

// Een voorbeeld van het gebruik van variabelen
$naam = "John Doe";
$leeftijd = 25;

// Een voorbeeld van het gebruik van een if-else statement
if ($leeftijd >= 18) {
    echo "<p>Hallo, " . $naam . "! Je bent volwassen.</p>";
} else {
    echo "<p>Hallo, " . $naam . "! Je bent nog minderjarig.</p>";
}

// Hier eindigt de PHP-code
?>

</body>
</html>
