<?php
$username="naveen";
$reciver="naveen";
$uid="3";
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
<img src="images/naveen.jpg" class="img-profile img-rounded img-responsive">
            <li style="margin-right:12px;">&nbsp;</li>
            <li style="margin-right:12px;">&nbsp;</li>
            <li style="margin-right:12px;"><a href="profile.php"> Naveen Da</a></li>
            <li>&nbsp;</li>
          </ul>
</nav></div>
<div class="menu-bar">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse-1">
            <span class="fa fa-navicon"></span>
        </button>
    <div class="collapse navbar-collapse" id="example-navbar-collapse-1">    
		<ul class="nav navbar-nav ">
            <li style="margin-right:12px;"><a href="index.php"><i class="fa fa-newspaper-o"></i> Newsfeed</a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="messages.php"><i class="fa fa-envelope-o"></i> Messages</a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="friends.php"><i class="fa fa-users"></i> Friends</a></li>
            <li style="margin-right:12px;margin-left:4px;"><a href="notification.php"><i class="fa fa-bell-o"></i> Notification</a></li>
            <li style="margin-right:12px;margin-left:4px;border-bottom:2px solid #428bca;"><a href="pages.php"><i class="fa fa-copy"></i> Pages </a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="groups.php"><i class="fa fa-connectdevelop"></i> Groups </a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="games.php"><i class="fa fa-gamepad"></i> Games </a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="settings.php"><i class="fa fa-gear"></i> Settings </a></li>
          </ul>
</div>
</div>
<div class="container" style="margin-top:16px;">
<div class="row">
<div style="" class="col-md-10  col-md-push-1">
<div class="" style="min-height:275px;background:#fff;">

<div  class="coverpic" ><h3 class="3dName pull-left" style="bottom:0;left:25px; position:absolute;float:right !important; margin-top:5px;color:rgba(0, 0, 0, 0.8);" >HD Wallpaper</h3><img src="images/hdwallpaper.jpeg" height="265px" width="100%">

<p>&nbsp;</p><a href="#" style="margin-right:45px; margin-top:4px;" class="btn  btn-default pull-right">Followed <i class="fa fa-heart"></i> </a>

</div>


<br><br><p>&nbsp;</p>
</div>
</div>

</div>
<div class="row">
<div class="col-md-10 col-md-push-1 " style="margin-left:-12px;">

