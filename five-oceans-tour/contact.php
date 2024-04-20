<!DOCTYPE html>
<html>
<head>
	<title>Five Oceans Tour</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<header id="header">
		<a href="index.html" class="logo">Five Oceans Tour </a>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="Gallery.php">Gallery</a></li>
			<li><a href="destination.php">Destination</a></li>
			<li><a href="contact.php" class="active">Contact</a></li>
			 <li>
                <?php
                      session_start();
                      if(isset( $_SESSION['loggedin'])==true)
                        {echo "<a href='confirm_des.php'>My Bookings</a> ";}  
                    ?>
            </li>
                <li>
                    <?php 
                    if(isset( $_SESSION['loggedin'])==true)
                        {echo "<a href='logout.php'>Logout</a> ";}
                    else
                        {echo "<a href='login_form.php'>Login/Signup</a>";} 
                    ?>
                </li>
		</ul>
	</header>
	<section>
		<h2 id="text"><span>Tell Us About Your</span><br>Tour</h2>
		<img src="bird1.png" id="bird1">
		<img src="bird2.png" id="bird2">
		<img src="forest.png" id="forest">
		<img src="rocks.png" id="rocks">
		<img src="water.png" id="water">
	</section>
	
	<div class="sec">
		<div class="container">
		<div class="contactinfo">
			<div>
				<h2>Contact Info</h2>
				<ul class="info">
					<li>
						<span><img src="location.png"></span>
						<span> College Rd, Chalali, Nadiad, Gujarat 387001</span>
					</li>
						<li>
						<span><img src="mail.png"></span>
						<span>fiveoceanstour@gmail.com</span>
					</li>
						<li>
						<span><img src="call.png"></span>
						<span>Priyank: +91 95124 16641
							<br>Urjit: +91 75739 32323
						</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="contactForm">
			<h2>Send a Message</h2>
			<div class="formBox">
				<div class="inputBox w50">
					<input type="text" name="" required>
					<span>First Name</span>
				</div>
				<div class="inputBox w50">
					<input type="text" name="" required>
					<span>Last Name</span>
				</div>
				<div class="inputBox w50">
					<input type="text" name="" required>
					<span>Email Address</span>
				</div>
				<div class="inputBox w50">
					<input type="text" name="" required>
					<span>Mobile Number</span>
				</div>
				<div class="inputBox w100">
					<textarea name="" required></textarea>
					<span>Write your message here...</span>
				</div>
				<div class="inputBox w100">
					<input type="submit" value="Send">
				</div>
			</div>	
		</div>
	</div>
	</div>
	</div>
	<script>
		let text=document.getElementById('text');
		let bird1=document.getElementById('bird1');
		let bird2=document.getElementById('bird2');
		let btn=document.getElementById('btn');
		let rocks=document.getElementById('rocks');
		let forest=document.getElementById('forest');
		let header=document.getElementById('header');

		window.addEventListener('scroll',function(){
			let value=window.scrollY;

			text.style.top=50 + value * -0.5 + '%';
			bird1.style.top=value * -1.5 + 'px';
			bird1.style.left=value * 2 + 'px';
			bird2.style.top=value * -1.5 + 'px';
			bird2.style.left=value * -1.5 + 'px';
			btn.style.marginTop=value * 1.5 +'px';
			rocks.style.top=value * -0.12 +'px';
			forest.style.top=value * 0.25 +'px';
			header.style.top=value * 0.5 +'px'; 	
		})
	</script>
</body>
</html>