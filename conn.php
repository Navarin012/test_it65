<?php
$servername = "localhost";
$username = "it65309010002";
$password = "it12345";
$dbname = "it65309010002";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
