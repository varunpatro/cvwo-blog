function add() {
    var uname = document.getElementById("uname");
    var pass = document.getElementById("pass");
    var repass = document.getElementById("repass");

    if (repass.value === pass.value) {
        uname.setAttribute("disabled", "");
        pass.setAttribute("disabled", "");
        repass.setAttribute("disabled", "");
        var str = "uname=" + uname.value + "&pass=" + pass.value;
        var add_req = new XMLHttpRequest();
        add_req.open("POST", "insert_user.php");
        add_req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        add_req.onreadystatechange = function() {
            document.getElementById('change').innerHTML = "Hey " + uname + ", we have added you to our database! Happy writing :)";
            document.getElementById('change').innerHTML = add_req.responseText;
        };
        add_req.send(str);
    } else {
        pass.value = "";
        repass.value = "";
        document.getElementById('change').innerHTML = "Passwords do not match. Please re-enter";
    }
}
