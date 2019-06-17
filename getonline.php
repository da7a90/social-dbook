<?php
session_start();
 if($_SESSION['id'] ==""){
 header("Location:login.php");
 }else{
	 include("functions.php");
	 $userid =$_SESSION['id'];
$poster = name($_SESSION['id']);
 }



$time = time()-11;

$sql = "SELECT username, name, id, profilepic FROM `user` WHERE lastlogon > '$time'  ";
	$result = $db->query($sql);
	 $count = $result->num_rows;
if($count == 1){
	echo '<b>None of Your Freinds online...</b>';
}else{
	foreach($result as $row){
	if($row['id'] != $userid){
		echo '
		<div class="media">
  <div class="media-left">
    <a href="messages.php?user='.$row['username'].'">
      <img class="media-object" src="images/'.$row['profilepic'].'" width="32px" height="32px" alt="">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="messages.php?user='.$row['username'].'">'.$row['name'].'</a></h4>
    <sup><a class="black" href="profile.php?username='.$row['username'].'">@'.$row['username'].'</a></sup>
</div>
</div>
		';
	}
	}
	}
?>