<?php


require_once "config.php";
     
    // Define variables and initialize with empty values
    $name = $email = $password = "";
    $name_err = $email_err = $password_err = "";

    $r_token=rand(1000,9999);

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Validate name
        $input_name = trim($_POST["name"]);
        if(empty($input_name)){
            $name_err = "Please enter a name.";
        } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $name_err = "Please enter a valid name.";
        } else{
            $name = $input_name;
        }




        // Validate email
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


        // Check input errors before inserting in database
        if(empty($name_err) && empty($email_err) && empty($password_err)){
            // Prepare an insert statement
            $sql = "INSERT INTO user (name, email, password, token) VALUES (?, ?, ?, ?)";
             
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_email, $param_password,$param_token);

                // Set parameters
                $param_name = $name;
                $param_email = $email;
                $param_password = $password;
                $param_token=$r_token;

                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Records created successfully. Redirect to landing page
                    header("location:login_form.php");
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