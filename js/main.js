function remove_activity() {
	$.post('classes/update_login.php');
	
	$(".activity").fadeOut(800, function() {
			$(".activity").remove();
	});
}