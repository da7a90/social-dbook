<?php
session_start();
 if($_SESSION['id'] ==""){
 header("Location:login.php");
 }else{
	 include("functions.php");
	 $uid =$_SESSION['id'];
	 $userid =$_SESSION['id'];
$poster = name($_SESSION['id']);
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

</style>
	</head>
<body>
<nav class="navbar navbar-default hidden-xs hidden-sm" role="navigation">
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
</nav></div>

<div class="menu-bar hidden-xs hidden-sm">

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
            <li style="margin-right:12px;margin-left:4px"><a href="groups.php"><sup><i class="glyphicon glyphicon-user"></i></sup><i class="glyphicon glyphicon-user"></i><sup><sup><i class="glyphicon glyphicon-user"></i></sup></sup> &nbsp; Groups </a></li>			
            <li style="margin-right:12px;margin-left:4px"><a href="games.php"><i class="fa fa-gamepad"></i> Games </a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="settings.php"><i class="fa fa-gear"></i> Settings </a></li>
          </ul>
</div>
</div>
<div class="btn-group btn-group-justified hidden-lg hidden-md  " style="color:#000; background:#428bca;" role="group" aria-label="Mobile Menu">
	<a class="btn btn-xs" href="index.php" style="color:#fff; font-size:225%; font-weight:bolder;   postion:absolute;">LYK</a> 
 <form>
<div class=" input-group" style="margin-left:25%; postion:absolute; padding:12px;">
     <input type="text" name="q" class="form-control" placeholder="LYK search">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
      </span>
    </div></div></form><!-- /input-group -->
	
    <div class="btn-group btn-group-justified hidden-lg hidden-md " role="group" aria-label="Mobile Menu">
      <a class="btn btn-default" style="color:#000; font-weight:bolder; background:#428bca; border:1px solid rgba(0,0,0,.2);" href="index.php"><strong><i class="fa fa-newspaper-o"></i></strong></a>
           <a class="btn btn-default" style="color:#000;  background:#428bca; border:1px solid rgba(0,0,0,.2);" href="messages.php"><i class="fa fa-envelope-o"></i> </a>
           <a class="btn btn-default" style="color:#000; background:#428bca; border:1px solid rgba(0,0,0,.2);" href="friends.php"><i class="fa fa-users"></i> </a>
           <a class="btn btn-default" style="color:#000;  background:#428bca; border:1px solid rgba(0,0,0,.2); " href="notification.php"><i class="fa fa-bell-o"></i>  <sup id="noti" style="display:none;"><i ><sup class="noti-red"></sup></i></sup></a>
           <a class="btn btn-default" style="color:#fff; background:#428bca; border:1px solid rgba(0,0,0,.2); " href="pages.php"><i class="fa fa-copy"></i>  </a>
		   <a class="btn btn-default" style="color:#000;  background:#428bca; border:1px solid rgba(0,0,0,.2);" href="groups.php"><sup><i class="glyphicon glyphicon-user"></i></sup><i class="glyphicon glyphicon-user"></i><sup><sup><i class="glyphicon glyphicon-user"></i></sup></sup> </a>			
           <a class="btn btn-default" style="color:#000; background:#428bca;border:1px solid rgba(0,0,0,.2); " href="games.php"><i class="fa fa-gamepad"></i>  </a>
           <a class="btn btn-default" style="color:#000; background:#428bca; border:1px solid rgba(0,0,0,.2); " href="settings.php"><i class="fa fa-gear"></i>  </a>
    </div>
<div class="container" style="margin-top:16px;">
<div class="row">
<div class="col-md-4 box-shadow">
<img src="images/hdwallpaper.jpeg" class="img-responsive box-shadow">
<div style="background:#fff; padding-left:16px;padding-right:16px;min-height:45px;box-shadow: 1px  0 15px rgba(0,0,0,.2); margin:0 !important;">
<a class="page-title" href="#" align="center">HD WALLPAPER</a>
<div class="btn-group btn-group-xs" role="group" aria-label="HD WALLPAPER">
  <button type="button" class="btn btn-info">Followed  <i class="fa fa-heart-o"></i></button>
  <button type="button" class="btn btn-default">12</button>
</div>
<div class="btn-group pull-right" role="group" aria-label="HD WALLPAPER">
  <a href="hashtag.php?tags=hdwallpaper">#hdwallpaper</a>
</div>
<p>&nbsp;</p>
</div>
</div>
<div class="col-md-4 hidden-xs hidden-sm">
<img src="images/Custombikes.jpg" class="img-responsive box-shadow">
<div style="background:#fff; padding-left:16px;padding-right:16px;min-height:45px;box-shadow: 1px  0 15px rgba(0,0,0,.2); margin:0 !important;">
<a class="page-title" align="center">Custom Bikes</a>
<div class="btn-group btn-group-xs" role="group" aria-label="HD WALLPAPER">
  <button type="button" class="btn btn-info">Followed  <i class="fa fa-heart-o"></i></button>
  <button type="button" class="btn btn-default">24</button>
</div>
<div class="btn-group pull-right" role="group" aria-label="HD WALLPAPER">
  <a href="hashtag.php?tags=CustomBikes">#CustomBikes</a>
</div>
<p>&nbsp;</p>
</div></div>
<div class="col-md-4 hidden-xs hidden-sm">
<img src="images/avengers.jpg" class="img-responsive box-shadow">
<div style="background:#fff; padding-left:16px;padding-right:16px;min-height:45px;box-shadow: 1px  0 15px rgba(0,0,0,.2); margin:0 !important;">
<a class="page-title" href="#" align="center">Avengers</a>
<div class="btn-group btn-group-xs" role="group" aria-label="HD WALLPAPER">
  <button type="button" class="btn btn-info">Followed  <i class="fa fa-heart-o"></i></button>
  <button type="button" class="btn btn-default">12</button>
</div>
<div class="btn-group pull-right" role="group" aria-label="HD WALLPAPER">
  <a href="hashtag.php?tags=avengers">#avengers</a>
</div>
<p>&nbsp;</p>
</div></div>
<p>&nbsp;</p>
<div class="col-md-4 hidden-xs hidden-sm">
<img src="images/buildings.jpg" class="img-responsive box-shadow">
<div style="background:#fff; padding-left:16px;padding-right:16px;min-height:45px;box-shadow: 1px  0 15px rgba(0,0,0,.2); margin:0 !important;">
<a class="page-title" href="#" align="center">Super Buildings</a>
<div class="btn-group btn-group-xs" role="group" aria-label="SuperBuildings">
  <button type="button" class="btn btn-info">Followed  <i class="fa fa-heart-o"></i></button>
  <button type="button" class="btn btn-default">12</button>
</div>
<div class="btn-group pull-right" role="group" aria-label="HD WALLPAPER">
  <a href="hashtag.php?tags=SuperBuildings">#SuperBuildings</a>
</div>
<p>&nbsp;</p>
</div></div>

<div class="col-md-4 hidden-xs hidden-sm">
<img src="images/paintings.jpeg" class="img-responsive box-shadow">
<div style="background:#fff; padding-left:16px;padding-right:16px;min-height:45px;box-shadow: 1px  0 15px rgba(0,0,0,.2); margin:0 !important;">
<a class="page-title" href="#" align="center"> Paintings</a>
<div class="btn-group btn-group-xs" role="group" aria-label="SuperBuildings">
  <button type="button" class="btn btn-info">Followed  <i class="fa fa-heart-o"></i></button>
  <button type="button" class="btn btn-default">12</button>
</div>
<div class="btn-group pull-right" role="group" aria-label="HD WALLPAPER">
  <a href="hashtag.php?tags=paintings">#paintings</a>
</div>
<p>&nbsp;</p>
</div></div>

<div class="col-md-4 hidden-xs hidden-sm">
<img src="images/photography.jpg" class="img-responsive box-shadow">
<div style="background:#fff; padding-left:16px;padding-right:16px;min-height:45px;box-shadow: 1px  0 15px rgba(0,0,0,.2); margin:0 !important;">
<a class="page-title" href="#" align="center"> Photography</a>
<div class="btn-group btn-group-xs" role="group" aria-label="SuperBuildings">
  <button type="button" class="btn btn-info">Followed  <i class="fa fa-heart-o"></i></button>
  <button type="button" class="btn btn-default">12</button>
</div>
<div class="btn-group pull-right" role="group" aria-label="photography">
  <a href="hashtag.php?tags=photography">#photography</a>
</div>
<p>&nbsp;</p>
</div></div>


</div>
<br><br><br><br><br><br>
<center><img src="images/loading.gif" width="95"></center>
<script type="text/javascript" src="./js/data.min.js"></script>
<?php include("commonFunction.php");?>
</body>
</html>