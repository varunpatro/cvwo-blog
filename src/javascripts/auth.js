function authenticate() {
    var auth = new XMLHttpRequest();
    var uname = document.getElementById('username');
    var pass = document.getElementById('password');
    // uname.setAttribute("disabled", "");
    // pass.setAttribute("disabled", "");
    var str = "uname=" + uname.value + "&pass=" + pass.value;
    auth.open('POST', '/auth.php');
    auth.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    auth.send(str);
    auth.onreadystatechange = function() {
        console.log(auth.responseText);
        if (auth.responseText === "correct") {
            window.location.replace("/");
        } else if (auth.responseText === "incorrect") {
            document.getElementById('insert').innerHTML += "Incorrect Password! Please try again.";
            pass.value = "";
        } else if (auth.responseText === "not_found") {
            document.getElementById('insert').innerHTML += "User not found. Try another username.";
            pass.value = "";
            uname.value = "";
        }
    }
}