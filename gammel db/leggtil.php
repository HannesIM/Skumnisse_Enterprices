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
        Dex#
        <br><input type="number" name="dex"><br>
        Name
        <br><input type="text" name="name"><br>
        Type 1
        <br><input type="text" name="type_1"><br>
        Type 2
        <br><input type="text" name="type_2"><br>
        Evo num
        <br><input type="number" name="evo_num"><br>
        Evo quantity
        <br><input type="number" name="evo_quantity"><br>
        Form
        <br><input type="text" name="form"><br>
        <input type="submit" name="leggtil" value= "Legg til">


    </form>
    
    <?php

    include "azure.php";

    if(isset($_POST["leggtil"])) {
        
        $newdexnumber = $_POST["dex"];
        $newname = $_POST["name"];
        $newtype1 = $_POST["type_1"];
        $newtype2 = $_POST["type_2"];
        $newevonum = $_POST["evo_num"];
        $newevoquantity = $_POST["evo_quantity"];
        $newform = $_POST["form"];

        $sql = "INSERT INTO pokemon (dex_num, pokename, type_1, type_2, evo_num, evo_quantity, form) VALUES ('$newdexnumber','$newname','$newtype1','$newtype2','$newevonum','$newevoquantity','$newform')";

        if($con->query($sql)) {
        echo "<br>$newname ble lagt til i databasen.<br>";
        } else {
            echo "Noe gikk feil med INSERT";
        }

    }
    ?>
    <br>
    <a href="index.php">Tilbake til tabellen</a>

</body>
</html>