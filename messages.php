<?php
session_start();
 if($_SESSION['id'] ==""){
 header("Location:login.php");
 }else{
	 include("functions.php");
	 $uid =$_SESSION['id'];
	 $userid =$_SESSION['id'];
$poster = name($_SESSION['id']);
 }

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <title>web Developer In nktt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.emojipicker.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.emojipicker.a.css">
	<link rel="stylesheet" href="css/social.css" /> 
    <link rel="shortcut icon" href="./favicon.png" type="image/png">
<style>
<!-- 
 -->
</style>
	</head>
<body>
<nav class="navbar navbar-default hidden-xs hidden-sm" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" style="">Da7aBook</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
        <div class="col-md-7 col-xs-1 ">
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" id="menu-search" style="color:black !important;" class="form-control" placeholder="Da7aBook Search" name="q">
					<div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>  
		<ul class="nav navbar-nav navbar-right">
<a href="profile.php?id=<?php echo$userid; ?>"><img src="images/<?php echo image($userid);?>" class="img-profile img-rounded img-responsive"></a>
            <li style="margin-right:12px;">&nbsp;</li>
            <li style="margin-right:12px;">&nbsp;</li>
			<li class="dropdown">
                    <a style="background:#428bca;color:#fff !important;" class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo$poster; ?>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul  class="dropdown-menu ">
                        <li class="black"><a class="black" style="color:#000!important;" href="profile.php?id=<?php echo$userid; ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="black "><a class="black" style="color:#000!important;" href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li class="black "><a class="black" style="color:#000!important;" href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            <li>&nbsp;</li>
          </ul>
</nav></div></div>
<div class="menu-bar hidden-xs hidden-sm">

		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse-1">
            <span class="fa fa-navicon"></span>
        </button>
    <div class="collapse navbar-collapse" id="example-navbar-collapse-1">    
		<ul class="nav navbar-nav ">
             <li style="margin-right:12px;"><a href="index.php"><i class="fa fa-newspaper-o"></i> Newsfeed</a></li>
            <li style="margin-right:12px;margin-left:4px;border-bottom:2px solid #428bca;
			"><a href="messages.php"><i class="fa fa-envelope-o"></i> Messages</a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="friends.php"><i class="fa fa-users"></i> Friends</a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="notification.php"><i class="fa fa-bell-o"></i> Notification <sup id="noti" style="display:none;"><i ><sup class="noti-red"></sup></i></sup></a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="pages.php"><i class="fa fa-copy"></i> Pages </a></li>
			<li style="margin-right:12px;margin-left:4px"><a href="groups.php"><sup><i class="glyphicon glyphicon-user"></i></sup><i class="glyphicon glyphicon-user"></i><sup><sup><i class="glyphicon glyphicon-user"></i></sup></sup> &nbsp; Groups </a></li>					
            <li style="margin-right:12px;margin-left:4px"><a href="games.php"><i class="fa fa-gamepad"></i> Games </a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="settings.php"><i class="fa fa-gear"></i> Settings </a></li>
          </ul>
</div>
</div>
<div class="btn-group btn-group-justified hidden-lg hidden-md  " style="color:#000; background:#428bca;" role="group" aria-label="Mobile Menu">
	<a class="btn btn-xs" href="index.php" style="color:#fff; font-size:225%; font-weight:bolder;   postion:absolute;">LYK</a> 
 <form>
