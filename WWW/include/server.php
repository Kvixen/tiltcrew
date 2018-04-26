<?php
session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

//define('DB_SERVER', '10.158.33.164');
//define('DB_USERNAME', 'tiltcrew');
//define('DB_PASSWORD', 'P64kBpsdA8SgLmd4');
//define('DB_DATABASE', 'user');

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'users');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>

