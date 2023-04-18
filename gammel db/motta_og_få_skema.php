<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="GET">
    <br>
    <br>
    Ditt navn
    <input type="text" name="dittnavn">
    <br>
    <br>
    Dine tre favorittretter:
    <br>
    <br>
    <input type="text" name="favorittmat1">
    <br>
    <br>
    <input type="text" name="favorittmat2">
    <br>
    <br>
    <input type="text" name="favorittmat3">
    <br>
    <br>
    <input type="submit" name="sendinn" value="Send inn">
    <br>
    <br>
    <br>
    <br>
</form>

<?php

if(isset($_GET["sendinn"])) {
    $navn = $_GET["dittnavn"];
    $mat1 = $_GET["favorittmat1"];
    $mat2 = $_GET["favorittmat2"];
    $mat3 = $_GET["favorittmat3"];
    echo "Hei $navn, dine favorittretter er:";
    echo "<ol>";
    echo    "<li>$mat1";
    echo    "<li>$mat2";
    echo    "<li>$mat3";
    echo "<ol>";
}

?>

</body>
</html>