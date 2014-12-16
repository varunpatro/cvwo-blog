function authenticate() {
    var auth = new XMLHttpRequest;
    var uname = document.getElementById('username').value;
    var pass = document.getElementById('password').value;
    var str = "username=" + uname + "&password=" + pass;
    auth.open('POST', '/auth.php');
    auth.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    auth.send(str);
    auth.onreadystatechange = function() {
        document.getElementById('insert').innerHTML = auth.responseText;
        if (auth.responseText) { <? php $_SESSION["login"] = true; ?>
        } else { <? php $_SESSION["login"] = false; ?>
        }
    }
}