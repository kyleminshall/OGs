function remove_activity() {
	$.post( $("#actbutton").attr("ajax") );
    
	$(".activity").fadeOut(800, function() {
			$(".activity").remove();
			document.getElementById('replace').innerHTML = ' You read them all! Feel free to post! ';
		}
	);
}

function remove_notifs() {
	$.post( $("#notifbutton").attr('ajax') );

	$(".notif").fadeOut(800, function() {
			$(".notif").remove();
			document.getElementById('replace_notif').innerHTML = ' You read them all! ';
		}
	);
}