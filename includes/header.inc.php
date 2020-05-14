<?php
    if (session_status() == 1) {
        header("Location: login.php");
        exit;
    }

    session_start();
?>
<html>
    <head>
        <!-- css -->
		<link rel="stylesheet" href="assets/styles.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Google Material Design Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Font Awesome 4 Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="container-fluid fixed-top">
            <!-- back to top -->
            <a name="top"></a>
            <!-- navbar -->
            <nav class="navbar navbar-expand-sm navbar-dark d-flex justify-content-between bg-dark">
                <a id="navLogo" class="navbar-brand" href="home.php">Placeholder</a>
                <div class="navbar-nav">
                    <h5 class="nav-item nav-link align-self-center text-light mr-4 mb-0">Hi, <?php echo $_SESSION["user"] ?></h5>
                    <!-- cart -->
                    <a class="nav-item nav-link align-self-center" href="cart.php"><i class="material-icons text-light">shopping_cart</i></a>
                    <!-- logout -->
                    <a class="nav-item nav-link align-self-center ml-3" href="includes/logout.inc.php"><i class="fa fa-sign-out text-light" style="font-size:24px" aria-hidden="true"></i></a>
                </div>
            </nav>
            <!-- search -->
            <div class="jumbotron">
                <form action="search.php" method="GET">
                    <div class="input-group input-group-lg">
                        <input class="form-control" type="text" name="searchkey" placeholder="Search for Product">
                        <div class="input-group-append">
                            <button id="searchbtn" class="btn btn-dark" type="submit" name="searchbtn" value="true"><i class="material-icons">search</i></button>
                        </div>
                    </div>
                </form>
            </div>
        </header>
    </body>
</html>