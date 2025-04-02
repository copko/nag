<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'eshop');
define('DB_PASSWORD', 'Teples3kovaneponozky');
define('DB_NAME', 'eshop');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Nemôžem sa pripojiť. " . mysqli_connect_error());
}

 mysqli_set_charset($link, "utf8mb4");
?>
