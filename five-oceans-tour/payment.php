<!DOCTYPE html>
<html>
<head>
  <title>Creative Contact Form UI</title>
  <link rel="stylesheet" type="text/css" href="payment_css.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
  
  <section>
  <div class="container">
    <div class="contactinfo">
      <div>
        <h2>Payment</h2>
        <ul class="info">
          <li>
            <span><?php 
            session_start();
            echo $_SESSION['destination'];
            echo "<br>".$_SESSION['price'];
            ?></span>
          </li>
        </ul>
      </div>
      <div>
         <ul class="sci">
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> 
          <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li> 
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> 
        </ul>
      </div>
    </div>
    <form action="booking.php" method="POST">
    <div class="contactForm">
      <h2>Pay Now</h2>
      <div class="formBox">
        <div class="inputBox w50">
          <input type="text" name="name" required>
          <span>Name</span>
        </div>
        <div class="inputBox w50">
          <input type="text" name="email" required>
          <span>Email Address</span>
        </div>
        <div class="inputBox w50">
          <input type="text" name="mobile" required>
          <span>Mobile Number</span>
        </div>
        <div class="inputBox w50">
          <input type="text" name="upi_id" required>
          <span>Enter UPI ID</span>
        </div>
        <center>
        <div class="inputBox w100">
          <input type="submit" value="Pay Now">
        </div>
      </center>
      </div>  
    </div>
  </form>
  </div>
  </section>
</body>
</html>