<?php
// file needed for connection include();
if(isset($_POST['login']))
{
  $user = trim($_REQUEST['username']);
  $pass = trim($_REQUEST['password']);
  $userCheck = false;
  $passCheck = false;
  

/*assume dbconnections here, not sure how you want to add them
if we're using mysql or sql in general, we need to search a db using these commands

$query = "SELECT customerID FROM Customer WHERE email = '$user' AND password = '$pass'";
$response = mysqli_query($dbc, $query); //where $dbc is the database connetion
$row = mysql_fetch_array($response);
$active = $row['active'];
      
$count = mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
		
if($count == 1) 
{
  session_register("myusername");
  $_SESSION['login_user'] = $myusername;
  header("location: home.php"); //Where they should be redirected
}
else 
{
  $error = "Your Login Name or Password is invalid";
}

}
*/
//no need to account for new accounts as taken care of in signup.php


?>
