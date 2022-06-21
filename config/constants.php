<?php

session_start();

//konstansok
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'zenelejatszo');
define('SITEURL', 'http://localhost/webprog/');

//connect the database
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
//database kivalasztasa
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
