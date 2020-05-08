<html>
    <head>
        <title>Home</title>
		<!-- css -->
		<link rel="stylesheet" href="assets/styles.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Google Material Design Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <div class="bgi container-fluid">
            <?php include("includes/header.inc.php"); ?>
            <main class="min-vh-100">
                <div class="container">
                    <div class="row">
                        <!-- card -->
                        <div class="col-lg-4 col-6">
                            <div class="card shadow-sm">
                                <!-- product image (php) -->
                                <img class="card-img-top" src="https://www.staples-3p.com/s7/is/image/Staples/sp36282946_sc7?wid=512&hei=512">
                                <div class="card-body">
                                    <!-- product name (php) -->
                                    <h5 class="card-title">Name</h5>
                                    <!-- price (php) -->
                                    <h6 class="card-subtitle">$0.00</h6>
                                    <div class="d-flex justify-content-end">
                                        <form class="form-inline" action="" method="POST">
                                            <!-- quantity (php) -->
                                            <select class="custom-select">
                                                <option selected>1</option>
                                                <option value="#">2</option>
                                            </select>
                                            <!-- add to cart (php) -->
                                            <button class="btn btn-light"><i class="material-icons">add_shopping_cart</i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    </div>
                </div>
            </main>
            <?php include("includes/footer.inc.php"); ?>
        </div>
    </body>
</html>