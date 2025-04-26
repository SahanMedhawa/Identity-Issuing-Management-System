function enableButton()
{
    var checkBox = document.getElementById("consent").checked;
    if (checkBox == true)
    {
        document.getElementById("appSubmit").disabled = false;
    }
    else
    {
        document.getElementById("appSubmit").disabled = true;
    }

}