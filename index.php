<?php
// Basic connection settings
$databaseHost = getenv("MARIADB_HOST");
$databaseUsername = getenv("MARIADB_ROOT_USER");
$databasePassword = getenv("MARIADB_ROOT_PASSWORD");
$databaseName = getenv("MARIADB_DATABASE");

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if($mysqli){
    print("Connection Established Successfully");
 }else{
    print("Connection Failed ");
 }
?>