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
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class='top'>

        <div class="header">
            <div class="skum1">
                <img class='skumnisser' src="img/skumnisse.png">
            </div>
            <h1 class="headtitle" style="font-size: 50px">Skumnisse Enterprices</h1>
                
            <div class="skum1">
                <img class='skumnisser' src="img/skumnisse.png">
            </div>
        </div>
        <div class="velkommen">
            <h2>Velkommen
            <?php
            echo $_SESSION['fornavn'];
            ?>
            </h2>
        </div>
    </div>

    <a href="leggtil.php">Legg til profil</a>
    <a href="min_profilside.php">Min profil</a>
    

    <?php

    include "azure.php";
    #if(isset($_POST["slett_id"])) {
        #$slett_id = $_POST["slett_id"];
        #$profil_deleted = $_POST["profil_deleted"];

    

        #$sql = "DELETE FROM pokemon WHERE pokeid='$slett_id'";

        #if($con->query($sql)) {
            #echo "$profil_deleted ble slettet.";
        #}   else {
            #echo "Noe gikk galt med spørringen $sql ($con->error).";
        #}

    #}  
    ?>
    <div class="profilbilder">
        <?php
        $sql = "SELECT * FROM bruker";
        $resultat = $conn->query($sql);


        while($rad = $resultat->fetch_assoc()) { # loop gjennom alle brukere
            $idbruker = $rad['idbruker'];  
            $fornavn = $rad['fornavn'];
            $profilbilde = $rad['profilbilde'];
                if($_SESSION['fornavn'] != $fornavn) {
                    echo " 
                    <div class='ettprofilbilde'>
                        <a href='profilside.php?idbruker=$idbruker'>
                            <img class='profilbilde' src='img/$profilbilde.jpg'>
                            <div class='navnunderprofilbilde'><p> $fornavn </p></div>
                        </a> 
                    </div>";
                }
        }
        ?>
    </div>
    
</body>
</html>