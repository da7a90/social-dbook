<?php
session_start();
include("functions.php");
$pid =  $_POST['pid'];
$pid =filter_get($pid);
$uid = $_SESSION['id'];
$userid = $_SESSION['id'];
$time = time();

$sql = "select * from `likes` where `pid`='$pid'";
$result = $db->query($sql);
$likec = $result->num_rows;

$sql = "select * from `likes` where `pid`='$pid' and uid='$uid'";
$result = $db->query($sql);
$likeu = $result->num_rows;

$sql = "select * from `dislikes` where `pid`='$pid'";
$result = $db->query($sql);
$dislikec = $result->num_rows;

$sql = "select * from `dislikes` where `pid`='$pid' and uid='$uid'";
$result = $db->query($sql);
$dislikeu = $result->num_rows;


if($likeu==0 && $dislikeu==0){
	  
$sql = "INSERT INTO `likes` (`pid`, `uid`) VALUES ('$pid', '$uid')";
$result = $db->query($sql);
$poster = poster($pid);
$postcat =postcat($pid);
$data = '&nbsp;' .name($uid) .' liked '.$poster .'&nbsp;'.$postcat;
 $sql = "INSERT INTO `recent` (`pid`, `data` , `time`,`uid` ) VALUES ('$pid', '$data','$time','$uid')";
$db->query($sql);
$like ='like';
$psuid = psuid($pid);
if($psuid == $userid){

}else{
$data = '&nbsp;' .name($uid) .' liked  your  &nbsp;'.postcat($pid);
 $sql = "INSERT INTO `notification` ( `data` , `pid`,`uid`,`time`,`noter` ,`datafor`) VALUES ('$data','$pid', '$psuid', '$time','$uid','$like')";
$db->query($sql);	
}
		//header("location:index.php");
		
}elseif($dislikeu > 0){
			
			$sql ="DELETE FROM `dislikes` WHERE `pid` = '$pid' AND  `uid` = '$uid'";
			$result = $db->query($sql);
			
			$sql = "INSERT INTO `likes` (`pid`, `uid`) VALUES ('$pid', '$uid')";
			$result = $db->query($sql);
			
			$sql = "DELETE FROM `recent` WHERE `pid` = '$pid' AND `uid` = '$uid'";
			$db->query($sql);

			$data = '&nbsp;' .name($uid) .' liked '.poster($pid).'&nbsp;'.postcat($pid) ;
			$sql = "INSERT INTO `recent` (`pid`, `data` , `time` ,`uid`) VALUES ('$pid', '$data','$time','$uid')";
			$db->query($sql);


$psuid = psuid($pid);
$sql = "DELETE FROM `notification` WHERE `pid` = '$pid' AND `noter` = '$userid' AND `datafor`='dislike'";
$db->query($sql);
$psuid = psuid($pid);			
			if($psuid == $userid){
}else{
$data = '&nbsp;' .name($uid) .' liked your  &nbsp;'.postcat($pid);
 $sql = "INSERT INTO `notification` ( `data` , `pid`,`uid`,`time`,`noter` ,`datafor`) VALUES ('$data','$pid', '$psuid', '$time','$uid','like')";
$db->query($sql);
}
			//header("location:index.php");
}elseif($likeu > 0){

$sql ="DELETE FROM `likes` WHERE `pid` = '$pid' AND  `uid` = '$uid'";
$result = $db->query($sql);

$sql = "DELETE FROM `recent` WHERE `pid` = '$pid' AND `uid` = '$uid'";
$db->query($sql);

$sql = "DELETE FROM `notification` WHERE `pid` = '$pid' AND `noter` = '$userid' AND `datafor`='like'";
$db->query($sql);

			//header("location:index.php");

		
		}	


		
?>
			
			