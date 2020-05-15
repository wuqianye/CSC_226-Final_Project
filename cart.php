<html>
    <head>
        <title>Cart</title>
		<!-- css -->
		<link rel="stylesheet" href="assets/styles.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="bgi container-fluid">
            <?php include("includes/header.inc.php"); ?>
            <main class="min-vh-100">
                <div class="container flex-container">
                    <table class="table table-light table-bordered table-striped table-hover">
                        <tr>
                            <thead class="table-active">
                                <tr>
                                    <th>Product</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </tr>
                        <?php
  							include "includes/dbconnect.inc.php";

                            $query = "SELECT p.image, p.name, p.price, p.count, o.orderID, o.itemCount FROM orders o JOIN products p ON o.productID = p.id JOIN customers c ON o.customerID = c.id WHERE c.username = ?";
                            $stmt = $conn->prepare($query);
                            $stmt->bind_param("s", $_SESSION["user"]);
                            $stmt->execute();
                            $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
							if (!$result) exit ("No Result");

                            foreach ($result as $item) {
                        ?>
                                <tr>
                                    <td><img src="<?php echo $item['image'] ?>" height="40%"></td>
                                    <td width="40%"><?php echo $item['name'] ?></td>
                                    <td>$<?php echo $item['price'] ?></td>
                                    <td>
                                        <form action="includes/updateOrder.inc.php" method="POST">
                                            <input type="hidden" name="orderID" value="<?php echo $item['orderID'] ?>">
                                            <div class="form-row">
                                                <select class="custom-select" name="quantity">
                                                <?php
                                                    for ($i = 1; $i <= $item["count"]; $i++) {
                                                        if ($i == $item["itemCount"])
                                                            echo "<option value='".$i."' selected>".$i."</option>";
                                                        else
                                                            echo "<option value='".$i."'>".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                            <button class="btn btn-outline-secondary" type="submit" name="update">Update</button>
                                            </div>  
                                        </form>
                                    </td>
                            		<td>$<?php echo ($item["itemCount"] * $item["price"]) ?></td>
                                    <td>
                                        <form action="includes/removeOrder.inc.php" method="POST">
                                            <input type="hidden" name="orderID" value="<?php echo $item['orderID'] ?>">
                                            <button class="btn btn-outline-danger" type="submit" name="remove">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </main>
            <?php include("includes/footer.inc.php"); ?>    
        </div>
    </body>
</html>