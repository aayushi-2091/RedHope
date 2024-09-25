<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '_dbconnect.php';
    $email=$_POST["email"];
    $password=$_POST["password"];
    $redirect = $_POST['redirect']; 

    $sql="select * from `users` where email='$email'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if ($num == 1){
      while($row=mysqli_fetch_assoc($result)){

          if (password_verify($password, $row['password'])){ 
              $_SESSION['logged_in'] = true;
              $_SESSION['name'] = $row['name'];
              header("Location: $redirect");
              exit;
          }
          else{
            $_SESSION['error'] = 'password not metched';
          }
        }
    }
    else{
        $_SESSION['error'] = 'email id not found';
    }
    header("Location: $redirect");
}

?>