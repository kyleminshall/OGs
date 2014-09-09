function remove_activity() {
	$.post('classes/update_login.php', {post_id:post_id}, function(data) {
		like_get(post_id);
	}).done(
		$(".activity").fadeOut(800, function() {
		$(".activity").remove();
	}));
}