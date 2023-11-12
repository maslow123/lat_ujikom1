<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "pel_ujikom1";

$conn = new DatabaseConnection($host, $username, $password, $database);
$conn->connect();
?>