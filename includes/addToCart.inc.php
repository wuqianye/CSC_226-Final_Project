<?php
    if (session_status() == 1) {
        header("Location: login.php");
        exit;
    } else if (!isset($_POST["addToCart"])) {
        header("Location: ../home.php");
    }

    session_start();
?>
<html>
	<head>
		<title>Add-to-Cart</title>
		<!-- css -->
		<link rel="stylesheet" href="../assets/substyles.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
			<div class="container flex-container">
                <?php
                    include "dbconnect.inc.php";
                            
                    if (isset($_POST['addToCart'])) {
                        $username = $_SESSION["user"];
                        $productID = trim(stripslashes(htmlspecialchars($_POST['productID'])));
                        $quantity = trim(stripslashes(htmlspecialchars($_POST['quantity'])));

                        $query = "SELECT o.orderID, o.itemCount FROM orders o JOIN products p ON o.productID = p.id JOIN customers c ON o.customerID = c.id WHERE c.username = ? AND o.productID = ?";
                        $stmt = $conn->prepare($query);
                        $stmt->bind_param("si", $username, $productID);
                        $stmt->execute();
                        $result = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);

                        if ($result != NULL) {
                            $quantity += $result["itemCount"];
                            
                            $query_quantity = "SELECT count FROM products WHERE id = ?";
                            $stmt_quantity = $conn->prepare($query_quantity);
                            $stmt_quantity->bind_param("i", $productID);
                            $stmt_quantity->execute();
                            $result_quantity = $stmt_quantity->get_result()->fetch_row();

                            if ($quantity > $result_quantity[0])
                                $quantity = $result_quantity[0];

                            $query_upate = "UPDATE orders SET itemCount = ? WHERE orderId = ?";
                            $stmt_update = $conn->prepare($query_upate);
                            $stmt_update->bind_param("ii", $quantity, $result["orderID"]);
                            if ($stmt_update->execute()) {
                ?>
                                <h1 class="text-dark mt-3 mb-3">Added to Cart</h1>
                <?php
                            } else {
                ?>
                                <h1 class="text-dark mt-3 mb-3">Process Failed</h1>
                <?php
                            }
                        } else {
                            $query_id = "SELECT id FROM customers WHERE username = ?";
                            $stmt_id = $conn->prepare($query_id);
                            $stmt_id->bind_param("s", $username);
                            $stmt_id->execute();
                            $result_id = $stmt_id->get_result()->fetch_row();

                            $query_insert = "INSERT INTO orders (customerID, productID, itemCount) VALUES (?, ?, ?)";
                            $stmt_update = $conn->prepare($query_upate);
                            $stmt_update->bind_param("iii", $result_id[0], $productID, $quantity);
                            if ($stmt_insert->execute()) {
                ?>
                                <h1 class="text-dark mt-3 mb-3">Added to Cart</h1>
                <?php
                            } else {
                ?>
                                <h1 class="text-dark mt-3 mb-3">Process Failed</h1>
                <?php
                            }
                        }
                    }
                ?>
                <!-- link to home.php -->
                <a class="text-dark" href="../home.php"><button class="linkbtn btn btn-outline-dark">Continue Shopping</button></a>
                <!-- link to cart.php -->
                <a class="text-dark mt-2" href="../cart.php"><button class="linkbtn btn btn-outline-dark">Cart</button></a>
            </div>
		</div>
	</body>
</html>