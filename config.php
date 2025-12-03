<?php
/* Aiven MySQL connection */
define('DB_SERVER', 'crud-app-selinamcintyre07-2322.j.aivencloud.com');
define('DB_PORT', 18405);  
define('DB_USERNAME', 'avnadmin');
define('DB_PASSWORD', 'AVNS_6byV08x4wxGeggB_4Uq');
define('DB_NAME', 'crud_app');

/* Attempt to connect to MySQL database with port */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

/* Check connection */
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
