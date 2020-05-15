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
		<title>Signup</title>
		<!-- css -->
		<link rel="stylesheet" href="assets/substyles.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
			<div class="container flex-container">
				<h1 class="text-dark mt-3 mb-3">Welcome!</h1>
				<form action="includes/signup.inc.php" method = "POST">
                    <div class="form-row">
                        <!-- first name -->
                        <div class="col-sm input-group input-group-lg">
                            <input id="signinTopLeft" class="form-control" type="text" name="firstN" placeholder="First Name" required>
                        </div>
                        <!-- last name -->
                        <div class="col-sm input-group input-group-lg">
                            <input id="signinTopRight" class="form-control" type="text" name="lastN" placeholder="Last Name" required>
                        </div>
					</div>
                    <div class="form-row">
                        <!-- username -->
                        <div class="col-sm input-group input-group-lg">
                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                        </div>
                        <!-- password -->
                        <div class="col-sm input-group input-group-lg">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <!-- email -->
                        <div class="col-sm input-group input-group-lg">
                            <input id="signinBottomRow" class="form-control" type="email" name="email" placeholder="Email" required>
                        </div>
					</div>
					<!--signup-->
					<button id="signup" class="btn btn-dark btn-lg" type="submit" name="signup">Signup</button>					
				</form>
				<!-- link to login.php -->
				<p class="text-dark mb-0">Already have an accout?</p>
				<a class="text-dark" href="login.php"><button class="linkbtn btn btn-outline-dark">Login</button></a>
			</div>
		</div>
	</body>
</html>