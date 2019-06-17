<?php

session_start();
require("functions.php");

$db = new mysqli('localhost', 'root', '', 'social');
$uid = $_SESSION['id'];
$text =$_POST['status'];
$poster = $_POST['poster'];
$time = time();
$salt = $_SESSION['id'].rand(2,56).rand(455,67555);
$device = device();
$postcat = 'photo';
$name=$_FILES['image']['name'];
$temp=$_FILES['image']['tmp_name'];
$name= rand(158757363,4574463569683).rand(573948544,56888768766).'_lyk'.".jpg";
$destino =  "photo/".$name;
move_uploaded_file($temp,$destino);

//post table
 $sql = "INSERT INTO `post` (`uid`, `text` , `poster`,`postcat` ,`time`,`data`,`salt`,`device`) VALUES ('$uid', '$text','$poster','$postcat','$time','$name','$salt','$device')";
$db->query($sql);
Gethashtag($text,$salt);
//recent table
 $data = '&nbsp;' .$poster .' Added a new photo';
$sql = "INSERT INTO `recent` (`salt`, `data` , `time` ,`uid`) VALUES ('$salt', '$data','$time','$uid')";
$db->query($sql);
$url =$_POST['url'];
header("Location:$url")

?>