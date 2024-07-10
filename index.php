<?php
// Basic connection settings
$databaseHost = getenv("MARIADB_HOST");
$databaseUsername = getenv("MARIADB_ROOT_USER");
$databasePassword = getenv("MARIADB_ROOT_PASSWORD");
$databaseName = getenv("MARIADB_DATABASE");
echo $databaseHost;

// Connect to the database
$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if($mysqli){
    $mysqli->query("DROP TABLE IF EXISTS test");
    $mysqli->query("CREATE TABLE test(id INT)");
    $mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");

    $result = $mysqli->query("SELECT id FROM test ORDER BY id ASC");

    echo "Reverse order...\n";
    for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
        $result->data_seek($row_no);
        $row = $result->fetch_assoc();
        echo " id = " . $row['id'] . "\n";
    }

    echo "Result set order...\n";
    foreach ($result as $row) {
        echo " id = " . $row['id'] . "\n";
    }
 }else{
    print("Connection Failed ");
 }
?>