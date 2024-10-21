<?php
$host = 'localhost';
$user = 'u923928509_rajnandini'; 
$pass = 'R@jn@nd!n!@123';     
$db = 'u923928509_rajnandini';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productLink = $_POST['productLink']; 

    
    $targetDir = "uploads/";
    $imageFileName = basename($_FILES["productImage"]["name"]);
    $targetFilePath = $targetDir . $imageFileName;
    move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFilePath);

    $stmt = $conn->prepare("INSERT INTO products (name, description, image, link) VALUES (?, ?, ?, ?)"); 
    $stmt->bind_param("ssss", $productName, $productDescription, $targetFilePath, $productLink); 

    if ($stmt->execute()) {
        echo "<script>alert('Product added successfully.'); window.location.href='products.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
