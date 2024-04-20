<?php


require_once "config.php";
	session_start();
    // Define variables and initialize with empty values
    $booking_id = $name = $des_name= $email=$mobile=$upi_id=$price=$user_id = "";
    $booking_id_err = $name_err = $des_name_err= $email_err=$mobile_err=$upi_id_err=$price_err=$user_id_err = "";

        $fourRandomDigit = mt_rand(1000,9999);

    	$des_name=$_SESSION['destination'];
        $price=$_SESSION['price']; 
        // $user_id=1;
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Validate name
        $input_name = trim($_POST["name"]);
        if(empty($input_name)){
            $name_err = "Please enter a name.";
        }else{
            $name = $input_name;
        }

        // Validate email
        $input_email = trim($_POST["email"]);
        if(empty($input_email)){
            $email_err = "Please enter an email.";     
        } else{
            $email = $input_email;
        }
		// Validate mobile
        $input_mobile = trim($_POST["mobile"]);
        if(empty($input_mobile)){
            $mobile_err = "Please enter an mobile number.";     
        } else{
            $mobile = $input_mobile;
        }
        //UPI remaining code
		$input_upi_id = trim($_POST["upi_id"]);
        if(empty($input_upi_id)){
            $upi_id_err = "Please enter an UPI ID.";     
        } else{
            $upi_id = $input_upi_id;
        }

        // Check input errors before inserting in database
        if(empty($name_err) && empty($email_err) && empty($mobile_err) && empty($upi_id_err)  ){
            // Prepare an insert statement
            $sql = "INSERT INTO booking (name, des_name ,email, mobile,upi_id,price,user_id)    VALUES (?, ? , ?, ? , ? , ? , ?)";
             
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "sssssss", $param_name,$param_des, $param_email,$param_mobile, $param_upi_id,$param_price,$param_user_id);

                // Set parameters
                $param_name = $name;
                $param_email = $email;
                $param_mobile=$mobile;
                $param_upi_id = $upi_id;
                $param_des=$_SESSION['destination'];
                $param_price=$_SESSION['price'];
                $param_user_id=$_SESSION['user_id'];

                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Records created successfully. Redirect to landing page
                    header("location: confirm_des.php");
                    exit();
                } else{
                    echo "Something went wrong. Please try again later.";
                }   
            }
             // Close statement
                mysqli_stmt_close($stmt);
        }
        else{
            header("location:login_form.php? signuperror=1");
        }
        
        // Close connection
        mysqli_close($link);
    }
?>