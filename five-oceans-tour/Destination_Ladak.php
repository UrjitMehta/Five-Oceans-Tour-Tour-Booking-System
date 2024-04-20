<!DOCTYPE html>
<html>
    <head>
        <title>
            Five Oceans Tour
        </title>
        <link href="style.css" rel="stylesheet" type="text/css">
            <link href="des3.css" rel="stylesheet" type="text/css">
            </link>
        </link>
    </head>
    <body>
        <header id="header">
            <a class="logo" href="index.php">
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
                    The Crown Of India
                </span>
                <br>
                    Ladakh
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
                Travel The Crown Of India
            </a>
            <div class="movie_card" id="bright">
                <div class="info_section">
                    <div class="movie_header">
                        <img class="locandina" src="img/ladak.jpg"/>
                        <h1>
                            Ladakh
                        </h1>
                        <h4>
                            Crown Of India
                            <b>₹19,500/person</b>
                        </h4>
                        <!-- <h4>Omkaleshwar</h4> -->
                        <!-- <span class="minutes">117 min</span>
      <p class="type">Action, Crime</p> -->
                    </div>
                    <div class="movie_desc">
                        <p class="text">
                            <u>
                                Ladakh</u>
                            is most famous for breathtaking landscapes, the crystal clear skies, thrilling adventure activities, Buddhist Monasteries and festivals.<br>
                        </p>
                    </div>
                    <div class="movie_social">
                        <ul>
                            <li>
                                <?php
                                    // session_start();
                                    if(isset( $_SESSION['loggedin'])==true){
                                        $_SESSION['destination']='Ladakh';
                                        $_SESSION['price']='19,500/-';
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
                                            Day 1
                                        </strong>
                                        • Jul 04, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Start Journey from Ahmedabad
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Overnight Train Journey
                                    </p><br><hr><br>
                                    <!-- -->
                                </div>
                                <!-- -->
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 2
                                        </strong>
                                        • Jul 05, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Arrival at Jammu
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Night Stay in Jammu
                                    </p><br><hr><br>
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
                                        Journey from Jammu to Srinagar
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Sightseeing & Night Stay in Srinagar
                                    </p><br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/jammu.jpg">
                                        </img><br><br><hr><br>
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
                                        Journey towards Sonmarg & Visit
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Night Stay in Sonamarg
                                    </p>
                                    <br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/jammu1.jpg">
                                        </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 5
                                        </strong>
                                        • Jul 08, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Departure for Leh via Kargil Visit
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Night Stay in Leh
                                    </p>
                                    <br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/leh.jpg">
                                        </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 6
                                        </strong>
                                        • Jul 09, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Day for Sightseeing in Leh
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Visit Local Places Nearby Leh
                                    </p>
                                    <br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/leh1.jpg">
                                        </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 7
                                        </strong>
                                        • Jul 10, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Journey Towards Pangong Lake
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Visit the most famous location in Leh - Pangong Tso
                                    </p>
                                    <br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/lake.jpg">
                                        </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 8
                                        </strong>
                                        • Jul 11, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Travel to Nubra Valley
                                        <p class="text-secondary small mb-0">
                                            Visit Khardungla Pass
                                        </p>
                                        <br>
                                            <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/valley.jpg">
                                            </img><br><br><hr><br>
                                    </div>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 9
                                        </strong>
                                        • Jul 12, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Return Journey towards Leh
                                        <p class="text-secondary small mb-0">
                                            Evening Spent with Leh Market Visit
                                        </p>
                                        <br>
                                            <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/backleh.jpg">
                                            </img><br><br><hr><br>
                                    </div>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 10
                                        </strong>
                                        • Jul 13, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Journey towards Zing Zing Bar
                                        <p class="text-secondary small mb-0">
                                            Night Stay at Zing Zing Bar/Sarchu
                                        </p>
                                        <br>
                                            <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/zing.jpg">
                                            </img><br><br><hr><br>
                                    </div>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 11
                                        </strong>
                                        • Jul 14, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Journey towards Manali
                                        <p class="text-secondary small mb-0">
                                           Passing Through Attal Tunnel/Rohtang pass, Arrive at Manali Campsite
                                        </p>
                                        <br>
                                            <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/bike.jpg">
                                            </img><br><br><hr><br>
                                    </div>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 12
                                        </strong>
                                        • Jul 15, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Manali Visit & Night Travel to Pathankot
                                        <p class="text-secondary small mb-0">
                                           Day for Paragliding, Rafting & Sightseeing in Manali
                                        </p>
                                        <br>
                                            <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/manali_1.jpg">
                                            </img><br><br><hr><br>
                                    </div>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 13
                                        </strong>
                                        • Jul 16, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Return Journey towards Ahmedabad
                                        <p class="text-secondary small mb-0">
                                           Overnight Train Journey with Experience Sharing
                                        </p><br><hr>
                                        </br>
                                    </div>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 14
                                        </strong>
                                        • Jul 17, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Arrival at Ahmedabad
                                        <p class="text-secondary small mb-0">
                                           The end of the camp
                                        </p>
                                        </br><hr>
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
                </div>
            </div>
        </div>
    </body>
</html>
