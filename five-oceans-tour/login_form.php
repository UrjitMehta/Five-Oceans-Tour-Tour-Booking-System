<!doctype html>
<html>
<head>
	
	<link rel="stylesheet" href="login.css">
</head>
<body>
<div id="box">
<h1 id="headingtxt">Five Oceans Tour</h1>
<div class="margin"></div>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="signup.php" method="POST">
			<!-- SignUP -->
			<h1>Create Account</h1>
			<span id="cursue">or use your email for registration</span><br>
			<input type="text" placeholder="Name" name="name" required="" />
			<input type="email" placeholder="Email" name="email" required="" />
			<input type="password" placeholder="Password" name="password" required="" /><br>
			<button>Sign Up</button>
			<span style="color: red;">
				<?php 
				if(isset($_GET['signuperror'])=='1')
					echo "<h3>Please Enter Valid Name/Email/Password </h3>"; 
				?>
			</span>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login.php" method="POST">
			<!-- Login -->
			<h1>Sign in</h1>
			<br><br>
			<input type="email" placeholder="Email" name="email" required />
			<input type="password" placeholder="Password" name="password" minlength="8" required/>
			<!-- Forgot Password -->
			<a href="recover_email.php">Forgot your password?</a>
			<br><br>
			<button>Sign In</button><br><br>
			<?php
			session_start();
			// $_SESSION['msg']="";
			if(isset($_SESSION['msg'])){
				echo "<h3>".$_SESSION['msg']."</h3>";
				$_SESSION['msg']="";
			}else{
				echo $_SESSION['msg']="";
			}
			?>
			
			<span style="color: red;">
				<?php 
				if(isset($_GET['error'])=='1')
					echo "<h3>Please Enter Valid Email/Password </h3>"; 
				?>
			</span>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome</h1>
				<p>If You don't have Account then Signup</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src = "script.js"></script>
</div>
</body>
</html>