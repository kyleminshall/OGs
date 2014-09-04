function like_add(post_id){
	$.post('classes/like_add.php', {post_id:post_id}, function(data) {
		like_get(post_id);
	}).done(function() {
		changeText(post_id);
	});
}

function like_get(post_id) {
	$.post('classes/like_get.php', {post_id:post_id}, function(data) {
		$('#post_'+post_id+'_likes').text(data);
	});
}

function changeText(post_id) {
    var element = document.getElementById('like_'+post_id);
    if (element.innerHTML != 'Unlike')
	{
    	element.innerHTML = 'Unlike';
		addName(post_id);
    } 
    else 
	{
        element.innerHTML = 'Like';
		removeName(post_id);
    }
}

function addName(post_id) {
	var element = document.getElementById('likes_'+post_id);
	var html = element.innerHTML;
	if(html.indexOf("like") > -1) {
		element.innerHTML = "<b>You</b>, " + html;
	} else {
		element.innerHTML = "<b>You</b> like this.";
	}
}

function removeName(post_id) {
	var element = document.getElementById('likes_'+post_id);
	var html = element.innerHTML;
	if(html.indexOf("likes") > -1) {
		element.innerHTML = "";
	} else {
		var i = html.indexOf("You")
		element.innerHTML = html.substring(i,i+4);
	}
}

