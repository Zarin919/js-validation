
<?php

require "db_connect.php";
global $con;

$uname="";
$err_uname="";
$psw="";
$err_psw="";
$err_invalid="";
$has_error=false;


if($_SERVER["REQUEST_METHOD"]=="POST"){


  if(empty($_POST['uname']))
  {
    $err_uname="*Username Required";
    $has_error=true;


  }
  else
  {
    $uname=$_POST['uname'];
  }
  if(empty($_POST['psw']))
  {
    $err_psw="*Password Required";
    $has_error=true;


  }
  else
  {
    $psw=$_POST['psw'];
  }
  if(!$has_error)
  {
    $query = "SELECT username from users where username='$uname' and password='$psw'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);


      header("Location:welcome.php");
    }
    else
    {
echo '<script>alert("Please check your username and Password")</script>';
    }
  }


}
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration form</title>
</head>
<body>
	<h1>Registration Form</h1>



<form method="post" action="" name="" enctype="multipart/form-data">


		<fieldset>
		<legend>Login:</legend>
				<label for="username">User Name: </label>
		<input type="username" name="uname" ><br>

		<label for="password">Enter Password :</label>
		 <input type="password" name="psw" ><br>
		 <input type="submit" name="submit"value="Login">
		</fieldset>
 	</form>
</body>
</html>
