function authenticate() {
    var auth = new XMLHttpRequest();
    var uname = document.getElementById('username');
    var pass = document.getElementById('password');
    uname.setAttribute("disabled", "");
    pass.setAttribute("disabled", "");
    var str = "uname=" + uname.value + "&pass=" + pass.value;
    auth.open('POST', '/auth.php');
    auth.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    auth.send(str);
    auth.onreadystatechange = function() {
        document.getElementById('insert').innerHTML = auth.responseText;
    }
}

function reset() {
    var reset_ajax = new XMLHttpRequest();
    reset_ajax.open("GET", "reset.php");
    reset_ajax.send();
}