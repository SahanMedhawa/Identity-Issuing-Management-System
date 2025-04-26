<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signup.css">
    <script src ="js/signup.js"></script>
    <style>
        body {  /* Add background photo using CSS */ 
            background-image: url('images/loginbg.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
<div class="identity-system">Identity Management System</div>
<section class="container forms">
    <div class="form signup">
        <div class="form-content">

            <img src="images/signinlogo.png" alt="" class="profilelogo">
            <header>Sign Up</header>

            <form action="include/addUser.php" method="POST">

                <div class="field-input-field">
                    <h3>First Name</h3>
                    <input type="text" placeholder="John" class="firstname" name="firstname" >
                    <h3>Last Name</h3>
                    <input type="text" placeholder="Doe" class="lastname" name="lastname" >
                    <h3>Email</h3>
                    <input type="email" placeholder="john@gmail.com" class="email" name="email" >
                    <h3>Password</h3>
                    <input type="password" placeholder="********" class="password" id="password1" name="password1" >
                    <h3>Confirm Password</h3>
                    <input type="password" placeholder="********" class="confirm-password" id="password2" name="password2" >
                    <h3>Phone Number</h3>
                    <input type="tel" placeholder="0XX-XXXXXXX" class="phone" pattern="[0-9]{10}" maxlength="10" title="Enter a valid Sri Lankan phone number" name="phoneno"> 
                </div>

                <div class="space "></div> <!--space-->

                <div class="field-input-field">
                    <input type="checkbox" id="agreement" class="agreement" required>
                    <label for="agreement">I agree to the Terms & Conditions</label>
                </div>

                <div class="space"></div> <!--space-->

                <div class="field button-field">
                    <button type="submit" onclick="checkPassword()">Sign Up</button>
                </div>
                
                <div class="space"></div> <!--space-->

                <div class="form-link">
                    <span>Already have an account? <a href="login.php" class="login-link">Login</a></span>
                </div>
            </form>
        </div>
    </div>
</section>   
</body>
</html>
