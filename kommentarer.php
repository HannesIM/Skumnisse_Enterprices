<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="profil.css">
</head>
<?php

$sql = "SELECT * FROM innlegg_kommentar JOIN bruker on innlegg_kommentar.idbruker=bruker.idbruker WHERE idinnlegg='$idinnlegg' ORDER BY date";
$resultat_kommentar = $conn->query($sql); # henter ut fra DB

while($kom = $resultat_kommentar->fetch_assoc()) { # loop gjennom alle kommentarer
    $innlegg_tekst = $kom['tekst'];
    $date = $kom['date'];
    $fornavn = $kom['fornavn'];
    $etternavn = $kom['etternavn'];
    echo "<div class='card__date'>";
        echo $date;
        echo "<br>$fornavn $etternavn: $innlegg_tekst<br>";
    echo "</div>";
    }

?>