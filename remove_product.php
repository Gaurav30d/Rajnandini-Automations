<?php
session_start();

// Database connection details
$host = 'localhost';
$user = 'u923928509_rajnandini'; 
$pass = 'R@jn@nd!n!@123';     
$db = 'u923928509_rajnandini';


// Create a connection to the database
$conn = new mysqli($host, $user, $pass, $db);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the product name from the form submission
$productName = $_POST['productName'];

// Prepare the SQL statement to search for the product in the database
$stmt = $conn->prepare("SELECT id FROM products WHERE name = ?");
$stmt->bind_param("s", $productName);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // If product exists, delete it from the database
    $stmt->bind_result($productId);
    $stmt->fetch();

    // Prepare the delete statement
    $deleteStmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $deleteStmt->bind_param("i", $productId);
    $deleteStmt->execute();

    echo "<script>alert('Product removed successfully.'); window.location.href='products.php';</script>";
    $deleteStmt->close();
} else {
    // If product does not exist, show an alert
    echo "<script>alert('No such product found. Please enter the correct product name.'); window.location.href='products.php';</script>";
}

$stmt->close();
$conn->close();
?>
