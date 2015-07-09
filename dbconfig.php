<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "open_db";
$connection =  mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
mysqli_set_charset($connection,'utf-8');

?>