<?php
session_start();
include "sjekk_logginn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bildevisning.css">
</head>
<body>
<div class="php">
    <?php
    include "azure.php";

    $id_link = $_GET['idbruker'];
    echo "<div class='profil'>";
    echo "<br>";
    echo "<div class='backbutton'><a href='profilside.php?idbruker=$id_link'>Tilbake til profilen</a></div>";
        echo "<div class='innlegbilde'>";
            echo "<div class='row'>";
                $sql = "SELECT * FROM media WHERE idbruker='$id_link' ORDER BY date DESC ";
                $resultat = $conn->query($sql); # henter ut fra DB

                while($rad = $resultat->fetch_assoc() ) { # loop gjennom alle brukere
                    $idmedia = $rad['idmedia'];
                    echo "<div class='column'>"; $media_navn = $rad['media_navn'];  
                    echo "<a href='ettbilde.php?media_id=$idmedia&idbruker=$id_link'><img class='bilder'src='img/$media_navn' width='200' height'200'></a>";
                    echo "</div>"; 
                }
            echo "</div>";
            ?>
        </div>
    </div>
</div>
</body>