<div class=" input-group" style="margin-left:25%; postion:absolute; padding:12px;">
     <input type="text" name="q" class="form-control" placeholder="LYK search">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
      </span>
    </div></div></form><!-- /input-group -->
	
    <div class="btn-group btn-group-justified hidden-lg hidden-md " role="group" aria-label="Mobile Menu">
      <a class="btn btn-default" style="color:#000; background:#428bca; border:1px solid rgba(0,0,0,.2);" href="index.php"><strong><i class="fa fa-newspaper-o"></i></strong></a>
           <a class="btn btn-default" style="color:#fff;  background:#428bca; border:1px solid rgba(0,0,0,.2);" href="messages.php"><i class="fa fa-envelope-o"></i> </a>
           <a class="btn btn-default" style="color:#000; background:#428bca; border:1px solid rgba(0,0,0,.2);" href="friends.php"><i class="fa fa-users"></i> </a>
           <a class="btn btn-default" style="color:#000;  background:#428bca; border:1px solid rgba(0,0,0,.2); " href="notification.php"><i class="fa fa-bell-o"></i>  <sup id="noti" style="display:none;"><i ><sup class="noti-red"></sup></i></sup></a>
           <a class="btn btn-default" style="color:#000; background:#428bca; border:1px solid rgba(0,0,0,.2); " href="pages.php"><i class="fa fa-copy"></i>  </a>
		   <a class="btn btn-default" style="color:#000;  background:#428bca; border:1px solid rgba(0,0,0,.2);" href="groups.php"><sup><i class="glyphicon glyphicon-user"></i></sup><i class="glyphicon glyphicon-user"></i><sup><sup><i class="glyphicon glyphicon-user"></i></sup></sup> </a>			
           <a class="btn btn-default" style="color:#000; background:#428bca;border:1px solid rgba(0,0,0,.2); " href="games.php"><i class="fa fa-gamepad"></i>  </a>
           <a class="btn btn-default" style="color:#000; background:#428bca; border:1px solid rgba(0,0,0,.2); " href="settings.php"><i class="fa fa-gear"></i>  </a>
    </div>
