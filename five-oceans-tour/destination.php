<!doctype html>
<html>
<head>
	<title>Five Oceans Tour</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="destination_style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header id="header">
		<a href="index.html" class="logo">Five Oceans Tour </a>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="Gallery.php">Gallery</a></li>
			<li><a href="#" class="active">Destination</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li>
				<?php
                      session_start();
                      if(isset( $_SESSION['loggedin'])==true)
                        {echo "<a href='confirm_des.php'>My Bookings</a> ";}
                
                    ?>
			</li>
			<li><?php 
				if(isset( $_SESSION['loggedin'])==true)
					{echo "<a href='logout.php'>Logout</a> ";}
				else
					{echo "<a href='login_form.php'>Login/Signup</a>";} ?>
			</li>
		</ul>
	</header>
	<section>
		<h2 id="text"><span>Select Your </span><br>Destination</h2>
		<img src="bird1.png" id="bird1">
		<img src="bird2.png" id="bird2">
		<img src="forest.png" id="forest">
<!--		<a href="#" id="btn">Explore</a>-->
		<img src="rocks.png" id="rocks">
		<img src="water.png" id="water">
	</section>
	<!--Destination Page -->
		<div class="sec">
			<div class="dest_container">
				<div class="inner-container">
					<h1 id="heading">Pick Your Destinations..</h1>
					<div class="ct-row">
						<div class="dest-box">
							<a href="Destination_Ladak.php">
								<img src="img/ladakh.jpg">
							</a>
						</div>
						<div class="dest-box">
							<a href="Destination_Dal.php">
								<img src="img/dalhousie.jpg">
							</a>
						</div>
						<div class="dest-box">
							<a href="Destination_Manali.php">
								<img src="img/manali.jpg">
							</a>
						</div>
					</div>
					<div class="ct-row">
						<div class="dest-box">
							<a href="Destination_Gir.php">
								<img src="img/sasan.jpg">
							</a>
						</div>
						<div class="dest-box">
							<a href="Destination_Ujjan.php">
								<img src="img/ujjain_1.jpg">
							</a>
						</div>
						<div class="dest-box">
							<a href="Destination_Saputara.php">
								<img src="img/saputara.jpg">
							</a>
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
