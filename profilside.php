
<?php
session_start();
include "sjekk_logginn.php";
?>
    
    <?php

    include "azure.php";

    #Gjør "idbruker" i linken til en variabel vi kan bruke
    $id_link = $_GET['idbruker'];
    
    #Velger alt fra brukeren med idbruker hentet fra link
    $sql = "SELECT * FROM bruker WHERE idbruker='$id_link' ";
    $resultat = $conn->query($sql);


        $rad = $resultat->fetch_assoc();

            $idbruker = $rad['idbruker'];
            $brukernavn = $rad['brukernavn'];
            $fornavn = $rad['fornavn'];
            $etternavn = $rad['etternavn'];
            $fodselsdato = $rad['fodselsdato'];
            $bosted = $rad['bosted'];
            $bio = $rad['bio'];
            $skole = $rad['skole'];
            $jobb = $rad['jobb'];
            $tlf = $rad['tlf'];
            $epost = $rad['epost'];
            $passord = $rad['passord'];
            $profilbilde = $rad['profilbilde'];

    if(isset($_POST["leggtil_kommentar"])) {

        $kommentar = $_POST["tekst_kommentar"];
        $idinnlegg = $_POST["idinnlegg"];
        $id = $_SESSION['login_id'];
    
        $sql = "INSERT INTO innlegg_kommentar (tekst, idbruker, idinnlegg, date) VALUES ('$kommentar', '$id', '$idinnlegg', now() )";
    
        if($conn->query($sql)) {
            echo "Kommentaren ble lagt til i databasen";
        } else {
            echo "Feilmelding: $conn->error";
        }
    }


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@<?php echo "$brukernavn"; ?></title>
    <link rel="stylesheet" href="profil.css">
</head>
<body>
<div class="php">
    <?php
        echo "<br>";
        echo "<div class='profil'>";
        echo "<div class='backbutton'><a href='index.php'>Tilbake Til Hovedsiden</a></div>";
        echo "<br><h1>@$brukernavn</h1>";
            echo "<img class='profilbilde' src='img/$profilbilde.jpg'>";
            echo "<h2>$fornavn $etternavn</h2>";
            echo "<p>$bio</p><br>";
            #if($type_2 == "None") {
            #    echo "<br>$type_1";
            #} else {
            #echo "<br>$type_1, $type_2";
            #}
            
            echo "<img class='icon' src='img/baby.jpg'> 
            $fodselsdato<br><br>";
            echo "<img class='icon' src='img/house.png'> 
            $bosted<br><br>";
            echo "<img class='icon' src='img/school-9.png'> 
            $skole<br><br>";
            echo "<img class='icon' src='img/work.png'>
            $jobb";
            echo "<br><br>
            <p>- Telefon: $tlf --- Epost: $epost -</p>
            <br><br>";
            $id = $id_link;
            echo "<div class='opprett_innlegg'>";
                
            echo "</div>";
            echo "<div class='card'>";
                $sql = "SELECT * FROM innlegg WHERE idbruker='$id_link' ";
                    $resultat = $conn->query($sql); # henter ut fra DB

                    while($rad = $resultat->fetch_assoc()) { # loop gjennom alle innlegg
                        echo "<div class='card_content'>";
                        $tekst = $rad['tekst'];
                        $date = $rad['date'];
                        $idinnlegg = $rad['idinnlegg'];
                        echo "<time datetime='2021-03-30' class='card__date'>$date</time>";
                        echo "<span class='card__title'>$tekst<span><br><br>";

                        include 'kommentarer.php';

                        echo "<form method='POST'>";
                            echo "<input type='text' name='tekst_kommentar' value='kommenter'><br>";
                            echo "<input name='idinnlegg' type='hidden' value='$idinnlegg'>";
                            echo "<input type='submit' name='leggtil_kommentar' value= 'Legg til'>";
                        echo "</form>";

                        echo "<br>";
                        echo "</div>"; 
                    }
            echo "</div>";
            echo "<a href='bildevisning.php?idbruker=$id_link'> Se alle bilder </a>";
            echo "<div class='innlegbilde'>";
                echo "<div class='row'>";
                    $sql = "SELECT * FROM media WHERE idbruker='$id_link' ORDER BY date DESC LIMIT 6";
                    $resultat = $conn->query($sql); # henter ut fra DB

                    while($rad = $resultat->fetch_assoc()) { # loop gjennom alle brukere
                        echo "<div class='column'>"; $media_navn = $rad['media_navn'];  
                        echo "<img class='bilder'src='img/$media_navn' width='200' height'200' onclick='myFunction(this);''>";
                        echo "</div>"; 
                    }
                echo "</div>";
                
                echo "<div class='container'>";
                echo "<span onclick='this.parentElement.style.display='none'' class='closebtn'>&times;</span>";
                
                echo "<img id='expandedImg' style='width=400 height'300'>";

                echo "<div id='imgtext'></div>";
                ?>
            </div>
        </div>
        

        



</div>
<script src="java.js"></script>

</body>
</html>