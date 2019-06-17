<?php
  session_start();
 if($_SESSION['id'] ==""){
 header("Location:login.php");
 }else{
	 include("functions.php");
	 $userid =$_SESSION['id'];
	 $uid =$_SESSION['id'];
$poster = name($_SESSION['id']);
		$name="";
		$email="";

		$profilepic="";
		$coverpic="";
		$location="";
		$username="";
 }
 
  if(isset($_GET['id'])||isset($_GET['username']))
{
		if(isset($_GET['id'])){
 $uid= filter_get($_GET['id']);	

 }
 if(isset($_GET['username'])){
	$uid= user($_GET['username']);	
header("Location:profile.php?id=$uid");

	}
}


$db = new mysqli('localhost', 'root', '', 'social');
$class="";
$sql = "select * from `user` WHERE `id`='$uid' LIMIT 1";
	$result = $db->query($sql);
	foreach($result as $row){
		$name=$row['name'];
		$email=$row['email'];

		$profilepic=$row['profilepic'];
		$coverpic=$row['coverpic'];
		$location=$row['location'];
		$username=$row['username'];
	}
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8" />
    <title>web Developer In nktt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/social.css" /> 
    <link rel="shortcut icon" href="./favicon.png" type="image/png">
<style>
<!-- 

 -->
</style>
	</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" style="">Da7aBook</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<div id="socialData">     
        <div class="col-md-7 col-xs-1 ">
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" id="menu-search" class="form-control" placeholder="Da7aBook Search" name="q">
					<div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>  
		<ul class="nav navbar-nav navbar-right">
<a href="profile.php?id=<?php echo$userid; ?>"><img src="images/<?php echo image($userid);?>" class="img-profile img-rounded img-responsive"></a>
            <li style="margin-right:12px;">&nbsp;</li>
            <li style="margin-right:12px;">&nbsp;</li>
			<li class="dropdown">
                    <a style="background:#428bca;color:#fff !important;" class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo$poster; ?>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul  class="dropdown-menu ">
                        <li class="black"><a class="black" style="color:#000!important;" href="profile.php?id=<?php echo$userid; ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="black "><a class="black" style="color:#000!important;" href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li class="black "><a class="black" style="color:#000!important;" href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            <li>&nbsp;</li>
          </ul>
</div>
		  </nav></div>
<div class="menu-bar">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse-1">
            <span class="fa fa-navicon"></span>
        </button>
    <div class="collapse navbar-collapse" id="example-navbar-collapse-1">    
		<ul class="nav navbar-nav ">
      <li style="margin-right:12px;"><a href="index.php"><i class="fa fa-newspaper-o"></i> Newsfeed</a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="messages.php"><i class="fa fa-envelope-o"></i> Messages</a></li>
            <li style="margin-right:12px;margin-left:4px;"><a href="friends.php"><i class="fa fa-users"></i> Friends</a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="notification.php"><i class="fa fa-bell-o"></i> Notification <sup id="noti" style="display:none;"><i ><sup class="noti-red"></sup></i></sup></a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="pages.php"><i class="fa fa-copy"></i> Pages </a></li>
			<li style="margin-right:12px;margin-left:4px"><a href="groups.php"><sup><i class="glyphicon glyphicon-user"></i></sup><i class="glyphicon glyphicon-user"></i><sup><sup><i class="glyphicon glyphicon-user"></i></sup></sup> &nbsp; Groups </a></li>			
            <li style="margin-right:12px;margin-left:4px"><a href="games.php"><i class="fa fa-gamepad"></i> Games </a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="settings.php"><i class="fa fa-gear"></i> Settings </a></li>
          </ul>
</div>
</div>
<div class="container" style="margin-top:16px;">
<div class="row">
<div style="" class="col-md-10  col-md-push-1">
<div class="" style="height:275px;background:#fff;">

<div  class="coverpic" ><h3 class="3dName" style="bottom:0;left:225px; position:absolute;float:right !important;" ><?php echo $name; ?></h3><img src="images/<?php echo $coverpic; ?>" height="265px" width="100%">

<div id="coveredit" style="margin:12px; bottom: 0; position: absolute; right: 16px;display:none;"><input type="file" name="image" id="profile" accept="image/*"  class="inputfile "   /><label for="profile" ><i class="fa fa-camera  fa-2x pull-right"></i></label></div>
</div>

