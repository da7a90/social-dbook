
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
$pid= $_POST['pid'];
$class="";
$sql = "select * from `post` WHERE `pid`='$pid' ";
	$result = $db->query($sql);
	foreach($result as $row){
		$pid=$row['pid'];
		$uid=$row['uid'];
		$text = $row['text'];
		$text = text_filter($text);
		$text = post_filter($text);
		$text = '<strong>'.$text.'</strong>';
		$poster=$row['poster'];
		$time=$row['time'];
		$data=$row['data'];
		$postcat=$row['postcat'];
		$device=$row['device'];

//like data
$likebutton = 	  '<a href="javascript:void(0);" onclick="like(\''.$pid.'\')"  class="btn btn-default">&nbsp;&nbsp;Like '.$likec.' <i class="fa fa-thumbs-o-up"></i> </a>';
$dislikebutton = 	  '<a href="javascript:void(0);" onclick="dislike(\''.$pid.'\')" class="btn btn-default">&nbsp;&nbsp;Disike '.$dislikec.' <i class="fa fa-thumbs-o-down"></i> </a>';
$commentbutton = 	  '<a href="post.php?pid='.$pid.'" class="btn btn-default">&nbsp;&nbsp;Comment '.$commentc.' <i class="fa fa-comment"></i> </a>';

$likedata = '<a class="black" href="javascript:void(0);" onclick="like(\''.$pid.'\')" >'.$likec.' <i class="fa fa-thumbs-o-up"></i>&nbsp;&nbsp;</a>';
if($likeu > 0)
{
$likebutton = 	  '<a href="javascript:void(0);" onclick="like(\''.$pid.'\')"  class="btn btn-default used">&nbsp;&nbsp;Like '.$likec.' <i class="fa fa-thumbs-o-up"></i> </a>';
$likedata = '<a class="used" href="javascript:void(0);" onclick="like(\''.$pid.'\')"  >'.$likec.' <i class="fa fa-thumbs-o-up"></i>&nbsp;&nbsp;</a>';
}
//dislike data
$dislikedata = '<a class="black" href="javascript:void(0);" onclick="dislike(\''.$pid.'\')"  >'.$dislikec.' <i class="fa fa-thumbs-o-down"></i>&nbsp;&nbsp;</a>';
if($dislikeu > 0)
{
$dislikebutton = 	  '<a href="javascript:void(0);" onclick="dislike(\''.$pid.'\')" class="btn btn-default used">&nbsp;&nbsp;Disike '.$dislikec.' <i class="fa fa-thumbs-o-down"></i> </a>';
$dislikedata = '<a class="used" href="javascript:void(0);" onclick="dislike(\''.$pid.'\')"  >'.$dislikec.' <i class="fa fa-thumbs-o-down"></i>&nbsp;&nbsp;</a>';
}
//comment data
$commentdata = '<a class="black" href="post.php?pid='.$pid.'"  >'.$commentc.' <i class="fa fa-comment"></i>&nbsp;&nbsp;</a>';
if($commentu > 0)
{
$commentbutton = 	  '<a href="post.php?pid='.$pid.'" class="btn btn-default used">&nbsp;&nbsp;Comment '.$commentc.' <i class="fa fa-comment"></i> </a>';
$commentdata = '<a class="used" href="post.php?pid='.$pid.'"  >'.$commentc.' <i class="fa fa-comment"></i>&nbsp;&nbsp;</a>';
}
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
$comment .='									  <form action="" method="POST" role="form">
<div class="input-group"><div class="input-group-btn"><button class="btn btn-default">+1</button></div>
                                      <input type="text" id="text'.$pid.'"  class="form-control" name="comment"  placeholder="Add a comment.."><div class="input-group-btn"></form>								
									 <button class="btn comt" onclick="commented(\''.$pid.'\');"  >Comment</button></div>
                                      </div>
                                       ';
$total= $likec+$dislikec;
if ($total > 0) {
			$likes_per = ($likec / $total) * 100;
			$unlikes_per = ($dislikec / $total) * 100;
		}else{
			$likes_per = 0;
			$unlikes_per = 0;
		}
if($postcat == "post" ){
		echo '
  
  <a href="profile.php?id='.$uid.'"><img src="images/'.image($uid).'" style="padding-right:12px; "  class="img-newsfeed-user pull-left"><span class="profile-name">'.$poster.'</span></a><small><small> &nbsp;&nbsp;Updated</small></small><span class="pull-right device">- Via '.$device.' <img src="images/'.$device.'.jpg" width="15px"></span><span class="post-ago">Posted '.ago($time).'</span>
<hr><p class="p-post">'.$text.'</p>
<p>'.$likedata.$dislikedata.$commentdata.'</p>
<p><div class="progress" style="height:6px;width:341px; margin-left:24px;"><div class="progress-bar progress-bar-success" style="width: '.$likes_per.'%"></div><div class="progress-bar progress-bar-danger" style="width: '.$unlikes_per.'%"></div></div><hr>
'.$comment.'
 </div>
';}
if($postcat == "photo" ){
	echo '
  
  <a href="profile.php?id='.$uid.'"><img src="images/'.image($uid).'" style="padding-right:12px; "  class="img-newsfeed-user pull-left"><span class="profile-name">'.$poster.'</span></a><small><small> &nbsp;&nbsp;Added new Photo</small></small><span class="pull-right device">- Via '.$device.' <img src="images/'.$device.'.jpg" width="15px"></span><span class="post-ago">Posted '.ago($time).'</span>
<hr><p>'.$text.'</p><a href="post.php?pid='.$pid.'"><img src="photo/'.$data.'"  width="345px" height="345px" class="img-responsive img-thumbnail img-post"></a>
<br><div style="padding-left:2em; " class="btn-group" role="group" aria-label="likes">
 '.$likebutton.$dislikebutton.$commentbutton.'
</div>
<p><div class="progress" style="height:6px;width:341px; margin-left:24px;"><div class="progress-bar progress-bar-success" style="width: '.$likes_per.'%"></div><div class="progress-bar progress-bar-danger" style="width: '.$unlikes_per.'%"></div></div><hr>
'.$comment.' </div>
';
}
if($postcat == "video" ){
	echo '
  
  <a href="profile.php?id='.$uid.'"><img src="images/'.image($uid).'" style="padding-right:12px; "  class="img-newsfeed-user pull-left"><span class="profile-name">'.$poster.'</span></a><small><small> &nbsp;&nbsp;Added new video</small></small><span class="pull-right device">- Via '.$device.' <img src="images/'.$device.'.jpg" width="15px"></span><span class="post-ago">Posted '.ago($time).'</span>
<hr><p>'.$text.'</p><video class="embed-responsive-item" style="padding-left:3em; "  width="345" height="245" style="border:2px solid black" controls>
<source class="embed-responsive-item img-post" src="video/'.$data.'" type="video/mp4">
</video><br>
<div style="padding-left:3em; " class="btn-group" role="group" aria-label="likes">
 &nbsp;&nbsp;'.$likebutton.$dislikebutton.$commentbutton.'
</div>
<p><div class="progress" style="height:6px;width:341px; margin-left:24px;"><div class="progress-bar progress-bar-success" style="width: '.$likes_per.'%"></div><div class="progress-bar progress-bar-danger" style="width: '.$unlikes_per.'%"></div></div><hr>
'.$comment.' </div>
';
}
if($postcat == "audio" ){
	echo '
  
  <a href="profile.php?id='.$uid.'"><img src="images/'.image($uid).'" style="padding-right:12px; "  class="img-newsfeed-user pull-left"><span class="profile-name">'.$poster.'</span></a><small><small> &nbsp;&nbsp;Added new audio</small></small><span class="pull-right device">- Via '.$device.' <img src="images/'.$device.'.jpg" width="15px"></span><span class="post-ago">Posted '.ago($time).'</span>
<hr><p>'.$text.'</p><audio class="embed-responsive-item" style="padding-left:3em; "  width="345" height="245" controls>
<source class="embed-responsive-item" src="audio/'.$data.'" type="audio/mpeg">
</audio><br>
<div style="padding-left:2em; " class="btn-group" role="group" aria-label="likes">
 '.$likebutton.$dislikebutton.$commentbutton.'
</div>
<p><div class="progress" style="height:6px;width:341px; margin-left:24px;"><div class="progress-bar progress-bar-success" style="width: '.$likes_per.'%"></div><div class="progress-bar progress-bar-danger" style="width: '.$unlikes_per.'%"></div></div><hr>
'.$comment.' </div>
';

}
		}

	?>