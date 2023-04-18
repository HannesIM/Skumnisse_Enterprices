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

    <h1>Pokedex database</h1>

    <a href="leggtil.php">Legg til pokemon</a>
    

    <?php

    include "azure.php";
    if(isset($_POST["slett_id"])) {
        $slett_id = $_POST["slett_id"];
        $pokename_deleted = $_POST["pokename_deleted"];

    

        $sql = "DELETE FROM pokemon WHERE pokeid='$slett_id'";

        if($con->query($sql)) {
            echo "$pokename_deleted ble slettet.";
        }   else {
            echo "Noe gikk galt med spørringen $sql ($con->error).";
        }

    }  


    $sql = "SELECT * FROM pokemon ORDER by dex_num";
    $resultat = $con->query($sql);

    echo "<table id ='customers'>"; 
    echo "<tr>";
        #echo "<th>pokeid</th>";
        echo "<th>Dex#</th>";
        echo "<th>Name</th>";
        #echo "<th>Height</th>";
        echo "<th>Type_1</th>";
        echo "<th>Type_2</th>";
        echo "<th>Evo_num</th>";
        echo "<th>Evo_quantity</th>";
        echo "<th>Form</th>";
        echo "<th> </th>";
        #echo "<th>Gen</th>";
    echo "</tr>";

    #looper gjennom resultatet i databasen
    while($rad = $resultat->fetch_assoc()) {
        $pokeid = $rad['pokeid'];
        $dex_num = $rad['dex_num'];
        $pokename = $rad['pokename'];
        #$height = $rad['height'];
        $type_1 = $rad['type_1'];
        $type_2 = $rad['type_2'];
        $evo_num = $rad['evo_num'];
        $evo_quantity = $rad['evo_quantity'];
        $form = $rad['form'];
        #$gen = $rad['gen'];

        #echo "<br>$pokeid, Dex: $dex, Name: $name, Height: $height, Type: $type_1, $type_2, Evoulution: $evo_num of $evo_quantity, Form: $form, Originates from gen $gen<br>";

        echo "<tr>";
        #echo "<td>$pokeid</td>";
        echo "<td>$dex_num</td>";
        echo "<td><a href='pokemon.php?pokelink_id=$pokeid'>$pokename</a></td>";
        #echo "<td>$height</td>";
        echo "<td>$type_1</td>";
        echo "<td>$type_2</td>";
        echo "<td>$evo_num</td>";
        echo "<td>$evo_quantity</td>";
        echo "<td>$form</td>";
        echo "<td>";
            echo "<form method='post'>";
            echo "<input type='hidden' name='slett_id' value='$pokeid'>";
            echo "<input type='hidden' name='pokename_deleted' value='$pokename'>";
            echo "<input type='submit' value='slett'>";
            echo "</form>";
        echo "</td>";
        #echo "<td>$gen</td>";
        echo "</tr>";
    }
    echo "</table>";


    ?>
    
</body>
</html>