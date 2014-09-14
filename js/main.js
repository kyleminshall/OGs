function remove_activity() {
	$.post('classes/update_login.php');

	$(".activity").fadeOut(800, function() {
			$(".activity").remove();
			add_text();
	});
}

function add_text() {
	document.getElementById('replace').innerHTML = ' You read them all! Feel free to post! ';
}
