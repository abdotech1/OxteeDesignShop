<?php
if (isset($_POST['remove'])) {
  $conn = mysqli_connect('localhost', 'root', '', 'oxteedesigns');
  $id = $_POST['id'];
  $query = " DELETE FROM `cart` WHERE `cart`.`id` = '$id'";
  $result = mysqli_query($conn, $query);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oxteedesigns | shoping cart</title>
  <link rel="icon" href="./image/logoIcon.png">
  <link rel="stylesheet" href="css/shopingCartt.css">
  <title>cart</title>
</head>

<body>
  <!-- start the navbar -->

  <h1>Shopping Cart</h1>

  <div class="shopping-cart">

    <div class="column-labels">
      <label class="product-image">Image</label>
      <label class="product-details">Product</label>
      <label class="product-price">Price</label>
      <label class="product-quantity">Quantity</label>
      <label class="product-removal">Remove</label>
      <label class="product-line-price">Total</label>
    </div>
    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'oxteedesigns');

    $query = "SELECT * from cart order by id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
      die("database error");
    }

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <form method="POST" class="product">
        <div class="product-image">
          <img src="<?php echo $row["image"] ?>">
        </div>
        <div class="product-details">
          <div class="product-title"><?php echo $row["name"] ?></div>
          <p class="product-description">The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself. I'm a fan.</p>
        </div>
        <div class="product-price"><?php echo $row["price"] ?></div>
        <div class="product-quantity">
          <input type="number" value="2" min="1">
        </div>
        <div class="product-removal">
          <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
          <button type="submit" class="remove-product" name="remove">
            Remove
          </button>
        </div>
        <div class="product-line-price">25.98</div>
      </form>

    <?php } ?>

    <div class="totals">
      <div class="totals-item">
        <label>Subtotal</label>
        <div class="totals-value" id="cart-subtotal">71.97</div>
      </div>
      <div class="totals-item">
        <label>Tax (5%)</label>
        <div class="totals-value" id="cart-tax">3.60</div>
      </div>
      <div class="totals-item">
        <label>Shipping</label>
        <div class="totals-value" id="cart-shipping">15.00</div>
      </div>
      <div class="totals-item totals-item-total">
        <label>Grand Total</label>
        <div class="totals-value" id="cart-total">90.57</div>
      </div>
    </div>

    <button class="checkout">Checkout</button>

  </div>



  <script src="./js/shopingCart.js"></script>
</body>

</html>