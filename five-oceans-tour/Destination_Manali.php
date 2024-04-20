<!DOCTYPE html>
<html>
    <head>
        <title>
            Five Oceans Tour
        </title>
        <link href="style.css" rel="stylesheet" type="text/css">
            <link href="des5.css" rel="stylesheet" type="text/css">
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
                    Himachal's Jewel
                </span>
                <br>
                    Manali
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
                Travel The Himalayan Town
            </a>
            <div class="movie_card" id="bright">
                <div class="info_section">
                    <div class="movie_header">
                        <img class="locandina" src="img/man.jpg"/>
                        <h1>
                            Manali
                        </h1>
                        <h4>
                            Himachal's Jewel<br> 
                            <b>₹7,999/person</b>
                        </h4>
                    </div>
                    <div class="movie_desc">
                        <p class="text">
                            <u>
                                Manali</u>
                             is considered as God’s heaven. From majestic mountains to long rivers to aromatic forest and an outstanding blend of the colours of nature, Manali has its all.<br>
                        </p>
                    </div>
                    <div class="movie_social">
                        <ul>
                            <li>
                                <?php
                                    // session_start();
                                    if(isset( $_SESSION['loggedin'])==true){
                                        $_SESSION['destination']='Manali';
                                        $_SESSION['price']='7,999/  -';
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
                                        • Jun 04, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Departure from Ahmedabad
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Overnight Train Journey
                                    </p><br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/ahem.jpg">
                                        </img><br><br><hr><br>
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
                                        • Jun 05, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Free time at Pathankot & Depart to Kasol
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Free time at Pathankot & Depart to Kasol
                                    </p><br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/panthan.jpg">
                                        </img><br><br><hr><br>
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
                                        • Jun 06, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Arrival at Kasol Campsite
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Day for Acclimatisation, Preparation & Local Sightseeing
                                    </p><br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/kasol.jpg">
                                        </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 4
                                        </strong>
                                        • Jun 07, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Trek to Kheerganga Campsite
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Visit to Kheerganga & Back to Campsite
                                    </p>
                                    <br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/khee.jpg">
                                        </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 5
                                        </strong>
                                        • Jun 08, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Trek back from Kheerganga
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Visit Manikaran & Night at Manali Campsite
                                    </p>
                                    <br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/manikaran.jpg">
                                        </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 6
                                        </strong>
                                        • Jun 09, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Free Day in Manali
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Day for Sightseeing in Manali
                                    </p>
                                    <br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/manali_1.jpg">
                                        </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 7
                                        </strong>
                                        • Jun 10, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Day for Adventure Activities & Naggar Visit
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        Day for Adventure Activities & Departure for Pathankot in Night
                                    </p>
                                    <br>
                                        <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/para.jpg">
                                        </img><br><br><hr><br>
                                </div>
                            </div>
                            <div class="container_1jKos">
                                <div>
                                    <div class="text-secondary small text-uppercase">
                                        <strong>
                                            Day 8
                                        </strong>
                                        • Jun 11, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Return Back to Ahmedabad
                                        <p class="text-secondary small mb-0">
                                            Journey Back to Home, Overnight train Journey
                                        </p>
                                        <br>
                                            <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/station.jpg">
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
                                        • Jun 12, 2021
                                    </div>
                                    <div class="h2 my-2">
                                        Arrival at Ahmedabad
                                        <p class="text-secondary small mb-0">
                                            The End of the Camp
                                        </p>
                                        <br>
                                            <img sizes="(max-width: 1000px) 100vw, 1000px" src="img/kite.jpg">
                                            </img><br><br><hr><br>
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
