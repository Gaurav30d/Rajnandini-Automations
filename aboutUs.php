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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha384-RzO7ac2w/R9zr9mX2+QHblC6DpSl40NyzD1tJH1D1kjfyFzjl5nTKqAlYExZrMIY" crossorigin="anonymous"></script>
    <script src="app.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2KD3+2LkbhE6ZjB6CkKhp2+lq6UW7JpF+DNhiSK9lvfWe5K1oGAWjs6Pfsb" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
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


<div class="container mt-3 position-relative">
    <?php if (!empty($search_results)): ?>
        <ul class="dropdown-menu show" style="position: absolute; margin-top: -10px; z-index: 1000; width: 100%;">
            <?php foreach ($search_results as $product): ?>
                <li>
                    <a class="dropdown-item" href="ind_product.php?id=<?php echo $product['id']; ?>">
                        <?php echo htmlspecialchars($product['name']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>



    <div class="jumbotron py-5 mb-4" style=" height:130px; color: white; text-align: center;">
        <div class="container">
            <h2 class="display-4">About US</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card" style="height: 100%; width: 100%; padding: 10px;">
                <h5 class="card-title display-4 text-center">Our Vision</h5>
                <img src="imgs/vission.jpeg" class="card-img-top" alt="Vision Image" style="object-fit: cover;">
                <div class="card-body">
                    <h3 class="lead text-justify">We envision ourselves as the leading provider of industrial automation solutions, setting the benchmark for excellence by 2030. Our goal is to be the most trusted partner for our clients, ensuring their productivity and efficiency.</h3>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card" style="height: 100%; width: 100%; padding: 10px;">
                <h5 class="card-title display-4 text-center">Our Mission</h5>
                <img src="imgs/contact.jpeg" class="card-img-top" alt="Mission Image" style="object-fit: cover;">
                <div class="card-body">
                    <h3 class="lead text-justify">With a consultative approach and a highly skilled team, we deliver solutions, services, and allied products that enhance productivity and conserve energy for industries. We strive to provide innovative and effective solutions tailored to meet the unique needs of each client.</h3>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h3 class="display-4 text-center">Our Values</h3>
        <div id="card-container" class="row">
            <!-- Cards will be injected here by JavaScript -->
        </div>

        <script>
            const cardData = [
                {
                    "image": "imgs/innovations.png",
                    "title": "Innovation",
                    "description": "Constantly seeking and implementing the latest advancements in technology."
                },
                {
                    "image": "imgs/excellence.png",
                    "title": "Excellence",
                    "description": "Commitment to achieving the highest standards in everything we do."
                },
                {
                    "image": "imgs/loyal.png",
                    "title": "Loyalty",
                    "description": "Fostering long-term relationships with our clients and partners."
                },
                {
                    "image": "imgs/team.png",
                    "title": "Team Work",
                    "description": "Collaborating effectively to achieve common goals."
                },
                {
                    "image": "imgs/honest.png",
                    "title": "Honesty",
                    "description": "Building trust through transparency and integrity."
                }
            ];

            const cardContainer = document.getElementById("card-container");

            cardData.forEach((card) => {
                const cardElement = `
                <div class="col-12 mb-4 d-flex justify-content-center">
                    <div class="card d-flex flex-row" style="width: 100%; max-width: 600px;">
                        <img src="${card.image}" class="card-img-left" alt="Card Image" style="width: 150px; height: 120px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">${card.title}</h5>
                            <p class="card-text">${card.description}</p>
                        </div>
                    </div>
                </div>`;
                cardContainer.innerHTML += cardElement;
            });
        </script>
    </div>

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
