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
$sql = "SELECT * FROM `notification` WHERE `uid`='$uid' AND `read`='no'";
 $result = $db->query($sql);
 $result =  $result->num_rows;
  
	  echo "$result";

 
  


?>