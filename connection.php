<?php
//$servername = "localhost";
//$username = "root";
//$password = "";

$host = 'remotemysql.com';
$db = 'c98l9GRLrq';
$username = 'c98l9GRLrq';
$password = 'usyd2f5kCr';
$charset = 'utf8mb4';

$pdo = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $conn = new PDO($pdo, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>