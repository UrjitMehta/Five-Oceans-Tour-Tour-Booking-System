<?php
require_once "config.php";
     
    // Define variables and initialize with empty values
     $email = $password = "";
    $email_err = $password_err = "";


    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    	 $input_email = trim($_POST["email"]);
        if(empty($input_email)){
            $email_err = "Please enter an email.";     
        } else{
            $email = $input_email;
        }


         // Validate password
        $input_password = trim($_POST["password"]);
        if(empty($input_password)){
            $password_err = "Please enter the password.";     
        } else{
            $password = $input_password;
        }
    
    if(empty($email_err) && empty($password_err)){
            // Prepare an insert statement

    	$sql = "SELECT * FROM user WHERE email=? AND password=? ";

             
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ss", $param_email,$param_password);


                // Set parameters
                // $param_name = $name;
                $param_email = $email;
                $param_password = $password;

                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Records created successfully. Redirect to landing page
                    $result=mysqli_stmt_get_result($stmt);
                    if(mysqli_num_rows($result)==1){
                    	session_start();
                        $row = mysqli_fetch_array($result);
                        $_SESSION['loggedin']=true;
                        $_SESSION['name']=$row['name'];
                        $_SESSION['user_id']=$row['id'];
                    	header("location: index.php");
                    }
                    else{
                    	header("location:login_form.php?   error=1");
                        exit();
                    }
                    
                    
                } else{
                    echo "Something went wrong. Please try again later.";
                }
            }


             // Close statement
            mysqli_stmt_close($stmt);
        }
        
        // Close connection
        mysqli_close($link);
    }
?>