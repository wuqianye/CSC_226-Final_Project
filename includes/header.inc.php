<html>
    <head>
        <!-- css -->
		<link rel="stylesheet" href="assets/styles.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Google Material Design Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
                    <a class="nav-item nav-link" href="cart.php"><i class="material-icons text-light">shopping_cart</i></a>
                    <!-- missing logout function -->
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