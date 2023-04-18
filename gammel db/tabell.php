<!doctype html>
<html>

<head>
    <style>
        table {
            border-collapse: 
        }
        th, td {
            border-style: solid;
        }
    </style>

</head>

<body>

<table>
    <?php

    $rad = 10;
    $kolonner = 10;

    echo "<table>";

    for ($i=1; $i<=$kolonner; $i++) {
        echo "<tr>";
            echo "<td> $i gangen </td>";
            for ($x=1; $x<=$rad; $x++) {
                $gange = $x * $i;
                echo "<th> $x * $i = $gange </th>";
            }

        echo "</tr>";
    }

    echo "</table>";
    ?>
</table>

</body>



