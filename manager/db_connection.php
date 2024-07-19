<?php

// Database configuration
$servername = "localhost";
$username = "u859099205_shop";
$password = "aLdGiyC!N3";
$database = "u859099205_shop";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}