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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
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
              <main>  
                <div class=" jumbotron py-5 px-5 mb-4" style="height: 150px; color: white;">
                    <div class="container">
                        <h2 class="display-4">Frequently Asked Questions by our Customers</h2>
                       
                    </div></div>
          
                    <div id="faq" class="accordion" id="acc">
                       
                    </div>
                    
          
                    <script type="text/javascript">
                      const faqData = [
                      {
      "question": "What is industrial automation?",
      "answer": "It’s the use of control systems like computers and robots to manage processes and equipment in industries, improving efficiency and safety."
    },
    {
      "question": "How can custom automation solutions benefit my business?",
      "answer": "They enhance efficiency, reduce labor costs, and improve product quality, leading to higher profitability."
    },
    {
      "question": "What industries do you serve?",
      "answer": "We serve various industries, including manufacturing, automotive, pharmaceuticals, and food and beverage."
    },
    {
      "question": "What is linear motion technology?",
      "answer": "It involves systems that move objects in a straight line, crucial for applications requiring precise movement."
    },
    {
      "question": "What pneumatic circuit designs do you offer?",
      "answer": "We provide tailored pneumatic circuit designs to optimize efficiency and enhance performance."
    },
    {
      "question": "How do you ensure the quality of your solutions?",
      "answer": "We follow strict quality assurance processes and adhere to industry standards during design and implementation."
    },
    {
      "question": "Do you provide support after installation?",
      "answer": "Yes, we offer ongoing support, including troubleshooting and maintenance."
    },
    {
      "question": "How can I request a consultation?",
      "answer": "Contact us through our website’s form or call our office to discuss your automation needs."
    },
    {
      "question": "What are the benefits of energy conservation?",
      "answer": "It reduces operational costs and enhances sustainability while complying with regulations."
    },
    {
      "question": "What sets you apart from other providers?",
      "answer": "Our consultative approach and commitment to customized solutions that drive productivity distinguish us from competitors."
    }
  ];
                    
                      const faq = document.getElementById('faq'); 
                      let accordion = ''; 
                      faqData.forEach((item, index) => {
            accordion += `
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading${index}">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${index}" aria-expanded="false" aria-controls="collapse${index}">
                    ${index + 1}. ${item.question}
                  </button>
                </h2>
                <div id="collapse${index}" class="accordion-collapse collapse" aria-labelledby="heading${index}" data-bs-parent="#faq">
                  <div class="accordion-body">
                    ${item.answer}
                  </div>
                </div>
              </div>`;
          });
          
                    
                      faq.innerHTML = accordion; 
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