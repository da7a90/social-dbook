<?php
session_start();
 if($_SESSION['id'] ==""){
 header("Location:login.php");
 }else{
	 include("functions.php");
	 $uid =$_SESSION['id'];
$poster = name($_SESSION['id']);
 }

	 $db = new mysqli('localhost', 'root', '', 'social');
	  $sender = $uid;
	  $reciver = $_POST['reciver'];
	  $message = text_filter($_POST['message']);
	  $time = time();
	   $sql ="INSERT INTO `messages` (`sender`,`reciver`,`message` ,`time`) VALUES ('$sender','$reciver','$message','$time')";
	  $db->query($sql);
 ?>