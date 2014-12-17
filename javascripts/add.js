function add() {
				var uname = document.getElementById("uname").value;
				var pass = document.getElementById("pass").value;
				var str = "uname=" + uname + "&pass=" + pass;
				var add_req = new XMLHttpRequest();
				add_req.open("POST", "add_user.php");
				add_req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				add_req.onreadystatechange = function () {
					document.getElementById('change').innerHTML = "Hey " + uname + ", we have added you to our database! Happy writing :)";
					document.getElementById('change').innerHTML = add_req.responseText;
				};
				add_req.send(str);
			}