<?php
    error_reporting(0);
    session_start();

    if ($_SESSION["user"] != NULL) {
        header("Location: ../home.php");
        exit;
    } else if (!isset($_POST['signup'])) {
        header("Location: ../signup.php");
        exit;
    }
?>
<html>
	<head>
		<title>Signup</title>
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
                    
                    if (isset($_POST['signup'])) {
                        //user inputs
                        $firstN = trim(stripslashes(htmlspecialchars($_POST["firstN"])));
                        $lastN = trim(stripslashes(htmlspecialchars($_POST["lastN"])));
                        $username = trim(stripslashes(htmlspecialchars($_POST["username"])));
                        $password = trim(stripslashes(htmlspecialchars($_POST["password"])));
                        $email = trim(stripslashes(htmlspecialchars($_POST["email"])));
                        
                        //check username
                        $query_username = "SELECT username FROM customers WHERE username = ?";
                        $stmt_username = $conn->prepare($query_username);
                        $stmt_username->bind_param("s", $username);
                        $stmt_username->execute();
                        $result_username = $stmt_username->get_result()->fetch_row();

                        //check email
                        $query_email = "SELECT email FROM customers WHERE email = ?";
                        $stmt_email = $conn->prepare($query_email);
                        $stmt_email->bind_param("s", $email);
                        $stmt_email->execute();
                        $result_email = $stmt_email->get_result()->fetch_row();

                        if ($result_username != NULL & $result_email == NULL) {
                ?>
                            <!-- username taken -->
                            <h1 class="text-dark mt-3 mb-3">Username Taken</h1>
				            <!-- link to signup.php -->
                            <p class="text-dark mb-0">Signup Again</p>
                            <a class="text-dark" href="../signup.php"><button class="linkbtn btn btn-outline-dark">Signup</button></a>
                <?php
                        } else if ($result_username == NULL & $result_email != NULL) {
                ?>
                            <!-- email taken -->
                            <h1 class="text-dark mt-3 mb-3">Email Taken</h1>
				            <!-- link to signup.php -->
                            <p class="text-dark mb-0">Signup Again</p>
                            <a class="text-dark" href="../signup.php"><button class="linkbtn btn btn-outline-dark">Signup</button></a>
                <?php
                        } else if ($result_username != NULL & $result_email != NULL) {
                ?>
                            <!-- username and email taken -->
                            <h1 class="text-dark mt-3 mb-3">Username and Email Taken</h1>
				            <!-- link to signup.php -->
                            <p class="text-dark mb-0">Signup Again</p>
                            <a class="text-dark" href="../signup.php"><button class="linkbtn btn btn-outline-dark">Signup</button></a>
                <?php
                        } else {
                            //insert new user into "customers"
                            $query_insert = "INSERT INTO customers (firstN, lastN, username, password, email) VALUES (?, ?, ?, ?, ?)";
                            $stmt_insert = $conn->prepare($query_insert);
                            $stmt_insert->bind_param("sssss", $firstN, $lastN, $username, $password, $email);
                            //insertion success
                            if ($stmt_insert->execute()) {
                ?>
                                <!-- success -->
                                <h1 class="text-dark mt-3 mb-3">Successfully Signed Up</h1>
                                <!-- link to login.php -->
                                <p class="text-dark mb-0">Want to Login?</p>
                                <a class="text-dark" href="../login.php"><button class="linkbtn btn btn-outline-dark">Login</button></a>
                <?php
                            } else {
                ?>
                                <!-- failed -->
                                <h1 class="text-dark mt-3 mb-3">Signup Failed</h1>
                                <!-- link to signup.php -->
                                <p class="text-dark mb-0">Signup Again</p>
                                <a class="text-dark" href="../signup.php"><button class="linkbtn btn btn-outline-dark">Signup</button></a>
                <?php
                            }
                        }
                    }
                ?>
			</div>
		</div>
	</body>
</html>