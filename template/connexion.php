<?php

// Database credentials
$host = 'localhost';
$dbname = 'cckls';
$username = 'root';
$password = 'root';

// Connection to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close the connection (optional, as PDO closes it automatically when the script ends)
$pdo = null;

?>