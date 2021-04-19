function validation() {
    var name = document.getElementById("user_name").value;

    if (name.length < 5) {
        document.getElementById("user_name1").innerHTML = "Username must be more then 5 character";
        return false;
    } else {
        document.getElementById("user_name1").innerHTML = "";
    }

    var password = document.getElementById("password_id").value;
    if (password.length < 5 || password.length > 15) {
        document.getElementById("pass").innerHTML = "Password must be greater then 5 char and less then 15 char";
        return false;
    } else if (password.search(/[A-Z]/) == -1) {
        document.getElementById("pass").innerHTML = "password must contain at least one uppercase";
        return false;

    } else if (password.search(/[a-z]/) == -1) {
        document.getElementById("pass").innerHTML = "password must contain at least one lowercase";
        return false;

    } else if (password.search(/[0-9]/) == -1) {
        document.getElementById("pass").innerHTML = "password must contain at least one Number";
        return false;

    } else if (password.search(/[@!#$%&*]/) == -1) {
        document.getElementById("pass").innerHTML = "password must contain at least one Special-char";
        return false;

    } else {
        document.getElementById("pass_message").innerHTML = "";
    }

}