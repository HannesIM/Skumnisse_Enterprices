<!doctype html>
<html>

<?php
$tall1 = rand(1,500);
$tall2 = rand(1,400);
$tekst1 = "Ringbing";
$tekst2 = "Bibileo";
$tekst3 = "Dingus";
$tekst4 = "Vlodus";

$sum = $tall1 + $tall2;
$differanse = $tall1 - $tall2;
$produkt = $tall1 * $tall2;
$kvotient = $tall1 / $tall2;

$langTekst = $tekst3 . " " . $tekst4;
$bedreTekst = $tekst1 . " " . $tekst2 . " " . "Den Store" . "s gate";

echo "Navn: $langTekst <br><br>";

echo "Før lunsj laget du $tall1 skumnisser <br>";
echo "Etter lunsj laget du $tall2 skumnisser <br>";
echo "Summen av skumnisser du har laget i dag er $sum <br><br>";

echo "Differansen blir $differanse <br>";
echo "Produktet blir $produkt <br>";
echo "Kvotienten blir $kvotient <br>";

echo "<br><br>";


$arbeidsmengde = $tall2 + $tall1;

if($arbeidsmengde <= 50) {
    $arbeidsgrad = 1;
    echo "Du har <a href='https://www.alamy.com/stock-photo-a-cartoon-angry-emoji-emoticon-icon-character-89924771.html?imageid=44D90429-D8AA-412A-BDA3-D3EAB4E00382&p=59895&pn=1&searchId=e88b82547bcb4c21cc3d79f372272756&searchtype=0'>sparken...</a>";
} else if($arbeidsmengde <= 126) {
    $arbeidsgrad = 2;
    echo "Du får ikke lønn denne måneden.";
} else if($arbeidsmengde <= 201) {
    $arbeidsgrad = 3;
    echo "Dette blir lønnstrekk.";
} else if($arbeidsmengde <= 301) {
    $arbeidsgrad = 4;
    echo "Helt ok, men dette koster litt lunsjrasjon.";
} else if($arbeidsmengde <= 401) {
    $arbeidsgrad = 5;
    echo "Greit.";
} else if($arbeidsmengde <= 501) {
    $arbeidsgrad = 6;
    echo "Godt arbied, du får frokost i morgen.";
} else if($arbeidsmengde <= 601) {
    $arbeidsgrad = 7;
    echo "Bra jobba, du får dra tidligere i morgen";
} else if($arbeidsmengde <= 701) {
    $arbeidsgrad = 8;
    echo "Godt jobba, du får en fridag til i år.";
} else if($arbeidsmengde <= 801) {
    $arbeidsgrad = 9;
    echo "Flott arbeid, du får en bonus for dette.";
} else if($arbeidsmengde <= 900) {
    $arbeidsgrad = 10;
    echo "Du får se familien din igjen :D";
}

echo "<br>Din arbeidsgrad for dagen var $arbeidsgrad/10. <br><br>";

echo "Denne meldingen er sendt fra $bedreTekst";

echo "<br><a href='https://www.google.com/webhp?hl=en&sa=X&ved=0ahUKEwj72Ibiobr8AhUPR_EDHRhFASQQPAgI'>Google</a><br>";

$måned = date("m");

if($måned == 1) {
    echo "Januar";
} else if($måned == 2) {
    echo "Februar";
} else if($måned == 3) {
    echo "Mars";
} else if($måned == 4) {
    echo "April";
} else if($måned == 5) {
    echo "Mai";
} else if($måned == 6) {
    echo "Juni";
} else if($måned == 7) {
    echo "Juli";
} else if($måned == 8) {
    echo "August";
} else if($måned == 9) {
    echo "September";
} else if($måned == 10) {
    echo "Oktober";
} else if($måned == 11) {
    echo "November";
} else if($måned == 12) {
    echo "Desember";
}

$år = date("Y");
$mittår = rand(2000,2007);

echo "<br>";

if($år - $mittår >= 18) {
    echo "Du er over 18<br>";
} else if($år - $mittår <=18) {
    echo "Du er ikke over 18<br>";
}

$tall3 = 0;

while($tall3 <= 15) {
    echo "$tall3 ";
    $tall3 = $tall3 + 1;
}
echo "<br>";
for($i=0; $i<=15; $i++) {
    echo "$i ";
}
echo "<br>";
$it1 = 1;
while($it1 <= 42) {
    echo "IT1";
    $it1 = $it1 +1;
}
echo "<br>";
for($it2=1; $it2<=42; $it2++) {
    echo "IT2";
}
echo "<br>";
$tall4 = 2;
while($tall4 <= 20) {
    echo "$tall4 ";
    $tall4 = $tall4 + 2;
}

?>

