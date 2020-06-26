<?php

define('DB_SERVER', 'ec2-34-200-72-77.compute-1.amazonaws.com');
define('DB_USERNAME', 'bjcmcdrnkumbvz');
define('DB_PASSWORD', '78db208b170ce33a0b1f40501400ca03318a38331c9df70d4469ffe534f65939');
define('DB_NAME', 'dc9tmharsdf08g');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>