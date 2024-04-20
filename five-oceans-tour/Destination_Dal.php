<!DOCTYPE html>
<html>
    <head>
        <title>
            Five Oceans Tour
        </title>
        <link href="style.css" rel="stylesheet" type="text/css">
            <link href="des6.css" rel="stylesheet" type="text/css">
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
                    Pleasant Climate With Natural Beauty
                </span>
                <br>
                    Dalhousie
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
                Travel The Snow Mountains
            </a>
            <div class="movie_card" id="bright">
                <div class="info_section">
                    <div class="movie_header">
                        <img class="locandina" src="img/dal.jpg"/>
                        <h1>
                            Dalhousie
                        </h1>
                        <h4>
                            Snow Town<br> 
                            <b>₹5,999/person</b>
                        </h4>
                    </div>
                    <div class="movie_desc">
                        <p class="text">
                            <u>
                                Dalhousie</u>
                              is famous for Khajjiar Lake, Dainkund Peak, Kalatop and Kalatop Forest. Dalhousie Adventure Activities including Rock Climbing and many more....<br>
                        </p>
                    </div>
                    <div class="movie_social">
                        <ul>
                            <li>
                                <?php
                                    // session_start();
                                    if(isset( $_SESSION['loggedin'])==true){
                                        $_SESSION['destination']='Dalhousie';
                                        $_SESSION['price']='5,999/-';
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
                                        • Jun 26, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Departure from Ahmedabad
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Starting of the Trail. Overnight train journey.
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
                                        • Jun 27, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Arrival at Pathankot
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Drive to Dalhousie & Night stay at Naghui Campsite
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
                                        • Jun 28, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Trek to Talai Camp
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Journey start into the lap of Himalayas!
                                    </p><br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/fol.jpg">
                                        </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 4
                                        </strong>
                                        • Jun 29, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Trek to Kalatop
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Trek to Kalatop ABC
                                    </p>
                                    <br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/forest.jpg">
                                        </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 5
                                        </strong>
                                        • Jun 30, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Trek to Dainkund Peak
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Trek to the Summit Point and Back
                                    </p>
                                    <br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/dain.jpg">
                                        </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 6
                                        </strong>
                                        • Jul 01, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Visiting Khajjiar
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Day for Sightseeing in Manali
                                    </p>
                                    <br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/kha.jpg">
                                        </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 7
                                        </strong>
                                        • Jul 2, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Departure for Ahmedabad
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Train journey back to Ahmedabad
                                    </p><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 8
                                        </strong>
                                        • Jul 3, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Arrival at Ahmedabad
                                        <p class="text-secondary small mb-0">
                                            The end of the camp
                                        </p><br><hr><br>
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
