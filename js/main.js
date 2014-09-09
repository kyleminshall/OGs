function remove_activity() {
	$(".activity").fadeOut(800, function() {
		$(".activity").remove();
	});
	
}