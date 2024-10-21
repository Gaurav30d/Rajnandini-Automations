<?php
session_start(); 

if (isset($_SESSION['first_name'])) {
    $userGreeting = "Hello, " . $_SESSION['first_name'];
    $loginText = "Logout";
    $loginHref = "logout.php"; 
} else {
    $userGreeting = "Hello, User";
    $loginText = "Login";
    $loginHref = "login.php"; 
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Rajnandini Automations</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="styles.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <style>
          .btn-custom {
            width: 100%;
            max-width: 250px;
            margin-bottom: 10px;
        }

        /* Ensuring footer sticks to bottom for small screens */
        footer {
            width: 100%;
        }
     

        
    </style>
 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha384-RzO7ac2w/R9zr9mX2+QHblC6DpSl40NyzD1tJH1D1kjfyFzjl5nTKqAlYExZrMIY" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="imgs/Logo_png.png" alt="Brand Logo" class="img-fluid" style="max-width: 100px; height: 55px;">
        </a>
        <span style="color:green; font-weight:bold;">
            <?php echo $userGreeting; ?>
        </span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="aboutUs.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="contactUs.php">Contact Us</a></li>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                    <li class="nav-item"><a class="nav-link" href="admin.php">Admin Panel</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="faqs.php">FAQS</a></li>
                <?php endif; ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo $loginHref; ?>"><?php echo $loginText; ?></a></li>
            </ul>
            
        </div>
    </div>
</nav>
<div class="jumbotron py-5 px-5 mb-4" style="background-color: green; height: 150px; color: white;">
    <div class="container text-center">
        <h2 class="display-4">Admin Panel</h2>
    </div>
</div>


    <div class="container text-center mb-4">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <button class="btn btn-custom" style="background-color: #28a745;color: white;" onclick="location.href='add_product.html'">Add Product</button>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <button class="btn btn-custom" style="background-color: #28a745;color: white;" onclick="location.href='remove_product.html'">Remove Product</button>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <button class="btn btn-custom" style="background-color: #28a745;color: white;" onclick="location.href='edit_product.html'">Edit Product</button>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <button class="btn btn-custom" style="background-color: #28a745;color: white;" onclick="location.href='show_products.php'">Show Products</button>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <button class="btn btn-custom" style="background-color: #28a745;color: white;" onclick="location.href='show_users.php'">Show Users</button>
            </div>
        </div>
    </div>

    <footer class="footer text-center text-white fixed-bottom" style="background-color: green;">
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.indiamart.com/rajnandini-automation/?srsltid=AfmBOookvLXYE8rR4nAe61M16uJ9l39COTzy5lVUXuxWhKbJFP8ABXqT" role="button">
                    <i class="fab fa-google"></i>
                </a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/vikramsinh-mhalungekar-a5a817220/?originalSubdomain=in" role="button">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </section>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2KD3+2LkbhE6ZjB6CkKhp2+lq6UW7JpF+DNhiSK9lvfWe5K1oGAWjs6Pfsb" crossorigin="anonymous"></script>

</body>
</html>
