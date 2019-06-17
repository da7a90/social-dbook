<?php
session_start();
 if($_SESSION['id'] ==""){
 header("Location:login.php");
 }else{
	 include("functions.php");
	 $userid =$_SESSION['id'];
$poster = name($_SESSION['id']);
 }

$db = new mysqli('localhost', 'root', '', 'social');
$comment = $_POST['comment'];
$pid =  $_POST['pid'];
$pid =filter_get($pid);
$commenter = $poster;
$cid = $userid;
$time = time();
$sql = "INSERT INTO `comments` (`pid`, `cid` , `comment` ,`commenter`,`time`,`uid`) VALUES ('$pid', '$cid','$comment','$commenter','$time','$userid')";
$db->query($sql);

$data = '&nbsp;'.$poster.' commented &nbsp;'.poster($pid).'&nbsp;'.postcat($pid) ;
		$sql = "INSERT INTO `recent` (`pid`, `data` , `time` ,`uid`) VALUES ('$pid', '$data','$time','$cid')";
			$db->query($sql);
$psuid = psuid($pid);
			if($psuid != $userid){
$data = '&nbsp;'.$poster.'&nbsp;' .name($uid) .' commented your &nbsp;'.postcat($pid);
 $sql = "INSERT INTO `notification` ( `data` , `pid`,`uid`,`time`,`noter`,`datafor`) VALUES ('$data','$pid', '$psuid', '$time','$userid','comment')";
$db->query($sql);
}


 //$url =$_POST['url'];
//header("Location:$url")

?>