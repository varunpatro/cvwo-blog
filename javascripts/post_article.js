function post_article() {
	var title = document.getElementById('title');
    var art = document.getElementById('article');
    var uname = document.getElementById('username');
    art.setAttribute("disabled", "");
    uname.setAttribute("disabled", "");
    title.setAttribute("disabled", "");
    var str = "uname=" + uname.value + "&art=" + art.value + "&title=" + title.value;
    var post_art_req = new XMLHttpRequest();
    post_art_req.open("POST", "post_article.php");
    post_art_req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    post_art_req.onreadystatechange = function() {
        console.log(post_art_req.responseText);
    };
    post_art_req.send(str);
}