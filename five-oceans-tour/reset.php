<?php
	require_once "config.php";
	session_start();
	ob_start();
	$_SESSION['pass_msg']="";
	if(isset($_POST["up_btn"])){
		if(isset($_GET['token'])){
			$token=$_GET['token'];
			$newpassword=mysqli_real_escape_string($link,$_POST['npassword']);
			$cnewpassword=mysqli_real_escape_string($link,$_POST['cnpassword']);

			if($newpassword == $cnewpassword){

				$updatequery="update user set password='$newpassword' where token='$token' ";

				$result=mysqli_query($link, $updatequery);
				if($result){
					$_SESSION['msg']="Your Password is Update Successfully";
					header('location:login_form.php');
				}else{
					$_SESSION['pass_msg']="Error ! Your Password is not updated";
					header('location:reset.php');
				}

			}else{
				$_SESSION['pass_msg']= "Password didn't match with confirm password";
			}


		}else{
			$_SESSION['pass_msg']="No Token Found";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reset Password</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<br><br>
<center>
	<p>
		<?php 
		if(isset($_SESSION['pass_msg'])){
			echo $_SESSION['pass_msg'];	
		}else{
			echo $_SESSION['pass_msg']="";
		}
		?>
	</p>
<form method="POST">
  <div class="form-group col-md-3">
    <label for="npassword">New Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Create New Password" name="npassword" minlength="8" required>
  </div>
  <br>
  <div class="form-group col-md-3">
    <label for="cnpassword">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="cnpassword" minlength="8" required>
  </div>
  <button type="submit" class="btn btn-primary" name="up_btn">Update Password</button>
</form><br>
<a href="login_form.php">Login </a>
</center>

</body>


</html>