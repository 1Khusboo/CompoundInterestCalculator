<?php

if(isset($_POST['name'])){
  $conn=mysqli_connect('localhost','root','');

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];

if($password==$confirm){
  $sql= "INSERT INTO `calculator`.`register` (`name`, `phone`, `email`, `password`, `confirm`) VALUES ('$name', '$phone', '$email', '$password', '$confirm');";
  if($conn->query($sql)){
    
    header('Location:calculator.php');
    echo "<script> alert('Registration successful');</script>";
  }else{
    echo "$conn->error";
    header('Location:index.php');
  }
}else{
  echo "<script> alert('Password not match');</script>";
}



$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "navbar.php";
    ?>
     <div class="" style="width:80%;height:80%; margin:auto;" >
        <form  style=" margin:10px auto;" action="register.php" method="POST">
        <div class="mb-3" style="margin:auto;">
    <label for="exampleInputname1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputname1" name="name" required>
  </div>
  <div class="mb-3" style="margin:auto;">
    <label for="exampleInputPhone1" class="form-label">Phone</label>
    <input type="number" class="form-control" id="exampleInputPhone1" name="phone" required>
  </div>
  <div class="mb-3"  style="margin:auto;">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    
  </div>
  <div class="mb-3" style="margin:auto;">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <div class="mb-3" style="margin:auto;">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="confirm" required>
  </div>
  <a href="calculator.php"><button type="submit" class="btn btn-primary" >Register</button><a>
</form>
        </div>
</body>
</html>