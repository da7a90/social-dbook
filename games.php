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
            <li style="margin-right:12px;margin-left:4px;"><a href="pages.php"><i class="fa fa-copy"></i> Pages </a></li>
			<li style="margin-right:12px;margin-left:4px"><a href="groups.php"><sup><i class="glyphicon glyphicon-user"></i></sup><i class="glyphicon glyphicon-user"></i><sup><sup><i class="glyphicon glyphicon-user"></i></sup></sup> &nbsp; Groups </a></li>			
            <li style="margin-right:12px;margin-left:4px;border-bottom:2px solid #428bca;"><a href="games.php"><i class="fa fa-gamepad"></i> Games </a></li>
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
           <a class="btn btn-default" style="color:#000; background:#428bca; border:1px solid rgba(0,0,0,.2); " href="pages.php"><i class="fa fa-copy"></i>  </a>
		   <a class="btn btn-default" style="color:#000;  background:#428bca; border:1px solid rgba(0,0,0,.2);" href="groups.php"><sup><i class="glyphicon glyphicon-user"></i></sup><i class="glyphicon glyphicon-user"></i><sup><sup><i class="glyphicon glyphicon-user"></i></sup></sup> </a>			
           <a class="btn btn-default" style="color:#fff; background:#428bca;border:1px solid rgba(0,0,0,.2); " href="games.php"><i class="fa fa-gamepad"></i>  </a>
           <a class="btn btn-default" style="color:#000; background:#428bca; border:1px solid rgba(0,0,0,.2); " href="settings.php"><i class="fa fa-gear"></i>  </a>
    </div>
<div class="container" style="margin-top:16px;">
<div class="row">
<div class="col-md-4 box-shadow">
<img src="images/truckcity.jpg" class="img-responsive box-shadow">
<div style="background:#fff; padding-left:16px;padding-right:16px;min-height:45px;box-shadow: 1px  0 15px rgba(0,0,0,.2); margin:0 !important;">
<a class="page-title" href="#" onclick="game('truckcity');" align="center">Truck City</a>

  <button type="button" onclick="game('truckcity');" class="btn btn-info btn-xs">Play  <i class="fa fa-truck "></i></button>
  <a href="hashtag.php?tags=truckcity" class=" pull-right"><i class="fa fa-hashtag "></i>truckcity</a>
<p>&nbsp;</p>
</div>
<p>&nbsp;</p>
</div>
<div class="col-md-4 hidden-xs hidden-sm">
<img src="images/sniper.jpg" class="img-responsive box-shadow">
<div style="background:#fff; padding-left:16px;padding-right:16px;min-height:45px;box-shadow: 1px  0 15px rgba(0,0,0,.2); margin:0 !important;">
<a class="page-title" href="#" onclick="game('snipers');" align="center">Snipers</a>
 <button type="button" onclick="game('snipers');" class="btn btn-info btn-xs">Play  <i class="fa fa-street-view "></i></button>
  <a href="hashtag.php?tags=snipers" class=" pull-right"><i class="fa fa-hashtag "></i>Snipers</a>
<p>&nbsp;</p>
</div>
<p>&nbsp;</p></div>

<div class="col-md-4 hidden-xs hidden-sm">
<img src="images/hoverbot.jpg" class="img-responsive box-shadow">
<div style="background:#fff; padding-left:16px;padding-right:16px;min-height:45px;box-shadow: 1px  0 15px rgba(0,0,0,.2); margin:0 !important;">
<a class="page-title" href="#" onclick="game('hoverbot');" align="center">Hoverbot</a>
 <button type="button" onclick="game('hoverbot');" class="btn btn-info btn-xs">Play  <i class="fa fa-fighter-jet "></i></button>
  <a href="hashtag.php?tags=hoverbot" class=" pull-right"><i class="fa fa-hashtag "></i>hoverbot</a>
<p>&nbsp;</p>
</div>
<p>&nbsp;</p></div>

</div>
<br><br><br><br><br><br>
<div class="modal fade" id="playGame" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div id="play">

                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            </div>
                            <!-- /.modal -->

<center><img id="load" src="images/loading.gif" width="95"></center>
<script type="text/javascript" src="./js/data.min.js"></script>
<?php include("commonFunction.php");?>
<script>

function game(gamename){
	$("#load").hide();
	$.ajax({
		type: "POST",
		url: "getgame.php",
		data:'gamename='+gamename,
		beforeSend: function(){
			// $(".loading").fadeOut(33575);
		},
		success: function(data){
			$("#play").html(data);
			$("#playGame").modal({
				backdrop:'static',
				keyboard:false,
				show:true
			});
		}
		});

}
</script>
</body>
</html>