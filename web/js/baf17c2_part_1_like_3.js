/*

$post_id is the id of the post you want to modify

JS function for calling the like_add.php to add a like to the database.
Changes the text of the like button after the database call completes

*/
function like_add(post_id) {
	$.post( $("#like_"+post_id).attr("ajax"), {post_id:post_id}, function(data) {
		like_get(post_id);
	}).done(function() {
		changeText(post_id);
	});
}



/*

$post_id is the id of the post you want to modify

JS function for calling the like_get.php to get the number of likes on a post.

*/
function like_get(post_id) {
	$.post('ajax/likeGet', {post_id:post_id}, function(data) {
        data = JSON.parse(data)
		$('#post_'+post_id+'_likes').text(data.likes);
	});
}



/*

$post_id is the id of the post you want to modify

JS function for toggling the like button between Like and Unlike
Calls the addName if you click like for the first time
Otherwise it calls removeName

*/
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



/*

$post_id is the id of the post you want to modify

JS Function for adding the users name to the "so and so like this"
Changes it to "You (and these other people) like this"

*/
function addName(post_id) {
	var element = document.getElementById('likes_'+post_id);
	var html = element.innerHTML;
	if(html.indexOf("No one") > -1) {
		element.innerHTML = "You like this.";
	} else {
		element.innerHTML = "You, " + html;
	}
}



/*

$post_id is the id of the post you want to modify

JS Function for removing the name from the list of users that like a post
Applies when the person unlikes a post

*/
function removeName(post_id) {
	var element = document.getElementById('likes_'+post_id);
	var html = element.innerHTML;
	if(html.indexOf("You like this.") > -1) {
		element.innerHTML = "No one likes this.";
	} else {
		var i = html.indexOf("You")
		element.innerHTML = html.substring(i+5);
	}
}



/*

$post_id is the id of the post you want to modify

JS function for calling the delete.php to mark a post as deleted in the database.

*/
function delete_post(post_id) {
	var r = confirm("Are you sure you want to delete this post?")
	if(r)
	{
		$.post('ajax/deletePost', {post_id:post_id}, function(){}
		).done(function() {
			removePost(post_id);
		});
	}
}



/*

$post_id is the id of the post you want to modify

JS Function for immediatly hiding a post when a user deletes it from the page.

*/
function removePost(post_id) {
	var tbl = document.getElementById('post_'+post_id);
	if(tbl) 
	{
		$("#post_"+post_id).fadeOut(800, function () {
			tbl.parentNode.removeChild(tbl);
		});
	}
}



/*

$post_id is the id of the post you want to modify

JS function for calling the delete.php to mark a post as deleted in the database.

*/
function delete_reply(reply_id) {
	var r = confirm("Are you sure you want to delete this reply?")
	if(r)
	{
		$.post('ajax/deleteReply', {reply_id:reply_id}, function() {}
		).done(function() {
			removeReply(reply_id);
		});
	}
}


/*

$post_id is the id of the post you want to modify

JS Function for immediatly hiding a post when a user deletes it from the page.

*/
function removeReply(reply_id) {
	var row = document.getElementById('reply_'+reply_id);
	if(row) 
	{
		$("#reply_"+reply_id).fadeOut(800, function () {
			row.parentNode.removeChild(row);
		});
	}
}


function checkSubmit(e, id)
{
   if(e && e.keyCode == 13)
   {
       if(e.shiftKey){}
       else {
		   addReply(id);
	   }
   }
}

/*

post_id is the id of the post that is going to receive the reply

JS Function for adding a reply to the 

*/
function addReply(id) {
	var form = ($('#'+id).serializeArray());
	var new_id = 0
	$.post('ajax/addReply', {form:form}, function(post) {
		var json = JSON.parse(post);
		new_id = json["id"];
	}).done(function() {
		$('#post_'+id' tr:last').after('
			<tr id="reply_'+new_id'" style="background-color:#f6f6f6;">
			    <td colspan="4" style="position:relative; padding: 5px 10px;"> 
			        <div style="float:left;padding-right:10px"> 
			            <img src="{{ asset ('bundles/ogclub/images/') }}{% block profile %}profile.jpg{% endblock %}" alt="Profile" height="30px" width="30px"/>
			        </div>
			        {% if reply.deletable %}
			        <div style="float:right;display:block;">
			            <span style="color:#ddd;font-size:12px">
			                <a class="reply_delete" style="text-decoration:none;color:#ddd;" href="#" onclick="delete_reply({{ block('reply_id') }});return false;">X</a> 
			            </span>
			        </div>
			        {% endif %}
			        <p style="font-size:14px;color:#000;margin:0;padding-left:40px;padding-right:20px;">
			            <b>{{ reply.commenter }}</b> {{ reply.text|raw }}<br>
			            <span style="font-size:12px;color:#494949;">{{ reply.replied }}</span>
			        </p>
			    </td>
			</tr>
		');*/
	});
}

function showReply() {
	/* TODO: Add this */
	console.log('later')
}
