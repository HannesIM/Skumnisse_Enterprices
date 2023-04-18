<!DOCTYPE html>
<html lang="en">
<head>

</head>

<body>

<?php

$figurer = array("Dong Zhuo", "Pawn", "Age Ronny");

echo "<h3>Noen kule folk</h3>";
for($i=0; $i < count($figurer); $i++) {
    echo "Figur med indeks $i: $figurer[$i] <br>";
}
echo '<h3>Arrayen $figurer</h3>';

var_dump($figurer);
echo "<br> <br>";
echo $figurer[2];

$art = array("Dong Zhuo"=>"Person", "Pawn"=>"Robot", "Age Ronny"=>"Menneske");

echo "<br><br><br><br><br>";
echo "<p>Dong Zhuo er en " . $art["Dong Zhuo"] . ".</p>";
echo '<h3>Arrayen $art</h3>';

var_dump($art);


$tall = array(3, 2, 12, 89, 74);



echo "<br>sum(tall) = " . array_sum($tall);

$sum = 0;

for ($f=0; $f < count($tall); $f++) {
    $sum += $tall[$f];
}

echo "<br>$sum<br>";


$tegn = array("Hjerter", "Ruter", "Kløver", "Spar");
$nummer = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K");

$k = rand(0, 12);
$n = rand(0, 3);


echo $tegn[$n] . " " . $nummer[$k];

if($tegn[$n] == "Spar" && $nummer[$k] == 2) {
    echo "!!!!!1!!!!!!11!!!!!1!11!";
}


?>
    
</body>
</html>