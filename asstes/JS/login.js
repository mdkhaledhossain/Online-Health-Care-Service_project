function validateFrom(){
    var x = document.forms["login_form"] ["email"].value;
    var y = document.forms["login_form"] ["pass"].value;

    if(x == ""){
        alert(" Email can't be empty");
        return false;
    }

    if(y == ""){
        alert("Passwoard can't be empty");
        return false;
    }
}