<div id="profilepic" style="width: 170px;height: 170px;z-index: 1000; background-color: #ffffff; position: absolute;bottom: -16px;left:3em;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;">
    <div id="triangle-topright">
       <input type="file" name="image" id="coverpicture" accept="image/*"  class="inputfile "   /><label for="coverpicture" ><i class="fa fa-edit  pull-right" style=" margin-top: -46px; top: 0; position: absolute; right:0px;"></i></label>

    </div><span style="bottom:-4px;left:225px; position:absolute;float:right !important; margin-left:-19%;"  ><b>@<?php echo $username; ?></b></span>
<div style="    background-color: #fff;border: 3px solid #ddd;border-radius: 4px; padding:-4px;"  ><img src="images/<?php echo $profilepic; ?>" id="" width="170px" height="170px" class="img-profile-pic"></div>

</div>

</div>

</div>
</div>

<div class="row">
<div class="col-md-10  col-md-push-1">
<div class="" style="min-height:75px;background:#fff;padding:16px;">
<p>&nbsp;</p>

  <span class=""><i class="fa fa-map-marker fa-2x"></i> <?php echo $location; ?></span>
 <a href="messages.php?user=<?php echo $username; ?>" style="margin-right:12px;" class="btn btn-default pull-right"><i class="fa fa-envelope-o"></i></a>
 </div>
</div>
</div>

