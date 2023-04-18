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
        $navn = $_GET["dittnavn"];
        $inntektførsteår = $_GET["2021"];
        $inntektandreår = $_GET["2022"];
        $inntekttredjeår = $_GET["2023"];
        $inntektalleår = $inntektførsteår + $inntektandreår + $inntekttredjeår;
        $gjennomsnitt = $inntektalleår / 3;

        echo "Hei $navn!";
        echo "<br>I 2021 hadde du en inntekt på $inntektførsteår kr.";
        echo "<br>I 2022 hadde du en inntekt på $inntektandreår kr.";
        echo "<br>I 2023 hadde du en inntekt på $inntekttredjeår kr.";
        echo "<br>";
        echo "<br> Til sammen har du tjent $inntektalleår kr.";
        echo "<br> Gjennomsnittlig hadde du en inntekt på $gjennomsnitt kr i året.";
        
        if ($gjennomsnitt <=610000) {
            echo "<br>Du tjente mindre enn gjennomsnittet i Norge per år.";
        } else {
            echo "<br>Du tjente mer enn gjennomsnittet i Norge per år.";
        }
    }

    ?>

</body>
</html>