<div id="socialData">     
<div class="container" style="margin-top:16px;">
<div class="row">
<div class="col-md-8">
<div class="col-md-12 white">
<p>&nbsp;</p>
<p><a class="btn-message btn" href="#"><i class="fa fa-envelope-o"></i> New Message </a>
<a class="btn-message btn" href="#"><sup><i class="glyphicon glyphicon-user"></i></sup><i class="glyphicon glyphicon-user"></i><sup><sup><i class="glyphicon glyphicon-user"></i></sup></sup> &nbsp; New Group Message </a>
<span class="btn-message btn" href="#" class="">  <input type="text" class="none-input" placeholder="Search on message"><button type="submit" style="width:44px" class="none-input"> <i class="glyphicon glyphicon-search "></i> </button></span>
</p>
</div>
<?php
if(isset($_GET['user'])){
	$recivername =$_GET['user'];
	$rid= user($_GET['user']);	
$db = new mysqli('localhost', 'root', '', 'social');		
 $sql = "SELECT * FROM `messages` WHERE (`sender`='$uid' AND `reciver`='$rid') OR (`sender`='$rid' AND `reciver`='$uid') ";
$result = $db->query($sql);
$totalmessage =  $result->num_rows;
echo'
<div class="col-md-12 white">

 <a href="profile.php?id=<?php echo $rid; ?>"><img src="images/'.image($rid).'" style="padding-right:12px; "  class="img-newsfeed-user pull-left"><span class="profile-name">'.name($rid).'</span></a><span class="post-ago">Totally '.$totalmessage.' Conversation</span>
<hr>
<div class="messages-wrapper">
<div class="message">
';
$sql = "SELECT * FROM `messages` WHERE (`sender`='$uid' AND `reciver`='$rid') OR (`sender`='$rid' AND `reciver`='$uid') ";
$result = $db->query($sql);
$totalmessage =  $result->num_rows;
if($totalmessage < 6){
	$tmessage = 0;
}else{
	$tmessage = $totalmessage-6;
}

$sql = "SELECT * FROM `messages` WHERE (`sender`='$uid' AND `reciver`='$rid') OR (`sender`='$rid' AND `reciver`='$uid') ORDER BY `id` ASC  LIMIT $tmessage,$totalmessage";
	$result = $db->query($sql);
	foreach($result as $row){
		$sender=$row['sender'];
		$reciver=$row['reciver'];
		$message=$row['message'];
		$time=$row['time'];
if($sender == $uid)	{
	echo '<div class="message to">'.$message.'<span style="margin-top:12px;" class="pull-right"><small><small>'.ago($time).' | seen</small></small></span><img src="images/'.image($uid).'" class="pull-right hidden-xs hidden-sm " style="width:32px; height:32px;  border-radius:3px; postion:absolute; top:0; float:right; margin-right:-36%; " ></div>';

}else{
		echo '<div class="message from"><img src="images/'.image($rid).'" style="width:32px; height:32px; border-radius:3px; postion:absolute; margin-left:-78px; top:0; margin-right:9%; " >'.$message.'<span style="margin-top:12px;" class="pull-right"><small><small>'.ago($time).' | seen</small></small></span></div>';

}
	}
	
echo'
</div>
</div>
<hr>
<div class="col-md-11 col-md-offset-1">
<div class="row">
<div class="col-md-9">
<form action="new-message.php" method="POST">       
		<input type="text" id="emoji" name="message" style="padding-right:45px;" class="form-control emojiable-option" placeholder="Reply to '.name($rid).'" >        
	    <input type="hidden" name="reciver" value="'.$rid.'">
</div>
<div class="col-md-2">
</form>
<button class="btn comt" onclick="send();">Reply</button>
</div>
</div>
</div>
</div>

';}else{
	echo '<div class="white col-md-12 alert">
	 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<p><a href="messages.php?user=mike_tavish"><img src="images/mike.jpg" style="padding-right:12px; "  class="img-newsfeed-user img-circle pull-left"><span class="profile-name">Mike Tavish</span></a>
<small><small> &nbsp;&nbsp;Last chat 19 hours ago</small></small>
<span class="post-ago">Total <b>23</b> coversation</span></p>
</div>
<div class="white col-md-12 alert">
 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<p><a href="messages.php?user=moun_case"><img src="images/moun.jpg" style="padding-right:12px; "  class="img-newsfeed-user img-circle pull-left"><span class="profile-name">Morwin Case</span></a>
<small><small> &nbsp;&nbsp;Last chat 1 hours ago</small></small>
<span class="post-ago">Total <b>223</b> coversation</span></p>
</div>
<div class="white col-md-12 alert">
 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<p><a href="messages.php?user=lewis_kelent"><img src="images/lewis.jpg" style="padding-right:12px; "  class="img-newsfeed-user img-circle pull-left"><span class="profile-name">Lewis Kelent</span></a>
<small><small> &nbsp;&nbsp;Last chat 1 hours ago</small></small>
<span class="post-ago">Total <b>14</b> coversation</span></p>
</div>
';
}
?>
</div>

<div class="col-md-4 hidden-xs hidden-sm">
<div class="col-md-12 white">
<h5 align="center">Friends Online <hr></h5>
<div id="getonline"><strong>Loading...</strong></div>

</div>
</div>
</div>
</div>
</div>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------->


<script type="text/javascript" src="./js/data.min.js"></script>

<?php
include("commonFunction.php"); 
?>
<script type="text/javascript" src="js/jquery.emojis.js"></script>
<script type="text/javascript" src="js/jquery.emojipicker.js"></script>
<script type="text/javascript">
$(document).ready(function(e){
	  $("input[type=text]").emojiPicker();
	  
      });
function send(){
		var text = $("input#emoji").val();
		var rid = '<?php echo $rid; ?>';
	if(text != ""){
	
	$.ajax({
		type: "POST",
		data:'message='+ text +'&reciver='+rid,
		url: "newMessage.php",
		success: function(data){
			$("#emoji").val('');
			getmessage();
		}
		});
		
	}
}

	function getmessage(){
	var rid = '<?php echo $rid; ?>';
	$.ajax({
		type: "POST",
		data:'rid='+rid,
		url: "getmessage.php",
		success: function(data){
			$(".message").html(data);
			
		}
		});
}
setInterval("getmessage()", 2000) ;

</script>

</body>
</html>