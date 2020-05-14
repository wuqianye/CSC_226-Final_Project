<?php
    if (session_status() == 1) {
        header("Location: login.php");
        exit;
    }

    $_SESSION = [];
    session_destroy();
?>
<html>
	<head>
		<title>Logged out</title>
		<!-- css -->
		<link rel="stylesheet" href="../assets/login-signup.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
			<div class="container flex-container">
				<h1 class="text-dark mt-3 mb-3">Successfully Logged Out!</h1>
				<!-- link to login.php -->
				<p class="text-dark mb-0">Want to Login?</p>
				<a class="text-dark" href="../login.php"><button id="loginLink" class="btn btn-outline-dark">Login</button></a>
			</div>
		</div>
	</body>
</html>