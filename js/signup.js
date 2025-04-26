function checkPassword(){

	var password1 = document.getElementById("password1").value;
	var password2 = document.getElementById("password2").value;

	if (password1==password2)
	{
		return true;
	}
	else
	{
		alert("Password Mismatch!");
		return false;
	}
    
}

