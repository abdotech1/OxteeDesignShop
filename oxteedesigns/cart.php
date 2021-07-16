<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>cart</title>
</head>

<body>
    <div class="grid">

        <?php

        $conn = mysqli_connect('localhost', 'root', '', 'oxteedesigns');

        $query = "SELECT * from cart order by id";
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

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
</body>

</html>