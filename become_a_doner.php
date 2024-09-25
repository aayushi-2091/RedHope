<?php  session_start();  ?>
<!doctype html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Become a Doner </title>
    <link rel="icon" href="pictures/logo.png" type="image/logo">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="min-height: 100%; display: flex; flex-direction: column;">
<div class="main-content">
    <?php include "content/header.php"; ?>
    <form class="row g-3" style="display: flex; padding: 3rem; margin-top: 4rem;">
    <?php $error_message = isset($_SESSION['error']) ? $_SESSION['error'] : '';
    if($error_message){
    echo '<script>
    alert("'.htmlspecialchars($error_message) .'");
  </script>';}
    unset($_SESSION['error']); // Clear the error message after using it
    ?>
        <div class="col-md-3">
          <label for="validationDefault03" class="form-label">Age</label>
          <input type="number" class="form-control" id="validationDefault03" required>
        </div>
        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Blood Group</label>
          <select class="form-select" id="validationDefault04" required>
            <option selected disabled value="">Select blood group</option>
            <option value="1">A+</option>
            <option value="2">A-</option>
            <option value="3">B+</option>
            <option value="4">B-</option>
            <option value="5">AB+</option>
            <option value="6">AB-</option>
            <option value="7">O+</option>
            <option value="8">O-</option>
          </select>
        </div>
        <div class="col-md-3" style="width: 26%;">
            <label for="validationDefault05" class="form-label">Gender</label>
            <select class="form-select" id="validationDefault05" required>
              <option selected disabled value="">Select</option>
              <option value="1">Male</option>
              <option value="2">Female</option>
            </select>
          </div>
        <div class="col-md-3">
          <label for="validationDefault06" class="form-label">Address</label>
          <input type="text" class="form-control" id="validationDefault06" required>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>
      <?php include "content/footer.php"; ?>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>