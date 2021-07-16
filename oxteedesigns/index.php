<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

  <!-- start the navbar -->
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href=""><img src="image/logo.png" alt="logo"></a>
      <form class="d-flex inputWithIcon">
        <input class="form-control me-2" type="search" placeholder="Search for products or designs " aria-label="Search">
        <button class="serachIcon" type="submit"><i class="fas fa-search"></i></button>
      </form>
      <div>
        <ul class="login">
          <a href="login.php">
            <li>Login</li>
          </a>
          <a href="signup.php">
            <li>Signup</li>
          </a>

        </ul>
      </div>

      <a href="" class="heartIcon"><i class="far fa-heart"></i></a>
      <a href="cart.php" class="shopingCart"><img src="image/shopping-cart.png" alt="">
        <span class="badge"></span>
      </a>
      <div id="carts-product">
        <div></div>
      </div>
    </div>
    <center>
      <div class="container customeshop">
        <div class="row">
          <a href="">
            <div class="col creat">
              <h5>Create</h5>
              <p>Custome design</p>

            </div>
          </a>
          <a href="">
            <div class="col active">
              <h5 class="shop">Shop</h5>
              <p>Marketplace design</p>
              <hr class="rounded">
            </div>
          </a>
        </div>
    </center>

  </nav>
  <!-- end of navbar -->
  <section class="coverImg">
    <img src="./image/background-cover.jpg" alt="">
    <h2>FIND YOUR INSPIRATION DESIGN</h2>
    <!-- <P>From millions of things designed and sold by artists, find what feels like you.</P> -->
  </section>
  <!-- image gallery -->
  <center>
    <h2 class="hitlist">The Hit List</h2>
  </center>
  <section class="evergreen-topic">
    <div class="container text-ceneter">

      <div class="gallery">
        <a href="">
          <img src="./image/couples.jfif" alt="" width="600" height="400">
          <div class="desc">Couples</div>
        </a>

      </div>

      <div class="gallery">
        <a href="">
          <img src="./image/funny.jfif" alt="Forest" width="600" height="400">
          <div class="desc">Funny</div>
        </a>

      </div>

      <div class="gallery">
        <a href="">
          <img src="./image/birthday.jfif" alt="Northern Lights" width="600" height="400">
          <div class="desc">Birthday</div>
        </a>

      </div>

      <div class="gallery">
        <a href="">
          <img src="./image/geek.jfif" alt="Mountains" width="600" height="400">
          <div class="desc">Geek</div>
        </a>

      </div>
      <div class="gallery">
        <a href="">
          <img src="./image/science.jfif" alt="Mountains" width="600" height="400">
          <div class="desc">Science</div>
        </a>

      </div>
      <div class="gallery">
        <a href="">
          <img src="./image/vintage.jfif" alt="Mountains" width="600" height="400">
          <div class="desc">Vintage</div>
        </a>

      </div>
      <div class="gallery">
        <a href="">
          <img src="./image/funnygym.jfif" alt="Mountains" width="600" height="400">
          <div class="desc">Funny Gym</div>
        </a>

      </div>
      <div class="gallery">
        <a href="">
          <img src="./image/vegan.jfif" alt="Mountains" width="600" height="400">
          <div class="desc">Vegan</div>
        </a>

      </div>
    </div>
  </section>
  <!-- image gallery -->
  <!-- fuetured product -->
  <center>
    <h2 class="Featured">Featured Shirts Designs</h2>
  </center>
  <div class="width">
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'oxteedesigns');

    if (isset($_POST['submit'])) {

      $id = $_POST["id"];



      $query = "SELECT * from produit where id='$id'";
      $result = mysqli_query($conn, $query);
      if (!$result) {
        die("database error");
      }
      while ($row = mysqli_fetch_assoc($result)) {
        $sql = "INSERT INTO `cart` ( `image`, `name`, `price`) VALUES ('$row[image]', '$row[name]' , '$row[price]');";
        $conn->query($sql);
      }
    }
    ?>
    <div class="grid">

      <?php

      $conn = mysqli_connect('localhost', 'root', '', 'oxteedesigns');

      $query = "SELECT * from produit order by id";
      $result = mysqli_query($conn, $query);

      if (!$result) {
        die("database error");
      }

      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <form method="post">
          <div class="col-md-4">
            <div class="cardd" style="width: 18rem;">
              <img name='img' src="<?php echo $row["image"] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 name='name' class="card-title product-title"><?php echo $row["name"] ?></h5>
                <ul class="d-flex stars">
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                </ul>
                <div class="d-flex price">
                  <p name='price' class="card-text product-price"><?php echo $row["price"] ?> $</p>
                  <a href="#" class="ms-3 product-favorite"><i class="far fa-heart"></i></a>
                </div>
                <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                <input name="submit" type="submit" value="Add To Cart" class="btn btn-primary addcart">
              </div>
            </div>
          </div>
        </form>
      <?php } ?>
    </div>
  </div>
  <!-- fuetured product -->

  <!-- worldwide shiping section -->
  <section class="freerturen">
    <div class="worldwide">
      <div class="card">
        <img src="./image/worldwide.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Worldwide Shipping</h6>
          <p class="card-text">Available as Standard or Express delivery</p>
          <a href="#" class="btn btn-primary btnone">Learn more</a>

        </div>
      </div>
      <div class="card">
        <img src="./image/secure-payment.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Secure Payments</h6>
          <p class="card-text">100% Secure payment with 256-bit SSL Encryption</p>
          <a href="#" class="btn btn-primary btntwo">Learn more</a>

        </div>
      </div>
      <div class="card">
        <img src="./image/return-box.png" class="card-img-top" alt="...">
        <div class="card-body ">
          <h6 class="card-title">Free Return</h6>
          <p class="card-text">Exchange or money back guarantee for all orders.</p>
          <a href="#" class="btn btn-primary btnthree">Learn more</a>

        </div>
      </div>
      <div class="card">
        <img src="./image/economy.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Local Support</h6>
          <p class="card-text">24/7 Dedicated support</p>
          <a href="#" class="btn btn-primary submitarequest btnfour">Submit a request</a>

        </div>
      </div>
    </div>
  </section>
  <!-- worldwide shiping section -->

  <!-- newslatter input -->

  <form action="" class="newsletter">
    <h2>Subscribe Our Newsletter & Join US</h2>
    <p>10% off, promos, and the best indie art ever!</p>
    <div class="newsletter-box">
      <i class="fas fa-envelope"></i>
      <input class="emailbox" type="email" name="" value="" placeholder="Enter your email adress">
      <button type="button" name="button">Subscribe</button>
    </div>
  </form>

  <!-- start footer -->
  <footer>

    <div class="main-content" id="Contact">
      <div class="left box p-5">
        <h2>About us</h2>
        <div class="content">
          <p>Oxtee designs Marketplace has something for everyone.
            Whether you’re more of an artsy design buyer or more of a funny meme person, there’s no shortage of choices in any category you can think of. Simply search for your favorite topic and browse. With millions of designs and hundreds of products to put them on, expressing yourself with the Oxtee designs Marketplace knows no limit.</p>
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
  <script src="./js/script.js"></script>

</body>

</html>