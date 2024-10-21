<?php
// Start the session
session_start();

// Database connection
$host = 'localhost';  
$user = 'root';       
$pass = '';           
$db = 'productdb';    

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission (search query)
$search_results = [];  // This will store the search results
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search'])) {
    $search_input = trim($_POST['search']);
    
    // Only perform search if the input is not empty
    if (!empty($search_input)) {
        // Prepare the query to search products by name
        $stmt = $conn->prepare("SELECT id, name FROM products WHERE name LIKE ?");
        $like_search = '%' . $search_input . '%';
        $stmt->bind_param("s", $like_search);
        $stmt->execute();
        $result = $stmt->get_result();

        // Fetch matching products and store in $search_results
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $search_results[] = $row;
            }
        }
        $stmt->close();
    }
}

// Close database connection
$conn->close();
?>
