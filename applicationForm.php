<?php 
require_once "include/requireLogin.php"; ?>

<div class="applicationFormContainer">
<h1 class="heading">Online NIC Application</h1>
<form class = "application" action="include/addApplication.php" method="POST">
    <label>Full Name</label><br>
    <input type="text" name="name" id="name" placeholder="Amandi Wickramasinghe" required><br>
    <label>Address</label><br>
    <input type="text" name="address" id="address" placeholder="7/14, Glanse Rd, Colombo" required><br>
    <label>Gender</label><br>
    <input type="radio" name="gender" id="male" value="male" required>
    <label for="male">Male</label>
    <input type="radio" name="gender" id="female" value="female" required>
    <label for="female">Female</label><br>
    <label>Date Of Birth</label><br>
    <input type="date" name="dob" id="dob" required><br>
    <label>Birth Certificate Number</label><br>
    <input type="text" name="bcnum" id="bcnum" placeholder="567744K" required><br>
    <label>Civil Status</label><br>
    <input type="radio" name="cvstatus" id="single" value="single" required>
    <label for="single">Single</label>
    <input type="radio" name="cvstatus" id="married" value="married" required>
    <label for="married">Married</label><br>
    <label>Email</label><br>
    <input type="email" name="email" id="email" required><br>
    <label>Contact</label><br>
    <input type="tel" name="contact" id="contact" required><br>
    <input type="checkbox" name="consent" id="consent" onclick="enableButton()">
    <label for="consent">I hereby declare that the information above are true, accurate and complete.</label><br>
    <input type="submit" id="appSubmit" name ="appSubmit" value="Submit Application" disabled>
    <!--DOB, BCN, Civil status, email, contact,  -->
</form>

<p class="appInfo">Need more information regarding application; <a href="details.php">click here.</a></p>
</div>
<?php require_once "include/footer.php"; ?>