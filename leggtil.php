<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        Brukernavn
        <br><input type="text" name="brukernavn"><br>
        Fornavn
        <br><input type="text" name="fornavn"><br>
        Etternavn
        <br><input type="text" name="etternavn"><br>
        Bio
        <br><input type="longtext" name="bio"><br>
        Fødselsdato
        <br><input type="date" name="fodselsdato"><br>
        Bosted
        <br><input type="text" name="bosted"><br>
        Skole
        <br><input type="text" name="skole"><br>
        Jobb
        <br><input type="text" name="jobb"><br>
        Telefon
        <br><input type="number" name="telefon"><br>
        E-post
        <br><input type="text" name="epost"><br>
        Passord
        <br><input type="password" name="passord"><br>
        <input type="submit" name="leggtil" value= "Legg til">


    </form>
    
    <?php

    include "azure.php";

    if(isset($_POST["leggtil"])) {
        
        $newbrukernavn = $_POST["brukernavn"];
        $newfornavn = $_POST["fornavn"];
        $newetternavn = $_POST["etternavn"];
        $newbio = $_POST["bio"];
        $newfodselsdato = $_POST["fodselsdato"];
        $newbosted = $_POST["bosted"];
        $newskole = $_POST["skole"];
        $newjobb = $_POST["jobb"];
        $newtelefon = $_POST["telefon"];
        $newepost = $_POST["epost"];
        $newpassord = $_POST["passord"];

        $sql = "INSERT INTO bruker (brukernavn, fornavn, etternavn, bio, fodselsdato, bosted, skole, jobb, tlf, epost, passord)
         VALUES 
         ('$newbrukernavn','$newfornavn','$newetternavn', '$newbio', '$newfodselsdato','$newbosted','$newskole','$newjobb', '$newtelefon', '$newepost', '$newpassord')";

        if($conn->query($sql)) {
        echo "<br>Kontoen $newbrukernavn ble opprettet.<br>";
        } else {
            echo "Noe gikk feil med INSERT";
        }

    }
    ?>
    <br>
    <a href="index.php">Tilbake Til Hovedsiden</a>

</body>
</html>