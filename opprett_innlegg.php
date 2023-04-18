<form method="POST">
        <h1>Nytt Innlegg</h1>
        <br>Skriv Innlegg
        <br><input type="text" name="tekst"><br>
        <input type="submit" name="leggtil" value= "Legg til">
</form>


<?php

if(isset($_POST["leggtil"])) {
        
    $tekst = $_POST["tekst"];

    $sql = "INSERT INTO innlegg (tekst, idbruker, date) VALUES ('$tekst','$id', now() )";

    if($conn->query($sql)) {
        echo "Innlegg ble lagt til i databasen";
    } else {
        echo "Feilmelding: $conn->error";
    }

}
?>