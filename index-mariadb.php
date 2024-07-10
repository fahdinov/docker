<?php
// Basic connection settings
$databaseHost = '172.21.0.2';
$databaseUsername = 'root';
$databasePassword = 'root';
$databaseName = 'phpdb';

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>