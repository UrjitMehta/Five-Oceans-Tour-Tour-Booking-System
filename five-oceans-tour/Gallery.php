<!DOCTYPE html>
<html>
<head>
	<title>Five Oceans Tour</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
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
			<li><a href="#"  class="active">Gallery</a></li>
			<li><a href="destination.php">Destination</a></li>
			<li><a href="contact.php">Contact</a></li>
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
		<h2 id="text"><span>Travel Our </span><br>Gallery</h2>
		<img src="bird1.png" id="bird1">
		<img src="bird2.png" id="bird2">
		<img src="forest.png" id="forest">
<!--		<a href="#" id="btn">Explore</a>-->
		<img src="rocks.png" id="rocks">
		<img src="water.png" id="water">
	</section>
	<div class="sec">
		
    <div class="gallery-section">
      <div class="inner-width">
        <h1>Places to Travel </h1>
        <div class="border"></div>
        <div class="gallery">

			<a href="img/1.png" class="image" title="Kerala <a href='#'>See More</a>">
            <img src="img/1.png" alt="">
          </a>

          <a href="img/2.png" class="image"  title="Sasan Gir <a href='#'>See More</a>">
            <img src="img/2.png" alt="">
          </a>

          <a href="img/3.png" class="image"  title="Ladakh <a href='#'>See More</a>">
            <img src="img/3.png" alt="">
          </a>

          <a href="img/4.png" class="image"  title="Sikkim <a href='#'>See More</a>">
            <img src="img/4.png" alt="">
          </a>

          <a href="img/5.png" class="image"  title="Ujjain <a href='#'>See More</a>">
            <img src="img/5.png" alt="">
          </a>

          <a href="img/6.png" class="image"  title="Varansi <a href='#'>See More</a>">
            <img src="img/6.png" alt="">
          </a>

          <a href="img/7.png" class="image"  title="Tawang <a href='#'>See More</a>">
            <img src="img/7.png" alt="">
          </a>

          <a href="img/8.png" class="image"  title="Andaman and Nikobar Islands <a href='#'>See More</a>">
            <img src="img/8.png" alt="">
          </a>

        </div>
      </div>
    </div>


  <script>
    $(".gallery").magnificPopup({
      delegate: 'a',
      type: 'image',
		
//      gallery:{
//        enabled: true
//		  
//      }
		 gallery: {
			 enabled: true,
			//verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title') + ' &middot; <a class="image" href="'+item.src+'" target="_blank">open original</a>';
			}
		}

    });
  </script>
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