<?php



define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "Regi-Boostrap");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);




//$db_host = "localhost";
//$db_name = "db";
//$db_user = "root";
//$db_pass = "password";


//$conn = new mysqli($db_host, $db_name, $db_user, $db_pass );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

