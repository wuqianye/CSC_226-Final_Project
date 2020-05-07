<html>
	<head>
		<title>Signup</title>
		<!-- css -->
		<link rel="stylesheet" href="assets/signup.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
			<div class="container flex-container">
				<h1 class="text-dark mt-3 mb-3">Welcome!</h1>
				<form action="includes/signup.inc.php" method = "POST">
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
					<!--signup-->
					<button id="signup" class="btn btn-dark btn-lg" type="submit" name="signup" value="signup">Signup</button>					
				</form>
				<!-- login, jump to login.php -->
				<p class="text-dark mb-0">Already have an accout?</p>
				<a href="login.php" class="text-dark"><button class="btn btn-outline-dark">Login</button></a>
			</div>
		</div>
	</body>
</html>