<?php 
session_start();
require "inc/connect.php";

$errors = [
    'usernameError' => '',
    'emailError' => '',
    'passwordError' => '',
    ];
$username ='';
$password = '';


if (isset($_POST['submit'])){
    $username =   mysqli_real_escape_string($link, $_POST["username"]);
    $password =    mysqli_real_escape_string($link, $_POST["password"]);

if(empty($username)){
  $errors['usernameError'] = 'Please fill in this field.';
}
elseif(strlen($username)<= 4) {
    $errors['usernameError'] = 'username must be more than four character.';

}
if(isset($_POST['checkbox']) && $_POST['checkbox']!="")
{
    echo 'checkbox is checked'; 
}

  if(empty($password)){
    $errors['passwordError'] = 'Please fill in this field.'; 
}

}




?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" href="./image/logoIcon.png">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
<!-- start the navbar -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="image/logo.png" alt="logo"></a>
    <form class="d-flex inputWithIcon">
      <input class="form-control me-2" type="search" placeholder="Search for products or designs " aria-label="Search">
      <button  class="serachIcon" type="submit"><i class="fas fa-search"></i></button>
    </form>
    <a href="cart.php" class="shopingCart"><img src="image/shopping-cart.png" alt=""></a>
  </div>
</nav> 
 <!-- end of navbar -->

<!-- start registration form -->
<center class="joinOxtee">
   <h4>Log in</h4>
   <P>Don't have an account yet? <a href="signup.php" class="login">Sign up</a></P>
 </center>
  
    <div class="d-flex justify-content-center align-items-center form-control-lg">
      <form action="login.php" class="formwidth" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" value = "<?php echo $username ?>" id="username" aria-describedby="username" >
          <div id="emailHelp" class="form-text error"><?php echo $errors['usernameError'] ?> </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" value = "<?php echo $password ?>">
          <div id="emailHelp" class="form-text error"><?php echo $errors['passwordError'] ?></div>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1" name = "chekbox">Email me special offers</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary" id = 'btn'>Login</button>
      </form>
    </div>
    <!-- end registrtion form -->

    
    <!-- start footer -->
    <footer>
   
    <div class="main-content" id="Contact">
      <div class="left box p-5">
        <h2>About us</h2>
        <div class="content">
          <p>Save the Children's work saves and improves children's lives around the world. We work to ensure children
            have healthcare, food and shelter, as well as learning and child protection services when children need it
            most. We are committed to helping all children achieve their full potential by ensuring they grow up
            healthy, receive a good education, and stay safe.</p>
          <div class="social">
            <a href="https://facebook.com/coding.np"><span class="fab fa-facebook-f"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a>
            <a href="https://instagram.com/coding.np"><span class="fab fa-instagram"></span></a>
            <a href="https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
          </div>
        </div>
      </div>

      <div class="center box p-5">
        <h2>Address</h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text"> Solicode, Tanger</span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+089-765432100</span>
          </div>
          <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text">savethechildren@example.com</span>
          </div>
        </div>
      </div>

      <div class="right box p-5">
        <h2>Contact us</h2>
        <div class="content">
          <form action="#">
            <div class="email">
              <div class="text">Email *</div>
              <input type="email" required>
            </div>
            <div class="msg">
              <div class="text">Message *</div>
              <textarea rows="2" cols="25" required></textarea>
            </div>
            <div class="btn">
              <button type="submit">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="bottom">
      <center>
        <span class="credit">Created By <a href="'#">Abdelfattah</a> | </span>
        <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
      </center>
    </div>
    </footer>

    <!-- end footer -->


  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/app.js"></script>
</body>

</html>