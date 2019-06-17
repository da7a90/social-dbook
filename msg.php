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
<?php
if(isset($_GET['user'])){
	$recivername =$_GET['user'];
	$rid= user($_GET['user']);	
		$db = new mysqli('localhost', 'root', '', 'social');
 $sql = "SELECT * FROM `message` WHERE (`sender`='$uid' AND `reciver`='$rid') OR (`sender`='$rid' AND `reciver`='$uid') ";
$result = $db->query($sql);
$totalmessage =  $result->num_rows;

echo'
<div class="col-md-12 white">

 <a href="profile.php?id=<?php echo $rid; ?>"><img src="images/'.image($rid).'" style="padding-right:12px; "  class="img-newsfeed-user pull-left"><span class="profile-name">'.name($rid).'</span></a><span class="post-ago">Totally '.$totalmessage.' Conversation</span>
<hr>
<div class="messages-wrapper">
<div class="message">
';
$sql = "SELECT * FROM `message` WHERE (`sender`='$uid' AND `reciver`='$rid') OR (`sender`='$rid' AND `reciver`='$uid') ";
$result = $db->query($sql);
$totalmessage =  $result->num_rows;

$tmessage = $totalmessage-6;

$sql = "SELECT * FROM `message` WHERE (`sender`='$uid' AND `reciver`='$rid') OR (`sender`='$rid' AND `reciver`='$uid') ORDER BY `id` ASC  LIMIT '$tmessage','$totalmessage'";
	$result = $db->query($sql);
	foreach($result as $row){
		$sender=$row['sender'];
		$reciver=$row['reciver'];
		$message=$row['message'];
		$time=$row['time'];
if($sender == $uid)	{
	echo '<div class="message to">'.$message.'<span style="margin-top:12px;" class="pull-right"><small><small>'.ago($time).' | seen</small></small></span><img src="images/'.image($uid).'" class="pull-right hidden-xs hidden-sm " style="width:32px; height:32px;  border-radius:3px; postion:absolute; top:0; float:right; margin-right:-36%; " ></div>';

}else{
		echo '<div class="message from"><img src="images/'.image($rid).'" style="width:32px; height:32px; border-radius:3px; postion:absolute; pointer-events:none; margin-left:-78px; top:0; margin-right:9%; " >'.$message.'<span style="margin-top:12px;" class="pull-right"><small><small>'.ago($time).' | seen</small></small></span></div>';

}	}
	
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
	echo '<div class="col-md-8 white">Good</div>';
}
?>
