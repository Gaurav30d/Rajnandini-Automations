<?
session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php'; 

$companyEmail = 'rajnandiniautomations@gmail.com';

if (!isset($_SESSION['email'])) {
   
    echo "<script>alert('Please login first.'); window.location.href='login.php';</script>";
    exit(); 
}


$productId = $_POST['product_id'];
$userEmail = $_SESSION['email'];

$host = 'localhost';
$user = 'u923928509_rajnandini'; 
$pass = 'R@jn@nd!n!@123';     
$db = 'u923928509_rajnandini';


$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("SELECT name, link FROM products WHERE id = ?");
$stmt->bind_param("i", $productId);
$stmt->execute();
$result = $stmt->get_result();

$productName = '';
$productLink = null;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $productName = $row['name'];
    $productLink = $row['link']; 
} else {
    die("Product not found.");
}


$stmt->close();
$conn->close();

if ($row['link'] !== null && $row['link'] !== '') {
    echo "<script>window.location.href='" . $row['link'] . "';</script>";
    exit(); 
}
 else {
  
    $mail = new PHPMailer(true);

    try {
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'rajnandiniautomations@gmail.com'; 
        $mail->Password = 'ibbzponxecbmkfot'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('rajnandiniautomations@gmail.com', 'Company');
        $mail->addAddress($companyEmail);

        
        $mail->isHTML(true);
        $mail->Subject = 'User Interest in Product';
        $mail->Body    = "A user with email <b>$userEmail</b> is interested in the product <b>$productName</b> (Product ID: <b>$productId</b>).";

       
        $mail->send();
        echo "<script>alert('Email sent successfully.'); window.location.href='products.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Email could not be sent. Mailer Error: {$mail->ErrorInfo}'); window.location.href='products.php';</script>";
    }
}
?>