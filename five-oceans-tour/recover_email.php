<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Recover Your Password</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<center>	
	<h1>Email For Reset Password</h1><br><br>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
  <div class="form-group col-md-3">
    <label for="r_email">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email for reset Password" name="r_email" minlength="8" required>
  </div>
  <br>
  
  <button type="submit" class="btn btn-primary" name="submit">Send Mail</button>
</form>

</center>
</body>
</html>

<?php
	require_once "config.php";
	session_start();
	$query=$emailquery=$emailcount="";
	if(isset($_POST["submit"])){
		$email=mysqli_real_escape_string($link,$_POST['r_email']);

		$emailquery="select * from user where email='$email' ";
		$query=mysqli_query($link,$emailquery);
		$emailcount=mysqli_num_rows($query);

		if($emailcount==1){
			$userdate=mysqli_fetch_array($query);
			$username=$userdate['name'];
			$token=$userdate['token'];

			$subject="Password Reset";
			$body="Hello, $username ". "<br>". "Click here to change your password 
			http://localhost:680/FOT/Five_Oceans/five-oceans-tour/reset.php?token=$token";
			$sender_email="From: fiveoceans202210@gmail.com";

			if(mail($email,$subject,$body,$sender_email)){
				$_SESSION['msg']="Check Your Email to change password  '$email'";
				header('location:login_form.php');
			}else{
				echo "Email Not sent";
			}


		}else{
			echo "No Email Found, Please Add Registered Email"; 
		}
	}
?>