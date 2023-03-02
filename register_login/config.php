<?php
// Fresno State PostgreSQL Database credentials
define('HOST', '');
define('PORT', '');
define('DB', '');
define('USER', '');
define('PASS', '');

// Attempt to connect to the PostgreSQL database 
$con = pg_connect("host=" . HOST . " port=" . PORT . " dbname=" . DB . " user=" . USER . " password=" . PASS)
       or die ("Could not connect to the database.\n");
?>
    
