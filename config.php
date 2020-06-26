<?php

define('DB_SERVER', 'ec2-52-87-135-240.compute-1.amazonaws.com');
define('DB_USERNAME', 'zxrphqejgdjlbz');
define('DB_PASSWORD', '7b2547c34fa2cef8435147f78174460c17c37a241f240c2acac7b72a9d37c837');
define('DB_NAME', 'dc89t3rs7aj0p9');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>