<?php

// Display Errors
ini_set('error_reporting',E_ALL);
ini_set('display_errors',1);

//MySQL Connection Contstants

define('DB_DSN','mysql:host=localhost;dbname=chicken_chef_lorette');
define('DB_NAME','chicken_chef_lorette');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','Alexia888');

require_once('functions.php');

$dbh = getConnect();

?>
