<?php
session_start();
require("functions.php");

$db = new mysqli('localhost', 'root', '', 'social');
$uid = $_SESSION['id'];
$text =$_POST['status'];
$text = text_filter($text);
$poster = $_POST['poster'];
$time = time();
$salt = $_SESSION['id'].rand(2,56).rand(455,67555);
$device = device();
//post table
 $sql = "INSERT INTO `post` (`uid`, `text` , `poster` ,`time`,`salt`,`device`) VALUES ('$uid', '$text','$poster','$time','$salt' ,'$device')";
$db->query($sql);
Gethashtag($text,$salt);
//recent table
$data ='&nbsp;' .$poster .' a posted Post';
echo $sql = "INSERT INTO `recent` (`salt`, `data` , `time` ,`uid` ) VALUES ('$salt', '$data','$time','$uid')";
$db->query($sql);
$url =$_POST['url'];
header("Location:index.php");
?>