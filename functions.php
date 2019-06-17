<?php
$db = new mysqli('localhost', 'root', '', 'social');
////////////////////////////////// imageofid  //////////////////////////////////////////////

function image($id){
global $db;
$sql = "select profilepic from `user` where id='$id' LIMIT 1";
$result = $db->query($sql);
	foreach($result as $row){
	$profilepic = $row['profilepic'];
	}return $profilepic;

}

////////////////////////////////// name of id  //////////////////////////////////////////////

function name($id){
	$name="";
global $db;
$sql = "select name from `user` where id='$id' LIMIT 1";
$result = $db->query($sql);
	foreach($result as $row){
	$name = $row['name'];
	}return $name;

}

/////////////////////////////////   find poster  //////////////////// 

function poster($pid){
global $db;
$sql = "select poster from `post` where `pid`='$pid' LIMIT 1";
$result = $db->query($sql);
	foreach($result as $row){
	$poster = $row['poster'];
	}return $poster;
	
}

function psuid($pid){
global $db;
$sql = "select uid from `post` where `pid`='$pid' LIMIT 1";
$result = $db->query($sql);
	foreach($result as $row){
	$uid = $row['uid'];
	}return $uid;
	
}


/////////////////////////////////   find postcat  //////////////////// 

function postcat($pid){
global $db;
$sql = "select postcat from `post` where `pid`='$pid' LIMIT 1";
$result = $db->query($sql);
	foreach($result as $row){
	$postcat = $row['postcat'];
	}return $postcat;
	
}

////////////////////////////////// salt to id  //////////////////////////////////////////////

function salt($salt){
	$pid="";
global $db;
$sql = "select pid from `post` where salt='$salt' LIMIT 1";
$result = $db->query($sql);
	foreach($result as $row){
	$pid = $row['pid'];
	}return $pid;

}

////////////////////////////////// user suggest  //////////////////////////////////////////////

function user($username){
global $db;
$sql = "select `id` from `user` where username='$username' LIMIT 1";
$result = $db->query($sql);
	foreach($result as $row){
	$id = $row['id'];
	}return $id;

}
////////////////////////////////// hashtag  //////////////////////////////////////////////

function Gethashtag($text,$salt){
	$matchs = array();
	if(!preg_match_all('/#([\p{Pc}\p{L}\p{N}\p{Mn}]+)/u',$text,$matchs))
		{
	}else{
			$hashtags = implode(",",$matchs[1]);
	$hashtags = explode(',',$hashtags);
foreach	($hashtags as $tags){
	doHash($salt,$tags);
}
	}
	}
	
function br($text){
	return $text = '</br>'.$text.'</br>';
}
function doHash($salt,$tags){
global $db;
	$sql = "INSERT INTO `hashtag` (`salt`, `tags` ) VALUES ('$salt', '$tags')";
			$db->query($sql);
}


////////////////////////////////// text filter  //////////////////////////////////////////////

function text_filter($text)	{
	$text =nl2br(htmlspecialchars($text));
//complete text filter
	$parttens= array();
		$parttens[0]='/Fuck/';
		$parttens[1]='/fuck/';
		$parttens[2]='/sex/';
		$parttens[3]='/Sex/';
	$replacements= array();
		$replacements[0]='F**k';
		$replacements[1]='f**k';
		$replacements[2]='S*X';
		$replacements[3]='S*X';
	$text = preg_replace($parttens, $replacements ,$text);

//url filter
	$text = preg_replace('/(((ftp:|http:)\/\/)[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i',
                       '<a href="\\1" target="_blank" style="text-decoration:none;">\\1</a>',$text);
	$text = preg_replace('/([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i',
                       '\\1<a href="http://\\2" target="_blank" style="text-decoration:none;">\\2</a>', $text);
	$text = preg_replace('/([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})/i',
                       '<a style="text-decoration:none; href="mailto:\\1">\\1</a>', $text);
//return result
	return"$text";

}

function post_filter($text){
	$text = preg_replace('/\#([\p{Pc}\p{L}\p{N}\p{Mn}]+)/u',"<a href=\"hashtag.php?tags=$1\">#$1</a>",$text);
$text = preg_replace('/\@([\p{Pc}\p{L}\p{N}\p{Mn}]+)/u',"<a href=\"profile.php?username=$1\">@$1</a>",$text);
	return"$text";
}

////////////////////////////////// time ago  //////////////////////////////////////////////

