<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    require '_dbconnect.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $redirect = $_POST['redirect']; 
    
    $sql="select * from `users` where email='$email'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if ($num ==0){
        $hash=password_hash($pass,PASSWORD_DEFAULT);
        $sql1 = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$hash');";
        $resul1 = mysqli_query($conn,$sql1);
        $_SESSION['logged_in'] = true;
        $_SESSION['name'] = $name;
        header("Location: $redirect");
        exit;
    }
    else{
        $_SESSION['error'] = 'email alredy exists';
    }
    header("Location: $redirect");
}
?>