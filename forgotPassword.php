<?php

include ("include/connectDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $newPassword = md5($_POST['password1']);
    $confirmPassword = md5($_POST['password2']);

    // Check if passwords match
    if (md5($newPassword) === md5($confirmPassword)) {

        // Update the password in the database
        $sql = "UPDATE users SET password = '$newPassword' WHERE email = '$email' LIMIT 1"; // Use backticks instead of single quotes
        $result = $connect->query($sql);

        // Redirect to login page or display a success message
        header("Location: login.php");
        exit();
    } 
    else {
        // Passwords don't match, display error message
        echo "<div class='error-message'>Password Won't match</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>resetpassword</title>
    <link rel="stylesheet" href="css/forgotPassword.css">
    <style>
        body {  /* Add background photo using CSS */ 
            background-image: url('images/loginbg.jpg');
            background-size: cover;
            background-position: center;
        }
        .error-message {
            color: #fff;         
            background-color: #e74c3c; 
            font-size: 16px;      
            padding: 15px 20px;  
            border-radius: 5px;  
            position: fixed;      
            top: 790px;            
            left: 50%;            
            transform: translate(-50%, -50%); /*center*/
            z-index: 9999;   /*put on top of everything*/ 
        }
    </style>
</head>

<body>
<div class="identity-system">Identity Management System</div>
<section class="container forms">
    <div class="form login">
        <div class="form-content">

            <img src="images/warning.png" alt="" class="profilelogo">
            <div class="space"></div> <!--space-->

            <header>Reset Password</header>
            <div class="space"></div> <!--space-->

            <form action="forgotPassword.php" method="post">

                <div class="field-input-field">
                    <h3>Email </h3>
                    <input type="email" placeholder="john@gmail.com" class="email" name="email" required>
                    <div class="space"></div> <!--space-->

                    <h3>New Password</h3>
                    <input type="password" placeholder="********" class="password" name="password1" required>
                    
                    <h3>Confirm New Password</h3>
                    <input type="password" placeholder="********" class="password" name="password2" required>
                </div>

                <div class="space"></div> <!--space-->
                            
                <div class="field button-field">
                   <button>Reset</button>
                </div>

                <div class="space"></div> <!--space-->

            </form>
        </div>
    </div>
</section>   
</body>
</html>