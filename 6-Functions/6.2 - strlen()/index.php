<!DOCTYPE html>
<html>
<body>

<?php

function mijnNaamIsGroot() {
    $voornaam = "Abdelrahman";
    $achternaam= "Mohamed";
    $geheleNaam = $voornaam . " " . $achternaam;
    echo strtoupper("Mijn naam is.$geheleNaam");
}

mijnNaamIsGroot();

?>


</body>
</html>