<div class="clearfix"></div>
<br>
<div class="row">
<div class="col-md-10 col-md-push-1 " style="margin-left:-12px;">
<?php 
$sql = "select * from `post` WHERE `uid`='$uid' ORDER BY `pid` DESC ";
	$result = $db->query($sql);
	foreach($result as $row){
		$pid=$row['pid'];
		$posterid=$row['uid'];
		$text = text_filter($row['text']);
		$text = post_filter($text);
		$poster=$row['poster'];
		$time= $row['time'];
		$data=$row['data'];
		$postcat=$row['postcat'];
		$device=$row['device'];
		$likec = likec($pid);
		$dislikec = dislikec($pid);
		$commentc = commentc($pid);
		
$liketext = '<a class="black" href="javascript:void(0);" onclick="like(\''.$pid.'\')"  > '.$likec.'&nbsp;<i class="fa fa-thumbs-o-up"></i>&nbsp;&nbsp;</a>';
$disliketext = '<a class="black" href="javascript:void(0);" onclick="dislike(\''.$pid.'\')"  > '.$dislikec.'&nbsp;<i class="fa fa-thumbs-o-down"></i>&nbsp;&nbsp;</a>';
$commenttext = '<a class="black" href="post.php?pid='.$pid.'"  >'.$commentc.' <i class="fa fa-comment"></i>&nbsp;&nbsp;</a>';

$likebutton = 	  '<a href="javascript:void(0);" onclick="like(\''.$pid.'\')"  class="btn btn-default">&nbsp;&nbsp;Like '.$likec .' <i class="fa fa-thumbs-o-up"></i> </a>';
$dislikebutton = 	  '<a href="javascript:void(0);"  onclick="dislike(\''.$pid.'\')"  class="btn btn-default">&nbsp;&nbsp;Disike '.$dislikec.' <i class="fa fa-thumbs-o-down"></i> </a>';
$commentbutton = 	  '<a href="post.php?pid='.$pid.'" class="btn btn-default">&nbsp;&nbsp;Comment '.$commentc.' <i class="fa fa-comment"></i> </a>';


if(likeu($pid,$userid) > 0){
	$liketext = '<a class="used" href="javascript:void(0);" onclick="like(\''.$pid.'\')"  > '.likec($pid).'&nbsp;<i class="fa fa-thumbs-o-up"></i>&nbsp;&nbsp;</a>';
$likebutton = 	  '<a href="javascript:void(0);" onclick="like(\''.$pid.'\')"  class="btn btn-default used">&nbsp;&nbsp;Like '.likec($pid) .' <i class="fa fa-thumbs-o-up"></i> </a>';

	}
if(dislikeu($pid,$userid) > 0){
$disliketext = '<a class="used" href="javascript:void(0);" onclick="dislike(\''.$pid.'\')"  > '.dislikec($pid).'&nbsp;<i class="fa fa-thumbs-o-down"></i>&nbsp;&nbsp;</a>';
$dislikebutton = 	  '<a href="javascript:void(0);"  onclick="like(\''.$pid.'\')"  class="btn btn-default used">&nbsp;&nbsp;Disike '.dislikec($pid) .' <i class="fa fa-thumbs-o-down"></i> </a>';

	}
if(commentu($pid,$userid) > 0){
$commenttext = '<a class="used" href="post.php?pid=54"  >1 <i class="fa fa-comment"></i>&nbsp;&nbsp;</a>';
$commentbutton = 	  '<a href="post.php?pid='.$pid.'" class="btn btn-default used">&nbsp;&nbsp;Comment '.commentc($pid).' <i class="fa fa-comment"></i> </a>';

}
$total= $likec+$dislikec;
if ($total > 0) {
			$likes_per = ($likec / $total) * 100;
			$unlikes_per = ($dislikec / $total) * 100;
		}else{
			$likes_per = 0;
			$unlikes_per = 0;
		}
$percentage ='<p><div class="progress" style="height:6px;width:341px; margin-left:24px;"><div class="progress-bar progress-bar-success" style="width: '.$likes_per.'%"></div><div class="progress-bar progress-bar-danger" style="width: '.$unlikes_per.'%"></div></div><hr>';
$comment="";
$sql = "select * from `comments` where `pid`='$pid' limit 12";
	$result = $db->query($sql);
	foreach($result as $row){
		$pid=$row['pid'];
		$cid=$row['cid'];
		$commenter = $row['commenter'];
		$comments = text_filter($row['comment']);
		$timec=$row['time'];
$comment .=	'<a href="profile.php?id='.$cid.'"><img src="images/'.image($cid).'" style="padding-right:12px; width:45px; height:35px; " width="35" height="35" class="img-newsfeed-user pull-left"><span class="profile-name"><small><small>'.$commenter.'</small></small></a></span>&nbsp;<span><small><small>'.ago($timec).'</small></small></span>
<span class="post-ago" style="font-size:95%; font-weight:bold;">'.$comments.' </span>
   <hr>';
		}
$comment .='									  <form action=""    method="POST" role="form">
<div class="input-group"><div class="input-group-btn"><button class="btn btn-default">+1</button></div>
                                      <input type="text" id="text'.$pid.'" class="form-control" name="comment"  placeholder="Add a comment.."><div class="input-group-btn"></form>									
									 <button class="btn comt" onclick="commented(\''.$pid.'\');"  >Comment</button></div>
                                      </div>
                                      </div>
									  
                                       ';



	
	if($postcat == "post")
{
	$divdata = '<div class="col-md-12 white" id="div'.$pid.'">
	 <a href="profile.php?id='.$posterid.'"><img src="images/'.image($posterid).'" style="padding-right:12px; "  class="img-newsfeed-user pull-left"><span class="profile-name">'.$poster.'</span></a><small><small> &nbsp;&nbsp;Updated</small></small><span class="pull-right device">- Via '.$device.' <img src="images/'.$device.'.jpg" width="15px"></span><span class="post-ago">Posted '.ago($time).'</span>
<hr><p class="p-post">'.$text.'</p>
'.$liketext.$disliketext.$commenttext.$percentage;
}elseif($postcat == "photo"){
	$divdata = '
	<div class="col-md-12 white" id="div'.$pid.'">
	 <a href="profile.php?id='.$posterid.'"><img src="images/'.image($posterid).'" style="padding-right:12px; "  class="img-newsfeed-user pull-left"><span class="profile-name">'.$poster.'</span></a><small><small> &nbsp;&nbsp;Updated</small></small><span class="pull-right device">- Via '.$device.' <img src="images/'.$device.'.jpg" width="15px"></span><span class="post-ago">Posted '.ago($time).'</span>
<hr><p>'.$text.'</p><a href="post.php?pid='.$pid.'"><img src="photo/'.$data.'"  width="345px" height="345px" class="img-responsive img-thumbnail img-post"></a>
<br><div style="padding-left:2em; " class="btn-group" role="group" aria-label="likes">
'.$likebutton.$dislikebutton.$commentbutton.'</div>'.$percentage;
}elseif($postcat == "video"){
	$divdata = '<div class="col-md-12 white" id="div'.$pid.'">
	 <a href="profile.php?id='.$posterid.'"><img src="images/'.image($posterid).'" style="padding-right:12px; "  class="img-newsfeed-user pull-left"><span class="profile-name">'.$poster.'</span></a><small><small> &nbsp;&nbsp;Updated</small></small><span class="pull-right device">- Via '.$device.' <img src="images/'.$device.'.jpg" width="15px"></span><span class="post-ago">Posted '.ago($time).'</span>
<hr><p>'.$text.'</p><a href="post.php?pid='.$pid.'"><video class="embed-responsive-item" style="padding-left:3em; "  width="345" height="245" style="border:2px solid black" controls>
<source class="embed-responsive-item img-thumbnail img-post" src="video/'.$data.'" type="video/mp4">
</video></a><br>
<div style="padding-left:3em; " class="btn-group" role="group" aria-label="likes">
'.$likebutton.$dislikebutton.$commentbutton.'</div>'.$percentage;
	
}elseif($postcat == "audio"){
	$divdata = '<div class="col-md-12 white" id="div'.$pid.'">
	 <a href="profile.php?id='.$posterid.'"><img src="images/'.image($posterid).'" style="padding-right:12px; "  class="img-newsfeed-user pull-left"><span class="profile-name">'.$poster.'</span></a><small><small> &nbsp;&nbsp;Updated</small></small><span class="pull-right device">- Via '.$device.' <img src="images/'.$device.'.jpg" width="15px"></span><span class="post-ago">Posted '.ago($time).'</span>
<hr><p>'.$text.'</p><a href="post.php?pid='.$pid.'"><audio class="embed-responsive-item" style="padding-left:3em; "  width="345" height="245" controls>
<source class="embed-responsive-item" src="audio/'.$data.'" type="audio/mpeg">
</audio></a><br>
<div style="padding-left:2em; " class="btn-group" role="group" aria-label="likes">
'.$likebutton.$dislikebutton.$commentbutton.'</div>'.$percentage;
}
echo $divdata;
$comment="";
$sql = "select * from `comments` where `pid`='$pid' limit 12";
	$result = $db->query($sql);
	foreach($result as $row){
		$pid=$row['pid'];
		$cid=$row['cid'];
		$commenter = $row['commenter'];
		$comments = text_filter($row['comment']);
		$timec=$row['time'];
$comment .=	'<a href="profile.php?id='.$cid.'"><img src="images/'.image($cid).'" style="padding-right:12px; width:45px; height:35px; " width="35" height="35" class="img-newsfeed-user pull-left"><span class="profile-name"><small><small>'.$commenter.'</small></small></a></span>&nbsp;<span><small><small>'.ago($timec).'</small></small></span>
<span class="post-ago" style="font-size:95%; font-weight:bold;">'.$comments.' </span>
   <hr>';
		}
$comment .='									  <form action=""    method="POST" role="form">
<div class="input-group"><div class="input-group-btn"><button class="btn btn-default">+1</button></div>
                                      <input type="text" id="text'.$pid.'" class="form-control" name="comment"  placeholder="Add a comment.."><div class="input-group-btn"></form>									
									 <button class="btn comt" onclick="commented(\''.$pid.'\');"  >Comment</button></div>
                                      </div>
                                      </div>
									  
                                       ';
echo $comment;
}
	?>



