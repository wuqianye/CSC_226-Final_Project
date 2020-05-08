<html>
    <head>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <?php
            include "dbconnect.inc.php";
            /* following code done by Briana, something wrong, I'm also confused --Wuqian_Ye */
            if (isset($_POST['login'])) {
                $user = trim(stripslashes(htmlspecialchars($_POST['username'])));
                $pass = trim(stripslashes(htmlspecialchars($_POST['password'])));
                $userCheck = false;
                $passCheck = false;
            

                $query = "SELECT customerID FROM Customer WHERE email = $user AND password = $pass";
                $response = mysqli_query($dbc, $query); //where $dbc is the database connetion
                $row = mysql_fetch_array($response);
                $active = $row['active'];
                    
                $count = mysqli_num_rows($result);
                // If result matched $myusername and $mypassword, table row must be 1 row
                        
                if($count == 1) {
                    session_register("user");
                    $_SESSION['login_user'] = $myusername;
                    header("location: home.php"); //Where they should be redirected
                } else {
                    $error = "Your Login Name or Password is invalid";
                }
            /* above code done by briana */
            } else {
                header("Location: ../login.php");
            }
        ?>
    </body>
</html>