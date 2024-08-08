<?php
$host     = "localhost"; // Database Host
$user     = "root"; // Database Username
$password = ""; // Database's user Password
$database = "security"; // Database Name

$mysqli = new mysqli($host, $user, $password, $database);

// Checking Connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$mysqli->set_charset("utf8mb4");

// Settings
include "config_settings.php";
?>