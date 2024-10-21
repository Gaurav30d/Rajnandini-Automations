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
    <title>Rajnandini Automations and Engineering Works</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="styles.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2KD3+2LkbhE6ZjB6CkKhp2+lq6UW7JpF+DNhiSK9lvfWe5K1oGAWjs6Pfsb" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha384-RzO7ac2w/R9zr9mX2+QHblC6DpSl40NyzD1tJH1D1kjfyFzjl5nTKqAlYExZrMIY" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</head>
<body>
    <header>
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
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            </ul>
          
        </div>
    </div>
</nav>

    </header>

    <main>
        <div class="background-image">
            <div class="overlay">
                <div class="overlay-text">
                    <h1 class="display-4 text-center">Rajnandini</h1>
                    <h1 class="display-4 text-center">Automation and Engineering Works</h1>
                    <h1 class="display-4 text-center">Engineering Excellence for a Smarter Tomorrow</h1>
                </div>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid text-white" style="background-color:green;">
            <div class="container">
                <p class="lead text-center" style="font-size: large; font-weight: bold; padding:35px;">Rajnandini Automations and Engineering Works is your unparalleled partner for Industrial Automation Solutions and Allied products.</p>
            </div>
        </div>
    </main>

    


    <div style="margin-top: 40px;">
    <h1 class="text-center display-4">Our Services</h1>
    <div class="container text-center">
        <!-- First row with two cards -->
        <div class="row">
            <!-- First column with card -->
            <div class="col-12 col-md-6 mb-4">
                <div class="card mx-auto" style="width: 20rem;">
                    <div class="card-body d-flex align-items-center">
                        <!-- Add GIF icon next to the title -->
                        <img src="imgs/automation1.gif" alt="Icon" style="width: 120px; height: 120px; margin-right: 10px;">
                        <!-- Title aligned to the left -->
                        <h5 class="card-title text-start">Customise Industrial Automation Solution</h5>
                    </div>
                </div>
            </div>

            <!-- Second column with card -->
            <div class="col-12 col-md-6 mb-4">
                <div class="card mx-auto" style="width: 20rem;">
                    <div class="card-body d-flex align-items-center">
                        <!-- Add GIF icon next to the title -->
                        <img src="imgs/linear.gif" alt="Icon" style="width: 120px; height: 120px; margin-right: 10px;">
                        <!-- Title aligned to the left -->
                        <h5 class="card-title text-start">Linear Motion Technology</h5>
                    </div>
                </div>
            </div>
        </div>

    
        <div class="row mt-4">
       
            <div class="col-12 col-md-6 mb-4">
                <div class="card mx-auto" style="width: 20rem;">
                    <div class="card-body d-flex align-items-center">
    
                        <img src="imgs/circuit.gif" alt="Icon" style="width: 120px; height: 120px; margin-right: 10px;">
                       
                        <h5 class="card-title text-start">Pneumatic Circuit Design and Automation</h5>
                    </div>
                </div>
            </div>

           
            <div class="col-12 col-md-6 mb-4">
                <div class="card mx-auto" style="width: 20rem;">
                    <div class="card-body d-flex align-items-center">
            
                        <img src="imgs/process_automation.gif" alt="Icon" style="width: 120px; height: 120px; margin-right: 10px;">
                        
                        <h5 class="card-title text-start">Process Automation</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" style="margin-top: 50px;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active c-item">
            <img src="imgs/precision.jpg" class="d-block w-100 c-img" alt="Slide 1">
            <div class="carousel-caption top-0 mt-4">
                <h4 class="display-4 fw-bolder text-capitalize">Rajnandini excels in providing tailored automation concepts and pneumatic circuit designs, catering to the unique needs of OEMs across all industries.</h4>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="imgs/servo.jpg" class="d-block w-100 c-img" alt="Slide 2">
            <div class="carousel-caption top-0 mt-4">
                <h2 class="display-4 fw-bolder text-capitalize">Specializing in linear motion technology, we deliver customized solutions that enhance the performance and efficiency of your machinery.</h2>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="imgs/couplings.jpg" class="d-block w-100 c-img" alt="Slide 3">
            <div class="carousel-caption top-0 mt-4">
                <h4 class="display-4 fw-bolder text-capitalize">Trust us to innovate and evaluate your operations.</h4>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container my-4">
    <h1 class="text-center display-4">Linear Motion Tech Products</h1>
    <div class="row flex-nowrap overflow-auto" id="productContainer"></div>
</div>

<script>
    const products = [
        {
            title: "Precision Lock Nuts",
            image: "imgs/precision.jpg",
            description: "Secure and precise locking solutions for mechanical assemblies"
        },
        {
            title: "Rack and Pinion",
            image: "imgs/rack.jpg",
            description: "Robust components for enhanced performance & longevity."
        },
        {
            title: "Couplings",
            image: "imgs/couplings.jpg",
            description: "Durable and flexible couplings for various industrial applications."
        },
        {
            title: "Ball Screw End Support",
            image: "imgs/ballscrewend.jpg",
            description: "High precision and reliability in supporting ball screws"
        },
        {
            title: "Servo Cylinder",
            image: "imgs/servo.jpg",
            description: "High efficiency servo cylinders for precise control in automation."
        },
        {
            title: "LM Rail & Block",
            image: "imgs/lm.jpg",
            description: "Our LM Rail and Block systems offer smooth linear motion."
        }
    ];

    const productContainer = document.getElementById('productContainer');

    products.forEach(product => {
        const card = `
            <div class="col-auto">
                <div class="card" style="width:300px;">
                    <img src="${product.image}" class="card-img-top" alt="${product.title}">
                    <hr/>
                    <div class="card-body">
                        <h5 class="card-title">${product.title}</h5>
                        <hr/>
                        <p class="card-text">${product.description}</p>
                    </div>
                </div>
            </div>
        `;
        productContainer.innerHTML += card;
    });
</script>

<footer class="footer text-center text-white" style="margin-top: 0px; background-color: green;">
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

        

    
    </body>
    
 

</html>
