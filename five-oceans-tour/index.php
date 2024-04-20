<!DOCTYPE html>
<html>
<head>
	<title>Five Oceans Tour</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=KoHo:wght@300&display=swap" rel="stylesheet">

</head>
<body>
	<header id="header">
		<a href="index.php" class="logo">Five Oceans Tour </a>
		<ul>
			<li><a href="index.php" class="active">Home</a></li>
			<li><a href="Gallery.php">Gallery</a></li>
			<li><a href="destination.php">Destination</a></li>
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
		<h2 id="text"><span>It's time for a new</span><br>Adventure</h2>
		<img src="bird1.png" id="bird1">
		<img src="bird2.png" id="bird2">
		<img src="forest.png" id="forest">
<!--		<a href="#" id="btn">Explore</a>-->
		<img src="rocks.png" id="rocks">
		<img src="water.png" id="water">
	</section>
	<div class="sech">
	<h2 id="hometexth">Welcome to Five Ocean Tours!</h2>
	<span id="hometext">
		Discover what sustainability in travel is all about. Our sister site, Galapagos.com, focuses on Latin America, where Charles Darwin’s theory of evolution began to take root with his famous explorations of the Galapagos Islands. With Safaritours.com, we focus on Africa, where we – homo sapiens - began our own evolutionary journey. Indeed, the African continent is considered by most paleoanthropologists to be where the human species originated. Africa also is home to a spectacular variety of landscapes and cultures, and of course, the most stunning array of wildlife on Earth. It has more than 1,100 mammal species, from the majestic elephant to the tiny bush baby. Some 64 species of primates stretch across the diverse ecosystems of the continent, including the critically endangered Mountain Gorilla, largest of the living primates. Africa also supports about 2,600 species of birds, both resident and migratory. Africa is a true Noah’s Ark of natural wonder and beauty, with some of the friendliest and most hospitable people you will ever meet, from its modern bustling cities like Cape Town and Nairobi to tiny far flung villages.
	</span>
	</div>
	<div class="homeimg">
		<img src="img/home2.jpg" width="100%" height="100%">
		<a href="destination.php">
		<button class="homebtn">Explore</button>
		</a>
	</div>
	
	<!-- footer -->
	<!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"><b>Five Oceans Tour</b> Discover what sustainability in travel is all about. Our sister site, Galapagos.com, focuses on Latin America, where Charles Darwin’s theory of evolution began to take root with his famous explorations of the Galapagos Islands. With Safaritours.com, we focus on Africa, where we – homo sapiens - began our own evolutionary journey.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="index.php">About Us</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">Five Oceans Tour</a>.
            </p>
          </div>
        </div>
      </div>
</footer>
	
	
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