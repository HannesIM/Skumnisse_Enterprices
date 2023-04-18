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
    Skriv ett tall
    <input type="number" name="tall1">
    <br>
    <br>
    Skriv ett tall
    <input type="number" name="tall2">
    <br>
    <br>
    Skriv ett tall
    <input type="number" name="tall3">
    <br>
    <br>
    <input type="submit" name="Adder" value="Adder">
    <input type="submit" name="Subtraher" value="Subtraher">
</form>

<?php
if(isset($_GET["Adder"])) {
    $tall1 = $_GET["tall1"];
    $tall2 = $_GET["tall2"];
    $tall3 = $_GET["tall3"];

    $tallenepluss = array($tall1,$tall2,$tall3);
    
    for ($i=0; $i<=count($tallenepluss)-1; $i++) {
        
        if ($i==count($tallenepluss)-1) {
            echo $tallenepluss[$i];
        } else {
            
            echo "$tallenepluss[$i] + ";
        }

    }

    $sumpluss = 0;

    for ($s=0; $s < count($tallenepluss); $s++) {
        $sumpluss += $tallenepluss[$s];
    }
    echo "<br> = $sumpluss<br>";
}

if(isset($_GET["Subtraher"])) {
    $tall1 = $_GET["tall1"];
    $tall2 = $_GET["tall2"];
    $tall3 = $_GET["tall3"];

    $talleneminus = array($tall1,$tall2,$tall3);
    
    for ($i=0; $i<=count($talleneminus)-1; $i++) {
        
        if ($i==count($talleneminus)-1) {
            echo $talleneminus[$i];
        } else {
            
            echo "$talleneminus[$i] - ";
        }

    }

    $summinus = 0;

    for ($t=0; $t < count($talleneminus); $t++) {
        $summinus -= $talleneminus[$t];
    }
    echo "<br> = ";
    echo $summinus+$talleneminus[0]*2;
}
?>



</body>
</html>