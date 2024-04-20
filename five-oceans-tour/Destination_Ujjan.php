<!DOCTYPE html>
<html>
    <head>
        <title>
            Five Oceans Tour
        </title>
        <link href="style.css" rel="stylesheet" type="text/css">
            <link href="des1.css" rel="stylesheet" type="text/css">
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
                      if(isset( $_SESSION['loggedin'])==true)
                        {echo "<a href='confirm_des.php'>My Bookings</a> ";}
                    else
                        {echo "<a href='login_form.php'>Login/Signup</a>";}   
                    ?>
            </li>
                <li>
                    <?php 
                    session_start();
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
                    City Of Temples
                </span>
                <br>
                    Ujjain
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
                Travel The City Of Temples
            </a>
            <div class="movie_card" id="bright">
                <div class="info_section">
                    <div class="movie_header">
                        <img class="locandina" src="ujjain.png"/>
                        <h1>
                            Ujjain
                        </h1>
                        <h4>
                            Mahakaleshwar<br> 
                            <b>₹12,890/person</b>
                        </h4>
                        <!-- <h4>Omkaleshwar</h4> -->
                        <!-- <span class="minutes">117 min</span>
      <p class="type">Action, Crime</p> -->
                    </div>
                    <div class="movie_desc">
                        <p class="text">
                            <u>
                                Ujjain
                            </u>
                            is known as the temple city for its numerous temples from different eras.The world's largest religious gathering, Kumbha Mela, is held on the banks of the Shipra river once in every 12 years.
                        </p>
                    </div>
                    <div class="movie_social">
                        <ul>
                            <li>
                                <?php
                                    // session_start();
                                    if(isset( $_SESSION['loggedin'])==true){
                                        $_SESSION['destination']='Ujjain';
                                        $_SESSION['price']='12,890/-';
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
                                        Arrival at Indore
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Night Stay in Indore
                                    </p><br>
                                    <img sizes="(max-width: 1000px) 100vw, 1000px" src="INDORE.jpg">
                                        <!-- -->
                                    </img><br><br><hr><br>
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
                                        Journey from Indore to Omkareshwar
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Sightseeing & Night Stay Omkareshwar
                                    </p><br>
                                    <img sizes="(max-width: 1000px) 100vw, 1000px" src="om.jpg">
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
                                        Journey towards Mahakaleshwar
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Two Days Stay in Mahakaleshwar
                                    </p><br><hr><br>
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
                                        Visits To Holy Places
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Visits to Lord Krishna's School & More
                                    </p><br>
                                    <img sizes="(max-width: 1000px) 100vw, 1000px" src="krishna.jpg">
                                    </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 6
                                        </strong>
                                        • Jul 07, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Bhasma Aarti At Mahakaleshwar
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Night Aarti At HariSiddhi Temple
                                    </p><br>
                                    <img sizes="(max-width: 1000px) 100vw, 1000px" src="Harsiddhi.jpg">
                                    </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 7
                                        </strong>
                                        • Jul 07, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Return Journey towards Ahmedabad
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Overnight Train Journey with Experience Sharing
                                    </p><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 8
                                        </strong>
                                        • Jul 07, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Arrival at Ahmedabad
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        The end of the Tour
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
