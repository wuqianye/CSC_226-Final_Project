<!-- GitHub Repo is Public, use localhost, don't use school server

careful with username and password if you are using school server, delete before you push changes to GitHub -->

<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "csc_226-final_project";

    try {
        $conn = new mysqli($servername, $username, $password, $dbname);
        $conn->set_charset("utf8mb4");
    } catch (Exception $e) {
        error_log($e->getMessage());
        exit("Error connecting to databse");
    }
?>