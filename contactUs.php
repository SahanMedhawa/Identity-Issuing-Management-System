<?php require_once 'include/requireLogin.php'; ?>

<div class="back2">

<div style="display:flex;">
    <div class="col">
        <h1 class="heaading"> Contact Us</h1>

        <form class="contactUs" id="contactForm" action="include/contactUsForm.php" method="POST">
            <p>To contact us through email please fill the below form and we will contact you at the earliest notice.</p>

            <label>Name:</label><br>
            <input type="text" name="name" id="name" placeholder="Enter your name" required><br>

            <label>Email:</label><br>
            <input type="email" name="email" id="email" placeholder="useremail@email.com" required> <br>

            <label>Contact No:</label><br>
            <input type="tel" name="contact" id="contact" placeholder="Enter ur phone number" required> <br>

            <label>Tell us what you need help with:</label><br>
            <textarea id="textarea" name="message" rows="10" cols="90" required></textarea><br><br><br>

            <button class="contactsubmit" type="submit">Submit</button><br><br>
        </form>
      </div>

      <div id="contactusinfo">
        <div class="col">
            <h1 id="help" >HELP DESK</h1>

            <p> Open time:
                (09.00 am - 06.00 pm Monday-Friday)<br><br>
                <hr style="border-top: 1px solid darkblue;"><br>
                <b><i class="fa-solid fa-phone" style="color: #3573d3; margin-right: 10px;"></i>Contact No:</b>
                0113450954 / 0705469342<br><br><br>
                <b><i class="fa-solid fa-envelope" style="color: #3573d3; margin-right: 10px;"></i>Email:</b>
                help@idissuing.com<br><br><br>
                <b><i class="fa-solid fa-location-dot" style="color: #3573d3; margin-right: 10px;"></i>Address:</b>
                45 Lane, ID Office, Pittugala, Malabe.<br><br><br>
            </p>
        </div>
    </div>
</div>
<br>

</div>
<?php require_once "include/footer.php"; ?>