function edit(button, id) {
	window.location.assign("../user/edit.php?id=" + id)
}

function del(button, id) {
	var title = button.previousSibling.parentNode.previousSibling.firstChild.innerHTML;
	if (confirm("Are you sure you want to delete the article:\n\n" + title)) {
		window.location.assign("../user/alter.php?id=" + id + "&title=" + title);
	 }
}