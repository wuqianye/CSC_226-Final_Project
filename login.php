<?php
    error_reporting(0);
    session_start();

    if ($_SESSION["user"] != NULL) {
        header("Location: home.php");
        exit;
    }
?>
<html>
	<head>
		<title>Login</title>
		<!-- css -->
		<link rel="stylesheet" href="assets/substyles.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
			<div class="container flex-container">
				<h1 class="text-dark mt-3 mb-3">Welcome!</h1>
				<form action="includes/login.inc.php" method = "POST">
					<!-- username -->
					<div class="loginInputGroup input-group input-group-lg">
						<span class="input-group-prepend input-group-text text-white bg-dark">Username</span>
						<input class="loginInput form-control" type="text" name="username" required>
					</div>
					<!-- password -->
					<div class="loginInputGroup input-group input-group-lg">
						<span class="input-group-prepend input-group-text text-white bg-dark">Password</span>
						<input class="loginInput form-control" type="password" name="password" required>
					</div>
					<!-- login -->
					<button id="login" class="btn btn-dark btn-lg" type="submit" name="login">Login</button>					
				</form>
				<!-- link to signup.php -->
				<p class="text-dark mb-0">Don't have an accout?</p>
				<a class="text-dark" href="signup.php"><button class="linkbtn btn btn-outline-dark">Signup</button></a>
			</div>
		</div>
	</body>
</html>