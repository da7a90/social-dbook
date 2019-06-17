<script type="text/javascript">
$(document).ready(function(e){
	  $("input[type=text]").emojiPicker();
	  
      });

function send(){
		var text = $("#emoji").val();
		var rid = '.$rid.';
	if(text != ""){
	
	$.ajax({
		type: "POST",
		data:\'message=\'+text+\'&reciver=\'+rid,
		url: "newMessage.php",
		success: function(data){
			$("#emoji").val('');
			getmessage();
		}
		});
		
	}
}

	function getmessage(){
	var rid = '.$rid.';
	$.ajax({
		type: "POST",
		data:\'rid=\'+rid,
		url: "getmessage.php",
		success: function(data){
			$(".message").html(data);
			
		}
		});
}
setInterval("getmessage()", 2000) ;
</script>