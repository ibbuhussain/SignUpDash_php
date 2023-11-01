<?php
// Database connection settings
$host = "localhost";
$port = 3306;
$user = "root";
$pass = "";
$dbname = "myTry";

// Create a database connection
$db = new mysqli($host, $user, $pass, $dbname, $port);

// Check for a successful connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
echo "";

?>
