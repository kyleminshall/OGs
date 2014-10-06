function remove_activity() {
	$.post('classes/update_login.php');

	$(".activity").fadeOut(800, function() {
			$(".activity").remove();
			document.getElementById('replace').innerHTML = ' You read them all! Feel free to post! ';
		}
	);
}

function remove_notifs() {
	$.post('classes/remove_notifs.php');

	$(".notif").fadeOut(800, function() {
			$(".notif").remove();
			document.getElementById('replace_notif').innerHTML = ' You read them all! ';
		}
	);
}