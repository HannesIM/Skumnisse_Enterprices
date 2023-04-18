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
if(isset($_GET["sendinn"])) {
    $tall1 = $_GET["tall1"];
    $tall2 = $_GET["tall2"];
    $tall3 = $_GET["tall3"];

    $tallene = array($tall1,$tall2,$tall3);
    
    for ($i=0; $i<=count($tallene)-1; $i++) {
        
        if ($i==count($tallene)-1) {
            echo $tallene[$i];
        } else {
            
            echo "$tallene[$i] + ";
        }

    }

    $sum = 0;

    for ($s=0; $s < count($tallene); $s++) {
        $sum += $tallene[$s];
    }
    echo "<br>=$sum<br>";
}
?>

</body>
</html>