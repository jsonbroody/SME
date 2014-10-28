<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'surveyme');
define('DB_PASSWORD', '8twma5ffTS98UwEA');
define('DB_DATABASE', 'surveyme');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("Cannot connect");
?>