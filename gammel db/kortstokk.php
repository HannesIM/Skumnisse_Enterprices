<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

$kortstokk = array("2_of_clubs", "3_of_clubs", "4_of_clubs");

$random = rand(0,count($kortstokk)-1);

$truket_kort = $kortstokk[$random];


echo "<img src='img/$trukket_kort.png'>";

echo count($kortstokk);

?>
<img src="img/2_of_clubs.png">
</body>

</html>