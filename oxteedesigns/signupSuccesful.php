<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup successful</title>
  <link rel="icon" href="./image/logoIcon.png">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/shopingCartt.css">
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
    <a href="" class="shopingCart"><img src="image/shopping-cart.png" alt=""></a>
  </div>
</nav> 
 <!-- end of navbar -->


    <!-- signup succesful message -->

    <div id='card' class="animated fadeIn">
  <div id='upper-side'>
    <?xml version="1.0" encoding="utf-8"?>
      <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
      <svg version="1.1" id="checkmark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
        <path d="M131.583,92.152l-0.026-0.041c-0.713-1.118-2.197-1.447-3.316-0.734l-31.782,20.257l-4.74-12.65
	c-0.483-1.29-1.882-1.958-3.124-1.493l-0.045,0.017c-1.242,0.465-1.857,1.888-1.374,3.178l5.763,15.382
	c0.131,0.351,0.334,0.65,0.579,0.898c0.028,0.029,0.06,0.052,0.089,0.08c0.08,0.073,0.159,0.147,0.246,0.209
	c0.071,0.051,0.147,0.091,0.222,0.133c0.058,0.033,0.115,0.069,0.175,0.097c0.081,0.037,0.165,0.063,0.249,0.091
	c0.065,0.022,0.128,0.047,0.195,0.063c0.079,0.019,0.159,0.026,0.239,0.037c0.074,0.01,0.147,0.024,0.221,0.027
	c0.097,0.004,0.194-0.006,0.292-0.014c0.055-0.005,0.109-0.003,0.163-0.012c0.323-0.048,0.641-0.16,0.933-0.346l34.305-21.865
	C131.967,94.755,132.296,93.271,131.583,92.152z" />
        <circle fill="none" stroke="#ffffff" stroke-width="5" stroke-miterlimit="10" cx="109.486" cy="104.353" r="32.53" />
      </svg>
      <h3 id='status'>
      Success
    </h3>
  </div>
  <div id='lower-side'>
    <p id='message'>
      Congratulations, your account has been successfully created.
    </p>
    <a href="login.php" id="contBtn">Go To Login</a>
  </div>
</div>

    <!-- signup succesful message -->

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
