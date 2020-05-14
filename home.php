<?php
    if (session_status() == 1) {
        header("Location: login.php");
        exit;
    }
?>
<html>
    <head>
        <title>Home</title>
		<!-- css -->
		<link rel="stylesheet" href="assets/styles.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Google Material Design Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <div class="bgi container-fluid">
            <?php include("includes/header.inc.php"); ?>
            <main class="min-vh-100">
                <div class="container">
                    <div class="row">
                        <?php
                            include "includes/dbconnect.inc.php";

                            $query = "SELECT name, price, count, brand, image FROM products";
                            $result = mysqli_query($conn, $query);

                            while ($item = mysqli_fetch_assoc($result)) {
                        ?>
                                <!-- card -->
                                <div class="col-lg-4 col-6">
                                    <div class="card shadow-sm">
                                        <!-- product image (php) -->
                                        <img class="card-img-top" src=<?php echo $item["image"] ?>>
                                        <div class="card-body">
                                            <!-- product name (php) -->
                                            <h5 class="card-title"><?php echo $item["name"] ?></h5>
                                            <!-- price (php) -->
                                            <h6 class="card-subtitle text-secondary"><?php echo $item["brand"] ?></h6>
                                            <h5 class="card-subtitle mt-1">$<?php echo $item["price"] ?></h5>
                                            <div class="d-flex justify-content-end">
                                                <form class="form-inline" action="#" method="POST">
                                                    <!-- quantity (php) -->
                                                    <select class="custom-select">
                                                        <?php
                                                            for ($i = 1; $i <= $item["count"]; $i++) {
                                                                if ($i == 1)
                                                                    echo "<option name='quantity' value='".$i."' selected>".$i."</option>";
                                                                else
                                                                    echo "<option name='quantity' value='".$i."'>".$i."</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                    <!-- add to cart (php) -->
                                                    <button class="btn btn-light" type="submit" name="addToCart" value="addToCart"><i class="material-icons">add_shopping_cart</i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card end -->
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </main>
            <?php include("includes/footer.inc.php"); ?>
        </div>
    </body>
</html>