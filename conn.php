<?php
session_start();

   // Database connection parameters 
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db1';

$conn = mysqli_connect($host, $username, $password, $database);

// Check connections
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Optionally, you can set a character set for the connection
mysqli_set_charset($conn, 'utf8');
?>