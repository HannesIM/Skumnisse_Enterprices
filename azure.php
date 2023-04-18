
<?php

$conn = mysqli_init(); mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); mysqli_real_connect($conn, 
"hannesim.mysql.database.azure.com", 
"HannesIM", 
"mittpassord123_", 
"skumnisse", 
3306, MYSQLI_CLIENT_SSL);

?>
