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

$tall = array(5,20,13,2,18,7,10);

for($s=0; $s<count($tall); $s++) {
    if($tall[$s] > 10) {
        echo "$tall[$s] er større enn 10<br>";
    }
    else {
        echo "$tall[$s] er ikke større enn 10<br>";
    }
}


?>
</body>

</html>