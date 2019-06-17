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
$time = time();
$sql = "UPDATE `user` SET `lastlogon` = '$time' WHERE `id` = $userid; ";
$db->query($sql);
?>