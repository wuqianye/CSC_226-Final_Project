<!--?php
    if (session_status() == 1) {
        header("Location: login.php");
        exit;
    }
?-->
<html>
    <head>
        <title>Cart</title>
		<!-- css -->
		<link rel="stylesheet" href="assets/styles.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="bgi container-fluid">
            <?php include("includes/header.inc.php"); ?>
            <main class="min-vh-100">
                <div class="container">
                    <!-- php print info in table -->
                    <?php
                        include "includes/dbconnect.inc.php";
                        
                        $query = "SELECT * FROM ";
                        $result = mysqli_query($conn,$query);

                    ?>
                                <!-- display -->
                </div>
            </main>
            <?php include("includes/footer.inc.php"); ?>    
        </div>
        
    </body>
</html>