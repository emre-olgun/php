<?php
$servername = "172.31.43.164";
$username = "emre";
$password = "123456";
$database = "task";

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
