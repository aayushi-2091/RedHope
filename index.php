<?php  session_start();  ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RedHope</title>
  <link rel="icon" href="pictures/logo.png" type="image/logo">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <div class="main-content">
    <?php include "content/header.php";  ?>
    
    <div class="head text-center" style="margin-top: 4rem;">
    <?php $error_message = isset($_SESSION['error']) ? $_SESSION['error'] : '';
    if($error_message){
    echo '<script>
    alert("'.htmlspecialchars($error_message) .'");
  </script>';}
    unset($_SESSION['error']); // Clear the error message after using it
    ?>
      <h2 style="margin-top: 10px;">Welcome to our page, donate and get blood in a quick way!!!</h2>
    </div>
    <div>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="pictures/hand.jpg" class="d-block w-100" alt="hand" style="height: 500px; padding: 48px;">
          </div>
          <div class="carousel-item">
            <img src="pictures/drop.jfif" class="d-block w-100" alt="drop" style="height: 500px; padding: 48px;">
          </div>
          <div class="carousel-item">
            <img src="pictures/donate.png" class="d-block w-100" alt="donate" style="height: 500px; padding: 48px;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="container my-4">
      <div class="row justify-content-around">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Need for Blood</h5>
            <p class="card-text">Blood is essential for saving lives in emergencies, surgeries, and the treatment of medical conditions like cancer, anemia, and blood disorders. It helps patients recover from trauma, childbirth complications, and chronic diseases. Since blood cannot be manufactured and has a limited shelf life, regular donations are vital to meet ongoing demand and ensure that life-saving transfusions are always available. Your donation can make a life-saving difference!</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Blood Tips</h5>
            <p class="card-text">1.Eligibility: Ensure you meet the basic requirements (age, weight, health) before donating <br>2.Bring ID: Carry a valid ID for registration <br>3.Wear Comfortable Clothing: Short sleeves or sleeves that can be easily rolled up are easily. <br>4.Relax: Stay calm and relaxed during the donation process. <br>5.Stay Hydrated: Drink plenty of water before and after donating blood. <br>6.Eat a Healthy Meal: Have a balanced meal rich in iron and vitamin C before donating. </p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Who could you help</h5>
            <p class="card-text">By donating blood, you can help accident victims, surgery patients, cancer patients, those with chronic illnesses like anemia or sickle cell disease, and mothers experiencing complications during childbirth. Your donation could save a life and provide critical support to those in need of transfusions.</p>
          </div>
        </div>
      </div>
    </div>
    <?php include "content/footer.php"; ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  
</body>


</html>