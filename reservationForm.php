<?php require_once 'include/requireLogin.php'; ?>

<div class="checkersbg">
<h1 class="headingRes"> Online Appointment Reservation </h1> <br>
<form class = "reservation" action="include/addReservation.php" method="POST">


<label> Full Name</label> <br>
<input type="text" name="name" id="name"   required> <br>
<label> Email </label> <br>
<input type="email" name="email" id="email" required> <br>
<label> Contact </label> <br>
<input type="tel" name="contact" id="contact" required> <br>
<label> Appointment Reason </label> <br>
<input type="text" name="reason" id="reason" required> <br>
<Label>Select an Appointment  Date </labe> <br>
<input type="date" name="date" id="date" required> <br>

<input type="submit" name="Cbutton" id="Cbutton" value="Submit Reservation">
</form>

<br>
<img class="cal2" src="images/cal2.png" length=400 width=400>
</div>

<?php require_once "include/footer.php"; ?>

