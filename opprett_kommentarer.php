<form method="POST">
        <br>Skriv kommentar
        <br><input type="text" name="kommentar"><br>
        <input type="submit" name="leggtil" value= "Legg til">
</form>


<?php

if(isset($_POST["leggtil"])) {
        
    $tekst = $_POST["tekst"];

    $sql = "INSERT INTO innlegg_kommentar (tekst, idbruker, date) VALUES ('$kommentar','$id', now() )";

    if($conn->query($sql)) {
        echo "Kommentaren ble lagt til i databasen";
    } else {
        echo "Feilmelding: $conn->error";
    }

}
?>