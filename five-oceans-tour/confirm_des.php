<!DOCTYPE html>
<html>
    <head>
        <title>
            Five Oceans Tour
        </title>
            <link href="confirm_des.css" rel="stylesheet" type="text/css">
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
                    <a href="Gallery.html">
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="Destination.php">
                        Destination
                    </a>
                </li>
                <li>
                    <a href="contact.html">
                        Contact
                    </a>
                </li>
                <li>
                    <?php
                      session_start();
                      if(isset( $_SESSION['loggedin'])==true)
                        {echo "<a class='active' href='confirm_des.php'>My Bookings</a> ";}
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
        <div class="sec" id="sec1">
            <!-- <a class="link" href="#" target="_blank">
                Payment Done Successfully
            </a> -->
            <?php
                require_once "config.php";
    
            // Prepare an insert statement
            $sql = "SELECT * FROM booking WHERE user_id=?";

             
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_user_id);


                // Set parameters
                $param_user_id=$_SESSION['user_id'];

                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Records created successfully. Redirect to landing page
                    $result=mysqli_stmt_get_result($stmt);
                    if(mysqli_num_rows($result)>=1){
                        while ($row = mysqli_fetch_array($result)) {
                        echo "<div class='movie_card' id='bright'>";
                        echo "<div class='info_section'>";
                            echo "<div class='movie_header'>";
                                echo "<h4>Payment Slip</h4>";
                            echo "</div>";
                            echo "<div class='movie_desc'>";
                                echo "<p class='text'>";
                                    echo "Booking Id: ".$row['booking_id']."<br><br>";
                                    echo "User Id: ".$row['user_id']."<br><br>";
                                    echo "Name: ".$row['name']." <br><br>";
                                    echo "Mobile: ".$row['mobile']."<br><br>";
                                    echo "Destination Name: ".$row['des_name']."<br><br>";
                                    echo "Price: ".$row['price']."<br><br>";          
                                echo "</p>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class='blur_back bright_back'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<hr>";
                        }
                    }
                }
                else{
                        header("location:login_form.php?error=1");
                        exit();
                    }
                    
                    
                 // Close statement
                mysqli_stmt_close($stmt);
            } 
                else{
                    echo "Something went wrong. Please try again later.";
                }
        // Close connection
        mysqli_close($link);
    
?>
            
        </div>
    </body>
</html>
