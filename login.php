<?php
if(isset($_POST['email'])){
$conn=mysqli_connect('localhost','root','');

$email=$_POST['email'];
$password=$_POST['password'];

$sql="Select * from `calculator`.`register` where email='$email'AND password='$password'";
$result=$conn->query($sql);
if(mysqli_num_rows($result)<1){
  echo "$conn->error";
  header('Location:login.php');

}else{
  header('Location:calculator.php');
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
        <form  style=" margin:10px auto;" action="login.php" method="POST">
  <div class="mb-3"  style="margin:auto;">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required >
    
  </div>
  <div class="mb-3" style="margin:auto;">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary" >Login</button>
</form>
        </div>
</body>
</html>