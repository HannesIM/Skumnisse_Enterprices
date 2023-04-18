<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="logginn.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">

            <img class='skumnisser' src="img/skumnisse.png" width="45" height="85">
            <p> < </p>
            <h1 class="headtitle" style="font-size: 23px">Skumnisse Enterprices</h1>
            <p> > </p>
            <img class='skumnisser' src="img/skumnisse.png" width="45" height="85"></div>
            
            <form method='POST' action='#'>
                <div class="row">
                    Brukernavn
                    <i class="fas fa-user"></i>
                    <input type='text' name='brukernavn'>
                    <br>
                </div>
                <div class="row">
                    Passord
                    <i class="fas fa-user"></i>
                    <input type='password' name='passord'>
                    <br>
                </div>
                    <br>
                <div class="row button">
                    <input type='submit' name='submit_login' value='Logg på'>
                </div>
                <div class="signup-link">Har du ikke bruker? <a href="leggtil.php"> Legg til</a></div>
            </form>

    <?php

    if(isset($_POST['submit_login'])) {
        $brukernavn = $_POST['brukernavn'];
        $passord_skjema = $_POST['passord'];

        include "azure.php";

        $sql = "SELECT brukernavn, passord, idbruker, fornavn FROM bruker WHERE brukernavn='$brukernavn'";
        $resultat = $conn->query($sql); 
        $rad = $resultat->fetch_assoc();

        if($rad['passord'] == $passord_skjema) {
            echo "Du blir logget inn";

            session_start();
            $_SESSION['login_id'] = $rad['idbruker'];
            $_SESSION['fornavn'] = $rad['fornavn'];
            header('refresh:1; url=index.php', true, 303);

        } else {
            echo "Feil passord, prøv på nytt";
        }
    }
    
    ?>
    <br>

    

</body>
</html>