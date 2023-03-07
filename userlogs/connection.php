<?php

// Database configuration
$servername = "sql106.epizy.com";
$username = "EPIZ_33732173";
$password = "Example@2020";
$dbname = "epiz_33732173_Sheria";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connected successfully";
}
error_reporting(E_ALL);
ini_set('display_errors', 1);


?>
