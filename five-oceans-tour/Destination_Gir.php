<!DOCTYPE html>
<html>
    <head>
        <title>
            Five Oceans Tour
        </title>
        <link href="style.css" rel="stylesheet" type="text/css">
            <link href="des2.css" rel="stylesheet" type="text/css">
            </link>
        </link>
    </head>
    <body>
        <header id="header">
            <a class="logo" href="index.html">
                Five Oceans Tour
            </a>
            <ul>
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>
                    <a href="Gallery.php">
                        Gallery
                    </a>
                </li>
                <li>
                    <a class="active" href="Destination.php">
                        Destination
                    </a>
                </li>
                <li>
                    <a href="contact.php">
                        Contact
                    </a>
                </li>
                <li>
                <?php
                      session_start();
                      if(isset( $_SESSION['loggedin'])==true)
                        {echo "<a href='confirm_des.php'>My Bookings</a> ";}
                    else
                        {echo "<a href='login_form.php'>Login/Signup</a>";}   
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
            <h2 id="text">
                <span>
                    The Jungle Of Lions
                </span>
                <br>
                    Gir
                </br>
            </h2>
            <img id="bird1" src="bird1.png">
                <img id="bird2" src="bird2.png">
                    <img id="forest" src="forest.png">
                        <img id="rocks" src="rocks.png">
                            <img id="water" src="water.png">
                            </img>
                        </img>
                    </img>
                </img>
            </img>
        </section>
        <div class="sec">
            <a class="link" href="#" target="_blank">
                Travel The City Of Lions
            </a>
            <div class="movie_card" id="bright">
                <div class="info_section">
                    <div class="movie_header">
                        <img class="locandina" src="img/gir.jpg"/>
                        <h1>
                            Gir Safari
                        </h1>
                        <h4>
                            Kingdom Of Lions<br> 
                            <b>₹9,598/person</b>
                        </h4>
                        <!-- <h4>Omkaleshwar</h4> -->
                        <!-- <span class="minutes">117 min</span>
      <p class="type">Action, Crime</p> -->
                    </div>
                    <div class="movie_desc">
                        <p class="text">
                            <u>
                                The Gir National Park</u>
                             and Wildlife Sanctuary are one of the most significant national parks in India that provides shelter to the Asiatic Lions.
                        </p>
                    </div>
                    <div class="movie_social">
                        <ul>
                            <li>
                                <?php
                                    // session_start();
                                    if(isset( $_SESSION['loggedin'])==true){
                                        $_SESSION['destination']='Gir Safari';
                                        $_SESSION['price']='9,598/-';
                                        echo "<i class='material-icons'>";
                                        echo "<a class='cta' href='payment.php'>";
                                        echo "<div>Book</div>";
                                        echo "</a>";
                                        echo "</i>";
                                    }
                                    else{
                                        echo "<a href='login_form.php'>";
                                        echo "<h2 style='color:black;font-weight:500px;'><b>Please Login for Book</b></h2>";
                                        echo "</a>";
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="blur_back bright_back">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="py-5">
                            <h2 class="text-primary mb-4">
                                Schedule
                            </h2>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 0
                                        </strong>
                                        • Jul 04, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Departing from Ahmedabad
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Early morning gathering and departure of the camp.
                                    </p><br><hr><br>

                                    <!-- -->
                                </div>
                                <!-- -->
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 1
                                        </strong>
                                        • Jul 05, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Arrival at Gir
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Sightseeing At Kamleshwar Dam & Night Stay in Gir
                                    </p><br>
                                    <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/dam.jpg"><br><br><hr><br>
                                    <!-- -->
                                </div>
                                <!-- -->
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 3
                                        </strong>
                                        • Jul 06, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Safari At Sasan Gir National Park
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Whole Day Safari & Night Stay in Gir
                                    </p><br>
                                    <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/lion.jpg"><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 4
                                        </strong>
                                        • Jul 07, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Trekking At Girnar Hills
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        SightSeeing at from the Hills
                                    </p><br>
                                    <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/girnarhill.jpg"><br><br><hr><br>  
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 5
                                        </strong>
                                        • Jul 07, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Return Journey towards Ahmedabad
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Arrival At Ahmedabad[End Of journey]
                                    </p><br><hr>
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
                </div>
            </div>
        </div>
    </body>
</html>
