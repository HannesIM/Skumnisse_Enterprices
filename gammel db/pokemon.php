<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="poke.css">
</head>
<body>
<div class="php">
    <?php

    include "azure.php";

    $id_link = $_GET['pokelink_id'];

    $sql = "SELECT * FROM pokemon WHERE pokeid='$id_link' ";
    $resultat = $con->query($sql);

    echo "<div class='poke'>";
        $rad = $resultat->fetch_assoc();

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
            $bilde = $rad['bilde'];

        echo "<h1>$pokename</h1>";
        echo "<h2>#$dex_num</h2>";
        echo "<img src='img/$bilde'>";
        if($type_2 == "None") {
            echo "<br>$type_1";
        } else {
        echo "<br>$type_1, $type_2";
        }
        echo "<br><p>Number of evolutions $evo_quantity (is number $evo_num)</p>";
    echo "</div>"
    ?>
</div>

</body>
</html>