<?php
// Database connection
$host = 'localhost';
$user = 'root'; // Update as necessary
$pass = '';     // Add your password if applicable
$db = 'productdb'; // Your database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email']; // Email as the username
    $password = $_POST['password'];

    // Check if the email already exists in the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email already exists
        header("Location: register.html?status=duplicate");
    } else {
        // Insert user into the database with plain text password
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, role) VALUES (?, ?, ?, ?, 'user')");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);

        if ($stmt->execute()) {
            // Redirect to registration page with success message
            header("Location: register.html?status=success");
        } else {
            // Redirect to registration page with error message
            header("Location: login.php?status=error&message=" . urlencode($stmt->error));
        }
    }

    $stmt->close();
}

$conn->close();
?>