function ago($session_time) 
{ 
 
$time_difference = time() - $session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
//return"$seconds seconds ago";
return"Just now"; 
}
else if($minutes <=60)
{
   if($minutes==1)
   {
     return"one minute ago"; 
    }
   else
   {
   return"$minutes minutes ago"; 
   }
}
else if($hours <=24)
{
   if($hours==1)
   {
   return"one hour ago";
   }
  else
  {
  return"$hours hours ago";
  }
}
else if($days <=7)
{
  if($days==1)
   {
   return"one day ago";
   }
  else
  {
  return"$days days ago";
  }
}
else if($weeks <=4)
{
  if($weeks==1)
   {
   return"one week ago";
   }
  else
  {
  return date("M d","$session_time");
  }
 }
else if($months <=12)
{
   if($months==1)
   {
   return date("M d","$session_time");
   }else{
  return date("M d","$session_time");
  }  
}else{
if($years==1)
   {
   return date("M d | Y","$session_time");
   }
  else
  {
  return date("M d | Y","$session_time");
  }}
} 

function device(){
$device = "";
$ua = strtolower($_SERVER['HTTP_USER_AGENT'] ); 
/////////////////////////////////////// mobille  ////////////////////
if(stripos($ua,'android') !== false ){
	return $device= 'Android';
}
elseif(stripos($ua,'windows nt 10.0') !== false ){
	return $device= 'Windows 10';
}
elseif(stripos($ua,'windows nt 6.2') !== false ){
	return $device= 'Windows 8';
}
elseif(stripos($ua,'windows nt 6.1') !== false  ){
	return $device= 'Windows 7';
}
elseif(stripos($ua,'blackberry') !== false ){
	return $device= 'BlackBerry';
}
elseif(stripos($ua,'ipod') !== false ){
	return $device= 'i Pod';
}
elseif(stripos($ua,'iphone') !== false ){
	return $device= 'i Phone';
}elseif(stripos($ua,'ipad') !== false ){
	return $device= 'i Phone';
}
elseif(stripos($ua,'windows phone') !== false ){
	return $device= 'Windows Mobile';
}
elseif(stripos($ua,'symbianos') !== false ){
	return $device= 'Symbian';
}
elseif(stripos($ua,'nokia') !== false ){
	return $device= 'Nokia';
}

///////////////////////////// system ///////////////////////

elseif(stripos($ua,'windows nt 6.0') !== false ){
	return $device= 'Windows VISTA';
}
elseif(stripos($ua,'windows nt 5.2') !== false ){
	return $device= 'Windows XP';
}
elseif(stripos($ua,'windows nt 5.1') !== false ){
	return $device= 'Windows XP';
}
elseif(stripos($ua,'cros') !== false ){
	return $device= 'Chrome Book';
}elseif(stripos($ua,'linux') !== false ){
	return $device= 'Linux';
}
elseif(stripos($ua,'mac') !== false ){
	return $device= 'Mac';
}else{
return 'unknown';	
}
}


function likec($pid){
	global $db;
	$sql = "select * from `likes` where `pid`='$pid'";
$result = $db->query($sql);
$likec = $result->num_rows;
return $likec;
}
function dislikec($pid){
global $db;
$sql = "select * from `dislikes` where `pid`='$pid'";
$result = $db->query($sql);
return $dislikec = $result->num_rows;

}
function commentc($pid){
	global $db;
$sql = "select * from `comments` where `pid`='$pid'";
$result = $db->query($sql);
return $commentc = $result->num_rows;
	
}

function commentu($pid,$uid){
	global $db;
$sql = "select * from `comments` where `pid`='$pid' and cid='$uid'";
$result = $db->query($sql);
return $commentu = $result->num_rows;
}

function likeu($pid,$uid)
{
	global $db;
$sql = "select * from `likes` where `pid`='$pid' and uid='$uid'";
$result = $db->query($sql);
 $likeu = $result->num_rows;
return $likeu;	
}

function dislikeu($pid,$uid){
		global $db;
$sql = "select * from `dislikes` where `pid`='$pid' and uid='$uid'";
$result = $db->query($sql);
 return $dislikeu = $result->num_rows;
 
}
function filter_get($string){
$string = preg_replace('/[^0-9.]/','',$string);
	return $string;
}
function filter_input_text($text){
	$parttens= array();
		$parttens[0]='/\"/';
		$parttens[1]='/fuck/';
		$parttens[2]='/sex/';
		$parttens[3]='/Sex/';
	$replacements= array();
		$replacements[0]='&quot;';
		$replacements[1]='f**k';
		$replacements[2]='S*X';
		$replacements[3]='S*X';
	$text = preg_replace($parttens, $replacements ,$text);
return $text;
	}
?>