<div class="col-md-12 white">
  <h4>  <a href="#text"  data-toggle="tab" ><i class="glyphicon glyphicon-edit"></i> What's New &nbsp; </a>| &nbsp;<a href="#photo" data-toggle="tab"   ><i class="glyphicon glyphicon-picture"></i> Add Photos</a> |<a href="#video"  data-toggle="tab" > <i class="glyphicon glyphicon-film"></i> &nbsp; Add Video </a> | <a href="#audio" class="tablet"  data-toggle="tab" > <i class="glyphicon glyphicon-headphones"></i> &nbsp; Add Audio </a></h4>
                                    
                <div id="myTabContent" class="tab-content">
									<div class="tab-pane fade active in" id="text">
                                    <form class="form-horizontal"  method="POST" action="update.php" >
									<div class="form-group" style="padding:14px;"><span id="count"></span>
                                    <textarea class="form-control" id="textarea" name="status" style="resize:none;" placeholder="Update your status"></textarea>
                                    </div>
									<input type="hidden" name="poster"  value="<?php echo "$username";?>">
									<input type="hidden" name="pid"  value="<?php echo "$uid";?>">
									<input type="submit" class="btn btn-primary pull-right" value="Post">
									</form>
				</div>
				<div class="tab-pane fade" id="photo">
									
									<form action="AddPhoto.php" class="form-inline"   method="POST" enctype="multipart/form-data" >
									<div class="col-md-2 col-md-offset-4" style="background:#428bca;">
									<div class="imageUpoad">
									<input type="file" name="image" id="image" accept="image/*"  class="inputfile "   /><label for="image" id="imageUpoad"><i class="fa fa-file-photo-o fa-3x"></i></label>
									<br><br><span id="dataText"></span></div></div>
									<p>&nbsp;</p>
									<div class="col-md-5 col-md-offset-3"><br>
									<input type="hidden" name="poster"  value="<?php echo "$username";?>">
									<input type="hidden" name="pid"  value="<?php echo "$uid";?>">
									<input type="text" class="form-control" name="status" placeholder="Add Description to Photo">
									<input type="submit" class="btn btn-primary " name="photos" value="Post">
									</form>
				</div>
				</div>
				<div class="tab-pane fade" id="video">
									<form action="Addvideo.php" class="form-inline"  method="POST"  enctype="multipart/form-data">
                    				<div class="col-md-2 col-md-offset-4" style="background:#428bca;">
									<div class="imageUpoad">
									<input type="file" name="video"  id="videoUp" accept="video/*"  class="inputfile "   /><label for="videoUp" id="imageUpoad"><i class="fa fa-file-video-o fa-3x"></i></label>
									<br><br><span id="dataTextV"></span></div></div>
									<p>&nbsp;</p>
									<div class="col-md-5 col-md-offset-3"><br>
                                    <input type="hidden" name="poster"  value="<?php echo "$username";?>">
									<input type="hidden" name="pid"  value="<?php echo "$uid";?>">
									<input type="text" class="form-control" name="status" placeholder="Add Description to Video">
									<input type="submit" class="btn btn-primary " name="submit" value="Post">
									</form>
				</div>
				</div>
				<div class="tab-pane fade" id="audio">
									<form action="Addaudio.php" class="form-inline"  method="POST"  enctype="multipart/form-data">
                    				<div class="col-md-2 col-md-offset-4" style="background:#428bca;">
									<div class="imageUpoad">
									<input type="file" name="audio"  id="audioUp" accept="audio/*"  class="inputfile "   /><label for="audioUp" id="imageUpoad"><i class="fa fa-file-audio-o fa-3x"></i></label>
									<br><br><span id="dataTextA"></span></div></div>
									<p>&nbsp;</p>
									<div class="col-md-5 col-md-offset-3"><br>
                                    <input type="hidden" name="poster"  value="<?php echo "$username";?>">
									<input type="hidden" name="pid"  value="<?php echo "$uid";?>">
									<input type="text" class="form-control" name="status" placeholder="Add Description to Audio">
									<input type="submit" class="btn btn-primary " name="submit" value="Post">
									</form>
				</div>
				</div>
				</div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </div>

  
<div class="col-md-12 white">
 <a href="#"><img src="images/naveen.jpg" style="padding-right:12px; "  class="img-newsfeed-user pull-left"><span class="profile-name">Naveen</span></a><small><small> &nbsp;&nbsp;Updated</small></small><span class="post-ago">Posted 12 hours ago</span>
<hr><p class="p-post">Excited to hold 1st copy of #GhostFlight! Out this week. 'The ultimate modern-day conspiracy!</p>

<!--- status Single block Starts-->
<a class="black" href="#" onClick="like('7')" >&nbsp;&nbsp;&nbsp;0 <i class="glyphicon glyphicon-thumbs-up"></i></a><a class="black" href="dislike.php?post=7"">&nbsp;&nbsp;&nbsp;0 <i class="glyphicon glyphicon-thumbs-down"></i>&nbsp;</a>&nbsp;&nbsp;&nbsp;<a class="black " href="post.php?id=7"">0 <i class="glyphicon glyphicon-comment"></i>&nbsp;&nbsp; Comment &nbsp;</a><p><div class="progress" style="height:6px;width:234px;"><div class="progress-bar progress-bar-success" style="width: 0%"></div><div class="progress-bar progress-bar-danger" style="width: 0%"></div></div><hr><form action="comment.php" method="POST" role="form">
                                      <div class="input-group"><div class="input-group-btn"><button class="btn btn-default">+1</button></div>
                                      <input type="text" class="form-control" name="comment" id="comment" placeholder="Add a comment.."><div class="input-group-btn">
									  <input type="hidden" name="commenter" value="admin">
									  <input type="hidden" name="cid" value="2">
									  <input type="hidden" name="sid" value="7">
									  <input type="submit" class="btn  comt " id="add" value="Comment"></div>
                                      </div>
                                      </form>
 </div>
</div></div>


<br><br><br><br><br><br>
<center><img src="images/loading.gif" width="95"></center>
<script type="text/javascript" src="./js/data.min.js"></script>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>
</body>
</html>