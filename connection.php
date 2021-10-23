<?php

$databaseHost = 'localhost';
$databaseName = 'test2';
$databaseUsername = 'root';
$databasePassword = '1234';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
// ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Current-Root-Password';
// FLUSH PRIVILEGES;
?>
