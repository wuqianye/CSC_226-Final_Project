<?php
    //Checks if the user is logged in, then redirects to the home page.
    if (!isset($_POST['login'])) {
        header("Location: ../login.php");
        exit;
    }
?>
<html>
	<head>
		<title>Login</title>
		<!-- css -->
		<link rel="stylesheet" href="../assets/login-signup.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
			<div class="container flex-container">
                <?php
                    //Database connection file.
                    include "dbconnect.inc.php";
                
                    if (isset($_POST['login'])) {
                        //user input
                        $username = trim(stripslashes(htmlspecialchars($_POST['username'])));
                        $password = trim(stripslashes(htmlspecialchars($_POST['password'])));

                        //check username
                        $query = "SELECT username, password FROM customers WHERE username = ?";
                        $stmt = $conn->prepare($query);
                        $stmt->bind_param("s", $username);
                        $stmt->execute();
                        $result = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);

                        if ($result == NULL) {
                ?>
                            <!-- username not found -->
                            <h1 class="text-dark mt-3 mb-3">Username Not Found</h1>
				            <!-- link to signup.php -->
				            <p class="text-dark mb-0">Want to Signup?</p>
                            <a class="text-dark" href="../signup.php"><button id="signupLink" class="btn btn-outline-dark">Signup</button></a>
                <?php
                        } else if ($result["password"] != $password) {
                ?>
                            <!-- wrong password -->
                            <h1 class="text-dark mt-3 mb-3">Wrong Password</h1>
                            <!-- link to login.php -->
                            <p class="text-dark mb-0">Login Again</p>
                            <a class="text-dark" href="../login.php"><button id="loginLink" class="btn btn-outline-dark">Login</button></a>
                <?php
                        } else {
                            //success
                            session_start();
                            $_SESSION["user"] = $result["username"];
                            header("Location: ../home.php");
                            exit;
                        }
                    }
                ?>
			</div>
		</div>
	</body>
</html>