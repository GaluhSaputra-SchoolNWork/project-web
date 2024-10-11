<?php
$servername = "localhost";
$database = "pertemuan2";
$username = "root";
$password = "";

$conn = mysqli_connect("localhost", "root", "", "pertemuan2");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

return $conn;
// mysqli_close($conn);