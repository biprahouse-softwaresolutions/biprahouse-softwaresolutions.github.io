<?php
// Replace with your MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbase_for_testing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Increment visitor count
$sql = "UPDATE visit_counter SET count = count + 1 WHERE id = 1";
$conn->query($sql);

// Retrieve visitor count
$sql = "SELECT count FROM visit_counter WHERE id = 1";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$count = $row["count"];

$conn->close();
?>