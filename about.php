<?php  session_start();  ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us | RedHope</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .about-section {
            height: 80vh; /* Adjust this value as needed */
            overflow-y: auto; /* Enables vertical scrolling if content exceeds height */
            padding: 1.5rem;
            background-color: #ffffff;
            border-radius: 0.375rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        .section-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .section-content h6 {
            font-size: 1.125rem;
            color: #6c757d;
        }
        .section-content h4 {
            font-size: 1.5rem;
            margin-top: 1.5rem;
            color: #343a40;
        }
        .section-content {
            margin-top: 1.5rem;
        }
        .section-content img {
            width: 100%;
            border-radius: 0.375rem;
        }
    </style>
</head>

<body>
<?php include "content/header.php" ?>
    <section class="container ">
    <?php $error_message = isset($_SESSION['error']) ? $_SESSION['error'] : '';
    if($error_message){
    echo '<script>
    alert("'.htmlspecialchars($error_message) .'");
  </script>';}
    unset($_SESSION['error']); // Clear the error message after using it
    ?>
        <div class="row">
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <div class="text-center ">
                    <h1 class="section-title">About Us</h1>
                </div>
                <div class="about-section">
                    <p>Welcome to <strong>RedHope</strong>, where we are dedicated to revolutionizing the way blood donation is organized and managed. Our mission is to streamline the donation process, connect donors with those in need, and ultimately save lives through innovative technology and compassionate service.</p>
                    
                    <h4>Our Mission</h4>
                    <p>Our primary goal is to simplify and enhance the blood donation experience for both donors and recipients. We understand that every donation can make a significant difference, and our platform aims to make it as easy and efficient as possible for people to contribute. By leveraging technology, we seek to eliminate the barriers that can sometimes hinder the donation process and ensure that the right blood reaches the right person at the right time.</p>
                    
                    <h4>Join Us</h4>
                    <p>We invite you to be a part of this life-saving mission. Whether you are a donor looking to make a difference, a healthcare provider seeking an efficient management solution, or someone who believes in the power of community, we welcome you to join us. Together, we can transform the way blood donation is managed and ensure that every drop counts.</p>
                    
                    <p>Thank you for visiting our site and supporting our cause. For any questions or to get involved, please don’t hesitate to contact us. Your participation is vital in helping us achieve our vision of a world where every patient receives the blood they need and every donor’s contribution is valued and optimized.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mt-4">
                    <img src="pictures/about1.jpg" alt="About Us" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <?php  include "content/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>
