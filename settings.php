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
            <li style="margin-right:12px;margin-left:4px"><a href="notification.php"><i class="fa fa-bell-o"></i> Notification <sup id="noti" style="display:none;"><i ><sup class="noti-red"></sup></i></sup></a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="pages.php"><i class="fa fa-copy"></i> Pages </a></li>
            <li style="margin-right:12px;margin-left:4px"><a href="groups.php"><sup><i class="glyphicon glyphicon-user"></i></sup><i class="glyphicon glyphicon-user"></i><sup><sup><i class="glyphicon glyphicon-user"></i></sup></sup> &nbsp; Groups </a></li>			
            <li style="margin-right:12px;margin-left:4px"><a href="games.php"><i class="fa fa-gamepad"></i> Games </a></li>
            <li style="margin-right:12px;margin-left:4px;border-bottom:2px solid #428bca;"><a href="settings.php"><i class="fa fa-gear"></i> Settings </a></li>
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
           <a class="btn btn-default" style="color:#000; background:#428bca;border:1px solid rgba(0,0,0,.2); " href="games.php"><i class="fa fa-gamepad"></i>  </a>
           <a class="btn btn-default" style="color:#fff; background:#428bca; border:1px solid rgba(0,0,0,.2); " href="settings.php"><i class="fa fa-gear"></i>  </a>
    </div>
<div class="container" style="margin-top:16px;">
<div class="row">
<div class="col-md-8">
<div class="col-md-12 white">
<div class="list-group">
                                <a data-toggle="collapse" href="#general" class="list-group-item">
                                    <i class="fa fa-cogs"></i> General 
                                    <span class="pull-right">  <i id="chevron" class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
							</div>	
<div class="collapse" id="general">
   <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <span class="pull-right"><i class="fa fa-chevron-right"></i></span>

								<i class="fa fa-user" style="color:#fb330c;"></i><b> Name </b><span style="display:block; padding-left:2%;"><small><?php echo $name;?></small>
                                    </span>
                                </a>
								<a href="#" class="list-group-item">
                                    <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
								<i class="fa fa-envelope" style="color:#d78317;"></i><b> Email Address </b><span style="display:block; padding-left:2%;"><small><?php echo $email?></small>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
								<i class="fa fa-lock"  style="color:#d717c3;"></i><b> Password </b><span style="display:block; padding-left:2%;"><small>**********</small>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
								<i class="fa fa-mobile-phone" style="color:#acd717;"></i><b> Mobile Number </b><span style="display:block; padding-left:2%;"><small>click here to add</small>
                                    </span>
                                </a>
								<a href="#" class="list-group-item">
                                    <span class="pull-right"><i  class="fa fa-chevron-right red"></i></span>
								<i class="fa fa-map-marker " style="color:#a91201;"></i><b> Location </b><span style="display:block; padding-left:2%;"><small><?php echo $location;?></small>
                                    </span>
                                </a>
								<a href="#" class="list-group-item">
                                    <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
								<i class="fa fa-language blue"></i><b> Language </b><span style="display:block; padding-left:2%;"><small>English</small>
                                    </span>
                                </a>
                                

</div>
</div>

<div class="list-group">
                                <a data-toggle="collapse" href="#security" class="list-group-item" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="security">
                                    <i class="fa fa-shield"></i> Security 
                                    <span class="pull-right">  <i id="chevron2" class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
							</div>	
<div class="collapse" id="security">
<div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-sign-in"></i> <b>Login Alert</b>
                                    <span class="pull-right">  <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-clock-o"></i> <b>Recent Login</b>
                                    <span class="pull-right">  <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-desktop"></i> <b>Recent Devices</b>
                                    <span class="pull-right">  <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                                
</div>
</div>
  
  

<div class="list-group">
                                <a data-toggle="collapse" href="#privacy" class="list-group-item" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="privacy">
                                   <i class="fa fa-lock"></i> Privacy 
                                    <span class="pull-right">  <i id="chevron1" class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
							</div>	
<div class="collapse" id="privacy">


<div class="list-group">
                                <a href="#" class="list-group-item">
                                 <span class="pull-right">  <i class="fa fa-chevron-right"></i></span>
								 <b> Who can see Your Posts? </b><span style="display:block; padding-left:2%;"><i class="fa fa-globe" ></i><small>  &nbsp;Public</small>
                                </a>
                                 <a href="#" class="list-group-item">
                                 <span class="pull-right">  <i class="fa fa-chevron-right"></i></span>
								 <b> Who can Follow or Send Friend request </b><span style="display:block; padding-left:2%;"><i class="fa fa-globe" ></i><small>  &nbsp;Public</small>
                                </a>
								 <a href="#" class="list-group-item">
                                 <span class="pull-right">  <i class="fa fa-chevron-right"></i></span>
								 <b> Who can Add to groups </b><span style="display:block; padding-left:2%;"><i class="fa fa-users" ></i><small>  &nbsp;Friens only</small>
                                </a>
								<a href="#" class="list-group-item">
                                 <span class="pull-right">  <i class="fa fa-chevron-right"></i></span>
								 <b> Who can Download My Profile pics </b><span style="display:block; padding-left:2%;"><i class="fa fa-users" ></i><small>  &nbsp;Friens only</small>
                                </a>
                                
