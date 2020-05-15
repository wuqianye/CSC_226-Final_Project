<?php
    if (session_status() == 1) {
        header("Location: ../login.php");
        exit;
    } else if (!isset($_POST["delete"])) {
        header("Location: ../cart.php");
    }
?>
<html>
	<head>
		<title>Update Order</title>
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
                    
                    if (isset($_POST["update"])) {
                        $orderID = trim(stripslashes(htmlspecialchars($_POST['orderID'])));
                        $itemCount = trim(stripslashes(htmlspecialchars($_POST['quantity'])));
                        
                        $query = "UPDATE orders SET itemCount = ? WHERE orderID = ?";
                        $stmt = $conn->prepare($query);
                        $stmt->bind_param("ii", $itemCount, $orderID);
                        if ($stmt->execute()) {
                ?>
                            <h1 class="text-dark mt-3 mb-3">Order Updated</h1>
                <?php
                        } else {
                ?>
                            <h1 class="text-dark mt-3 mb-3">Process Failed</h1>
                <?php
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