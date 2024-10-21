<?php
session_start();

$host = 'localhost';
$user = 'u923928509_rajnandini'; 
$pass = 'R@jn@nd!n!@123';     
$db = 'u923928509_rajnandini';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['productName']; // Existing product name
    $newDescription = $_POST['productDescription']; // New description
    $newLink = $_POST['productLink']; // New link
    $newImage = $_FILES['productImage']['name']; // New image

    // Check if product exists
    $stmt = $conn->prepare("SELECT * FROM products WHERE name = ?");
    $stmt->bind_param("s", $productName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Product exists, update details
        $query = "UPDATE products SET description = ?, link = ?";

        if (!empty($newImage)) {
            // If a new image is uploaded, add it to the query
            $imagePath = "uploads/" . basename($newImage);
            move_uploaded_file($_FILES['productImage']['tmp_name'], $imagePath);
            $query .= ", image = ?";
        }

        $query .= " WHERE name = ?";
        $stmt = $conn->prepare($query);

        if (!empty($newImage)) {
            $stmt->bind_param("ssss", $newDescription, $newLink, $imagePath, $productName);
        } else {
            $stmt->bind_param("sss", $newDescription, $newLink, $productName);
        }

        if ($stmt->execute()) {
            echo "<script>alert('Product updated successfully.'); window.location.href='products.php';</script>";
        } else {
            echo "<script>alert('Error updating product.'); window.location.href='edit_product.php';</script>";
        }
    } else {
        // Product not found
        echo "<script>alert('Product not found. Please enter the correct name.'); window.location.href='products.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
