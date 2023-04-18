<?php

$server = "localhost";
$brukernavn = "root";
$passord = "mittpassord123_";
$database = "pokedex_db";

$kobling = new mysqli($server, $brukernavn, $passord, $database);


if ($kobling->connect_error) {
    die("Noe gikk galt: " . $kobling->connect_error);
} else {
    echo "Tilkobingen virker <br>";
}


?>