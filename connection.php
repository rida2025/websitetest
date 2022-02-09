<?php
//$servername = "localhost";
//$username = "root";
//$password = "";

$host = 'remotemysql.com';
$db = 'c98l9GRLrq';
$username = 'c98l9GRLrq';
$password = 'usyd2f5kCr';
$charset = 'utf8mb4';

$conn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($conn, $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>