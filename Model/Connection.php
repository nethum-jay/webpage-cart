<?php

$servername = "localhost";
$username = "Harshani";
$password = "Harshi";
$database = "base_db";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
