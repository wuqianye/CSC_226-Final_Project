<html>
	<head>
		<title>Login</title>
		<!-- css -->
		<link rel="stylesheet" href="assets/login-signup.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
			<div class="container flex-container">
				<h1 class="text-dark mt-3 mb-3">Welcome!</h1>
				<form action="includes/login.inc.php" method = "POST">
					<!--username-->
					<div class="input-group input-group-lg">
						<span class="input-group-prepend input-group-text text-white bg-dark">Username</span>
						<input class="form-control" type="text" name="username" required>
					</div>
					<!--password-->
					<div class="input-group input-group-lg">
						<span class="input-group-prepend input-group-text text-white bg-dark">Password</span>
						<input class="form-control" type="password" name="password" required>
					</div>
					<!--login-->
					<button id="login" class="btn btn-dark btn-lg" type="submit" name="login" value="login">Login</button>					
				</form>
				<!-- signup, jump to signup.php -->
				<p class="text-dark mb-0">Don't have an accout?</p>
				<a class="text-dark" href="signup.php"><button id="signupLink" class="btn btn-outline-dark">Create Account</button></a>
			</div>
		</div>
	</body>
</html>