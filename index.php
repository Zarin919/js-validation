<?php
include ('db_connect.php');

$fname=$lname=$gender=$dob=$religion=$paddress=$peraddress=$phone=$email=$weblink=$username=$error=$password="";

  if(isset($_POST['signup'])){

    $fname = mysqli_real_escape_string($con, $_POST['Firstname']);
    $lname = mysqli_real_escape_string($con, $_POST['Lastname']);
    $gender = mysqli_real_escape_string($con, $_POST['Gender']);
    $dob = mysqli_real_escape_string($con, $_POST['DOB']);
    $religion = mysqli_real_escape_string($con, $_POST['Religion']);
    $paddress = mysqli_real_escape_string($con, $_POST['presentaddress']);
    $peraddress = mysqli_real_escape_string($con, $_POST['Permanentaddress']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['Email']);
    $weblink = mysqli_real_escape_string($con, $_POST['Lienk']);
    $username = mysqli_real_escape_string($con, $_POST['uname']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);

    $sql = "INSERT INTO users (`fname`, `lname`, `gender`, `dob`, `religion`, `paddress`, `peraddress`, `phone`, `email`, `weblink`, `username`, `password`) VALUES ('$fname', '$lname', '$gender', '$dob', '$religion', '$paddress', '$peraddress', '$phone', '$email', '$weblink', '$username', '$password');";

    mysqli_query($con, $sql);
 header("Location:login.php");

  }




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<style>


#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}

</style>
<body>
    <h1>Registration Form</h1>

 <div id="error_message"></div>

<form method="POST" onsubmit="return validation();" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >

        <fieldset>
            <legend>Basic Information:</legend>

        <label for="fname">First Name:</label>
        <input type="text" id="user" name="Firstname"><br>

        <label for="lname">Last name: </label>
        <input type="text"id="userl" name="Lastname"><br>


            Gender:<br>
            <input type="radio" name="Gender" value="Male" checked>Male<br>
            <input type="radio" name="Gender" value="Female">Female<br>
            <input type="radio" name="Gender" value="Other">Other<br>


         <label for="DOB">DOB</label>
         <input type="date" name="DOB"><br>

         Religion:<br>
            <select name="Religion" required>
                <option value="islam" name="islam" >islam</option>
                <option value="hindu" name="hindu" >hindu</option>
            </select>
            </fieldset>
            <br><br><br>




        <fieldset>
        <legend>Contact Information:</legend>


        <label for="presentaddress">presentaddress:</label>
        <textarea id="presentaddress" id="padd"name="presentaddress" rows="2" cols="20"></textarea><br>

        <label for="Permanentaddress">Permanentaddress:</label>
        <textarea id="Permanentaddress"id="peradd" name="Permanentaddress" rows="2" cols="20"></textarea><br>


        <label for="phone">phone: </label>
        <input type="phone" id="mobileNumber"name="phone" ><br>

        <label for="Email">Email: </label>
        <input type="Email" id="email"name="Email" ><br>

        <label for="Lienk">Personal Website Lienk : </label>
         <input type="Lienk"id="link" name="Lienk" ><br>



        </fieldset>
                <legend>Login Info:</legend>

        <br><br>
        <fieldset>
                <label for="username">User Name: </label>
        <input type="username"id="uname" name="uname" ><br>

        <label for="password">Enter Password :</label>
         <input type="password"id="pass" name="pass" ><br>

         <input type="submit" name="signup"value="register">
        </fieldset>
    </form>
</body>
</html>
<script type="text/javascript">


		function validation(){

			var fname = document.getElementById('user').value;
      	var lname = document.getElementById('userl').value;
			var pass = document.getElementById('pass').value;
	var presentadd = document.getElementById('padd').value;
  	var parmanentadd = document.getElementById('peradd').value;
			var mobileNumber = document.getElementById('mobileNumber').value;
			var emails = document.getElementById('emails').value;
      	var uid = document.getElementById('uname').value;
        	var website = document.getElementById('link').value;
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;



              error_message.style.padding = "10px";



			if(fname == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the first Name field";
				return false;
			}
			if((fname.length <= 2) || (fname.length > 25)) {
				document.getElementById('error_message').innerHTML =" ** firstname lenght must be between 2 and 25";
				return false;
			}
			if(!isNaN(fname)){
				document.getElementById('error_message').innerHTML =" ** only characters are allowed";
				return false;
			}



      if(lname == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the Last Name field";
        return false;
      }
      if((lname.length <= 2) || (lname.length > 25)) {
        document.getElementById('error_message').innerHTML =" ** Lastname lenght must be between 2 and 25";
        return false;
      }
      if(!isNaN(lname)){
        document.getElementById('error_message').innerHTML =" ** only characters are allowed";
        return false;
      }



			if(pass == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the password field";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('error_message').innerHTML =" ** Passwords lenght must be between  5 and 20";
				return false;
			}







			if(mobileNumber == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the mobile NUmber field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('error_message').innerHTML =" ** user must write digits only not characters";
				return false;
			}
			if(mobileNumber.length!=11){
				document.getElementById('error_message').innerHTML =" ** Mobile Number must be 11 digits only";
				return false;
			}



			if(presentadd == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the Present Address field";
				return false;
			}

			if((presentadd.length <= 2) || (presentadd.length > 20)) {
				document.getElementById('error_message').innerHTML =" ** Present Address lenght must be between 2 and 20";
				return false;
			}


      if(parmanentadd == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the Parmanent Address field";
        return false;
      }

      if((parmanentadd.length <= 2) || (parmanentadd.length > 20)) {
        document.getElementById('error_message').innerHTML =" ** Parmanent Address lenght must be between 2 and 20";
        return false;
      }




      if(emails == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the Address field";
        return false;
      }

      if(emails.value.match(mailformat)) {
}

        else{
        document.getElementById('error_message').innerHTML =" ** Email not valid";
        return false;}





      if(uid == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the UserName field";
        return false;
      }





      if(website == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the Website  field";
        return false;
      }


      alert("Account Create Successfully!");
      return true;
		}

	</script>
