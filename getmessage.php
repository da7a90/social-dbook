<?php
session_start();
include("functions.php");
$uid =$_SESSION['id'];
if(isset($_POST['rid'])){
	$rid= ($_POST['rid']);	
		$db = new mysqli('localhost', 'root', '', 'social');
 $sql = "SELECT * FROM `messages` WHERE (`sender`='$uid' AND `reciver`='$rid') OR (`sender`='$rid' AND `reciver`='$uid') ";
$result = $db->query($sql);
$totalmessage =  $result->num_rows;
if($totalmessage<6){
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
}

?>

