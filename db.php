<?php
require 'functions.php';
$host = 'localhost:3306';
$dbname = 'taskmanager';
$dbusername = 'root';
$dbpassword = '123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($pdo) {
        echo "Connected to the database successfully!";
    } else {
        echo "Failed to connect to the database.";
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
    
}

