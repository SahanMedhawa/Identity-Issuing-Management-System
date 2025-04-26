<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
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
            top: 720px;            
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

            <img src="images/signinlogo.png" alt="" class="profilelogo">
            <header>Log in</header>

            <form action="include/validateUser.php" method="POST">

                <div class="field-input-field">
                    <h3>Email </h3>
                    <input type="email" placeholder="john@gmail.com" class="email" name="email" required>
                    <h3>Password </h3>
                    <input type="password" placeholder="********" class="password" name="password" required>
                </div>

                <div class="form-link">
                    <a href="forgotPassword.php" class="forget-pass">Forgot Password?</a>
                </div>

                <div class="space"></div> <!--space-->
                            
                <div class="field button-field">
                   <button>Login</button>
                </div>

                <div class="line"></div>

                <div class="space"></div> <!--space-->

                <div class="form-link">
                    <span>Don't have an account? <a href="signup.php" class="signup-link">Signup</a></span>
                </div>
                <br>
            </form>
            <div class="field button-field">
                    <a href="adminLogin.php"><button>Admin Portal</button></a>
                </div>
        </div>
    </div>
</section>   
</body>
</html>
