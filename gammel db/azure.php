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

$con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); mysqli_real_connect($con, 
"hannesim.mysql.database.azure.com", 
"HannesIM", 
"mittpassord123_", 
"pokedex_db", 
3306, MYSQLI_CLIENT_SSL);

?>

</body>
</html>