</div>
</div>


<div class="list-group">
                                <a data-toggle="collapse" href="#timeline" class="list-group-item" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="timeline">
                                   <i class="fa fa-newspaper-o"></i> Timeline 
                                    <span class="pull-right">  <i id="chevron1" class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
							</div>	
<div class="collapse" id="timeline">


<div class="list-group">
                                <a href="#" class="list-group-item">
                                 <span class="pull-right">  <i class="fa fa-chevron-right"></i></span>
								 <b> Who can Post Your timeline </b><span style="display:block; padding-left:2%;"><i class="fa fa-users" ></i><small>  &nbsp;Friends</small>
                                </a>
                                 <a href="#" class="list-group-item">
                                 <span class="pull-right">  <i class="fa fa-chevron-right"></i></span>
								 <b> Who can Tagged or Mention Your name </b><span style="display:block; padding-left:2%;"><i class="fa fa-globe" ></i><small>  &nbsp;Public</small>
                                </a>
								 
                                
</div>


</div>
  
  
<div class="list-group">
                                <a data-toggle="collapse" href="#notification" class="list-group-item" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="notification">
                                   <i class="fa fa-bell-o"></i> Notification 
                                    <span class="pull-right">  <i id="chevron1" class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
							</div>	
<div class="collapse" id="notification">


<div class="list-group">
                                <a href="#" class="list-group-item">
                                 <span class="pull-right">  <i class="fa fa-chevron-right"></i></span>
								 <b> On LYK</b><span style="display:block; padding-left:2%;"><i class="fa fa-users" ></i><small>  &nbsp;Friends Post, &nbsp;&nbsp;&nbsp;<i class="fa fa-line-chart" ></i> Trending</small></span>
                                </a>
                                 <a href="#" class="list-group-item">
                                 <span class="pull-right">  <i class="fa fa-chevron-right"></i></span>
								 <b> On Mail </b><span style="display:block; padding-left:2%;"><i class="fa fa-check-circle" ></i><small>  &nbsp;Allow</small></span>
                                 </a>
								 <a href="#" class="list-group-item">
                                 <span class="pull-right">  <i class="fa fa-chevron-right"></i></span>
								 <b> On SMS</b><span style="display:block; padding-left:2%;"><i class="fa fa-check-circle" ></i><small>  &nbsp;Allow</small></span>
                                 </a>
								 
                                
</div></div>
  
<div class="list-group">
                                <a data-toggle="collapse" href="#alert" class="list-group-item" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="alert">
                                   <i class="fa fa-bullhorn"></i> Alert 
                                    <span class="pull-right">  <i id="chevron1" class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
							</div>	
<div class="collapse" id="alert">


<div class="list-group">

								 
                                <a href="#" class="list-group-item">
								<i class="fa fa-gift" ></i> <b> Birthday Alert</b><span style="display:block; padding-left:2%;">
								<i class="fa fa-toggle-on" style="color:#2ae22e;" ></i><small>  &nbsp;On &nbsp;&nbsp;&nbsp;</small></span>
                                </a>
								<a href="#" class="list-group-item">
								<i class="fa fa-user-times" ></i> <b> Unfriend Alert</b><span style="display:block; padding-left:2%;">
								<i class="fa fa-toggle-on" style="color:#2ae22e;" ></i><small>  &nbsp;On &nbsp;&nbsp;&nbsp;</small></span>
                                </a>
								<a href="#" class="list-group-item">
								<i class="fa fa-list-alt" ></i> <b>  Your Post Activity</b><span style="display:block; padding-left:2%;">
								<i class="fa fa-toggle-on" style="color:#2ae22e;" ></i><small>  &nbsp;On &nbsp;&nbsp;&nbsp;</small></span>
                                </a>

</div>
</div>
    
<div class="list-group">
                                <a data-toggle="collapse" href="#blocking" class="list-group-item" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="alert">
                                   <i class="fa fa-minus-circle"></i> Blocking 
                                    <span class="pull-right">  <i id="chevron1" class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
							</div>	
<div class="collapse" id="blocking">


<div class="list-group">

								 
                      <center>
					  <div class="row"><div class="col-md-6 col-md-offset-3">
 <div class="input-group"><div class="input-group-btn"><button class="btn btn-default"><i class="fa fa-user"></i> </button></div>
                                      <input type="text" class="form-control" name="comment" id="comment" placeholder="Type the user name"><div class="input-group-btn">
									  <input type="submit" class="btn  comt " id="add" value="Block"></div>
                                      </div>
                                      </form>
 </div>
					  </center>          
								</div>
		<hr>	None User you Blocked					

</div>
</div>
</div>

	




  

							




<div class="col-md-4 hidden-xs hidden-sm">
<div style="" class="col-md-12 white">
<h5 align="center">Recent<hr></h5>
<div class="list-group recent-list">


		</div>

</div>
</div>                   
                       
</div>

</div>

</div>
</div>
<script type="text/javascript" src="./js/data.min.js"></script>
<?php include("commonFunction.php");?>
<script>
$(".list-group-item").click(function(){

	$(this).toggleClass("blue");
	$("#chevron,#chevron1,#chevron2").toggleClass("fa-chevron-down");
});
</script>
</body>
</html>