<?php
$servername = "localhost";
$database = "u637730811_zynah_overseas";
$username = "u637730811_zynah_overseas";
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