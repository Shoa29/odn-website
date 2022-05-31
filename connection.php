<?php
$servername = "localhost";
$database = "u334027775_odn";
$username = "u334027775_odn_shoa";
$password = "Dreamers29";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo 'error';
}
mysqli_close($conn);
?>