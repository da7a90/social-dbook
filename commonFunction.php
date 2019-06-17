<script type="text/javascript" src="./js/suggest.js"></script>
<script>

$("body").click(function(){
	var datad = $(".noti-red").text();
	if(datad >0){
		notifyBrowser('You Have new Notification');
	}
});


function commented(pid){
	var ipbox= '#text'+pid;
	var text=$(ipbox).val();
if(text!=''){
	$.ajax({
		type: "POST",
		data:'pid='+ pid +'&comment='+text,
		url: "comment.php",
		success: function(data){
			getdata(pid);
		}
		});

	}
	}

function dislike(pid){
$.ajax({
		type: "POST",
		data:'pid='+pid,
		url: "dislike.php",
		success: function(data){
getdata(pid);
		}
		});

}

function like(pid){
$.ajax({
		type: "POST",
		data:'pid='+pid,
		url: "like.php",
		success: function(data){
getdata(pid);
		}
		});

}
$("#socialData").submit(function(event){
	event.preventDefault();
});

function getdata(pid){
var div= '#div'+pid;
$.ajax({
		type: "POST",
		data:'pid='+pid,
		url: "getdiv.php",
		success: function(data){
			$(div).html(data);
		}
		});

}

	function getrecent(){	
	$.ajax({
		type: "POST",
		url: "getrecent.php",
		success: function(data){
			$(".recent-list").html(data);
		}
		});
	}

	
	function getnotification(){	
	$.ajax({
		type: "POST",
		url: "getnotification.php",
		success: function(data){
			if(data >0){
			
			$("#noti").show();
		$(".noti-red").html(data);
		}
		}
		});
	}
	$(function() {
          // data
          var users = [
            {fullname: 'mike_tavish'},
            {fullname: 'morwin_case'},
            {fullname: 'lewis_kelent'},
            {fullname: 'dotcodes'},
            {fullname: 'Naveen'},
            {fullname: 'Mohan'},
            {fullname: 'purusothaman'},
          ];

          $('#textarea,#imageT,#videoT,#audioT,input[type=text]').suggest('@', {
            data: users,
            map: function(user) {
              return {
                value: user.fullname,
                text: '<strong>'+user.fullname+'</strong>'
              }
            }
          })

      	});

function addonline(){	
	$.post("addonline.php")
}

	  
function getonline(){
	$.ajax({
		type: "POST",
		url: "getonline.php",
		success: function(data){
			$("#getonline").html(data);
		}
		});
}


function notifyBrowser(title) 
{
if (!Notification) {
console.log('Desktop notifications not available in your browser..'); 
return;
}
if (Notification.permission !== "granted")
{
Notification.requestPermission();
}
else {
var notification = new Notification(title, {icon:'images/bnoti.jpg'});
// Remove the notification from Notification Center when clicked.
// Callback function when the notification is closed.
notification.onclick = function () {
window.open('notification.php');      
};
notification.onclose = function () {
console.log('Notification closed');
};
}
}


getrecent();
getnotification();
getonline();
setInterval("getrecent()", 3000) ;
setInterval("getnotification()", 3000) ;
setInterval("addonline()", 3000) ;
setInterval("getonline()", 3000) ;

</script>
