<?php
$servername = "172.31.18.46";
$username = "yasin";
$password = "yasin123";
$database = "proje";

// Connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully SERVER 1";

// Close connection
$conn->close();
?> 