function post_article() {
    var art = document.getElementById('article').value;
    var uname = document.getElementById('username').value;
    var str = "uname=" + uname + "&art=" + art;
    var post_art_req = new XMLHttpRequest();
    post_art_req.open("POST", "post_article.php");
    post_art_req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    post_art_req.onreadystatechange = function() {
        console.log(post_art_req.responseText.toString());
    };
    post_art_req.send(str);
}