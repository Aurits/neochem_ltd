<?php

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "neo";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
