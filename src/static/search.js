function search() {
	var tag = document.getElementById('tag').value;
	var result_box = document.getElementById('search_results');
	var search_xhr = new XMLHttpRequest();
	search_xhr.open("GET", "/user/tag_search.php?tag=" + tag);
	search_xhr.send();
	result_box.innerHTML = "Searching...";
	search_xhr.onreadystatechange = function () {
		result_box.innerHTML = search_xhr.response;
	}

}