<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

<style>
  /* Make sure the body and html take up the full height */
  html,
  body {
    height: 100%;
    margin: 0;
  }

  /* The main container holding the content and footer */
  .main-content {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    /* Ensures full viewport height */
    justify-content: space-between;
  }

  /* Pushes footer to the bottom */
  .content-wrapper {
    flex: 1;
  }

  /* Style for the footer */
  footer {
    background-color: black;
    color: white;
    padding: 10px 0;
    text-align: center;
  }
</style>
<?php  include "modal.php"; ?>

<nav class="navbar navbar-expand-lg bg-danger" style="position: fixed; width: 100%; top: 0; z-index: 1000">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="font-size: 23px">RedHope</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="why_donate_blood.php">Why donate blood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="become_a_doner.php">Become a donor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="need_for_blood.php">Need Blood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav" style="align-items: center;"> 
        <?php if(isset($_SESSION['logged_in'])){
          echo ' <li class="nav-item" style="margin-right: 15px; margin-left: 15px;">
          <span style="font-weight: 500;"> '.$_SESSION['name'].' </span>
        </li>
        <li class="nav-item"> <a aria-current="page" href="content/_logout.php"class="btn btn-dark btn-sm" style="border-radius: 8px; text-align: center">logout</a></li>
        ';
        }else{
        echo'
        <li class="nav-item"> <a aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#loginmodal" 
        class="btn btn-dark btn-sm" style="border-radius: 8px; text-align: center">Login</a></li>';}
        ?>
      </ul>
    </div>
  </div>
</nav>