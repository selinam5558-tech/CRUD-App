<?php
/* Aiven MySQL connection */
define('DB_SERVER', 'crud-app-selinamcintyre07-2322.j.aivencloud.com');
define('DB_PORT', 2322); // Aiven MySQL port
define('DB_USERNAME', 'avnadmin');
define('DB_PASSWORD', 'AVNS_6byV08x4wxGeggB_4Uq');
define('DB_NAME', 'crud_app');

/* Create mysqli object */
$link = mysqli_init();

/* Aiven requires SSL */
mysqli_ssl_set($link, NULL, NULL, __DIR__ . "/ca.pem", NULL, NULL);

/* Connect */
if (!mysqli_real_connect(
    $link,
    DB_SERVER,
    DB_USERNAME,
    DB_PASSWORD,
    DB_NAME,
    DB_PORT,
    NULL,
    MYSQLI_CLIENT_SSL
)) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
