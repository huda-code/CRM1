<?php
$host = 'localhost';
$db = 'crm_database';  // You'll create this in Step 5
$user = 'root';        // Default XAMPP MySQL username
$password = '';        // Leave blank if no password is set

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
