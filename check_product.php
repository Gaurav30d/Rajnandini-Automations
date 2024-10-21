<?php
// Database connection
$host = 'localhost';
$user = 'u923928509_rajnandini'; 
$pass = 'R@jn@nd!n!@123';     
$db = 'u923928509_rajnandini';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];

    
    $stmt = $conn->prepare("SELECT link FROM products WHERE id = ?");
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $stmt->bind_result($link);
    $stmt->fetch();
    $stmt->close();

   
    echo json_encode(['link' => $link]);
}

$conn->close();
?>
