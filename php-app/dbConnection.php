<?php
$databaseHost = getenv("MARIADB_HOST");
$databaseUsername = getenv("MARIADB_ROOT_USER");
$databasePassword = getenv("MARIADB_ROOT_PASSWORD");
$databaseName = getenv("MARIADB_DATABASE");

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
