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

function dropdown() {
    var visible = $("#dropdown").css('visibility') != "hidden"
    if(visible)
        $("#dropdown").css('visibility', 'hidden');
    else
        $("#dropdown").css('visibility', 'visible');
        
}

function checkSubmit(e, id)
{
   if(e && e.keyCode == 13)
   {
       if(e.shiftKey){}
       else
           document.getElementById(id).submit();
   }
}