</div></div>

</div>


<script type="text/javascript" src="./js/data.min.js"></script>
<?php 
if(isset($_GET['id'])){
if($_SESSION['id'] == $_GET['id']){
	echo '<script>
$(".coverpic").hover(function(){
$("#coveredit").show();
}, function(){
$("#coveredit").hide();
});

$("#profilepic").hover(function(){
$("#triangle-topright").show();
}, function(){
$("#triangle-topright").hide();
});


</script>';
}
}
?>
<script>
function commented(pid){
	var ipbox= '#text'+pid;
	var text=$(ipbox).val();

	$.ajax({
		type: "POST",
		data:'pid='+ pid +'&comment='+text,
		url: "comment.php",
		success: function(data){
			getdata(pid);
		}
		});

	}

function dislike(pid){
$.ajax({
		type: "POST",
		data:'pid='+pid,
		url: "dislike.php",
		success: function(data){
getdata(pid);
		}
		});

}

function like(pid){
$.ajax({
		type: "POST",
		data:'pid='+pid,
		url: "like.php",
		success: function(data){
getdata(pid);
		}
		});

}
$("body").submit(function(event){
	event.preventDefault();
});

function getdata(pid){
var div= '#div'+pid;
$.ajax({
		type: "POST",
		data:'pid='+pid,
		url: "getdiv.php",
		success: function(data){
			$(div).html(data);
		}
		});

}



</script>
</body>
</html>