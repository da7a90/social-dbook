﻿<?php session_start();?>
<?php
$db = new mysqli('localhost', 'root', '', 'social');
if(isset($_POST['submit']))
{
 $email= $_POST['email'];
 $password= $_POST['password'];
 if($email == '')
	echo '	<div class="message alert"> You must enter your email &nbsp;&nbsp;&nbsp;<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
 elseif($password == '')
 	echo '	<div class="message alert">  You must enter your Password &nbsp;&nbsp;&nbsp;<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
 $sql = "SELECT  * from `user` where email='$email' and password='$password'";
 $result = $db->query($sql);
if ( $result->num_rows >0 )
{
	$sql = "SELECT  * from `user` where email='$email' and password='$password'";
$result = $db->query($sql);
	foreach($result as $row){
	if($_POST['email']==$row['email'] && $_POST['password']==$row['password'])
	{
		
	$_SESSION['id'] =	$row['id'];
	echo 	$_SESSION['id'] =	$row['id'];
	header("location:index.php");
	}}
}else{
	echo '	<div class="message alert"> Incorect email or Password &nbsp;&nbsp;&nbsp;<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login to LYK</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<script type="text/javascript" src="./js/data.min.js"></script>

<style>
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/*--start editing from here--*/
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*--end reset--*/
body {
    font-family: 'Open Sans', sans-serif;
    background: url(./images/banner.jpg)no-repeat center 0px;
    background-attachment: fixed;
	background-size: cover;
}
h1 {
    font-size: 3em;
    text-align: center;
    color: #fff;
    font-weight: 100;
}
/*-- main --*/
h2 {
    font-size: 1.1em;
    text-align: center;
    padding: 1.2em;
    background: #02a299;
    color: #fff;
    font-weight: 200;
    letter-spacing: 10px;
}
.main {
    padding: 3em 0 0;
}
h1 small{
color:rgba(12, 85, 105, 0.51);
}
.login-form {
    width: 35%;
    margin: 3.5em auto;
    background: rgba(12, 85, 105, 0.51);
    padding-bottom: 4em;
}
.agileits-top {
    padding: 2em 3em 3em;
}
.login-form input[type="text"], .login-form input[type="password"] {
    font-size: 1em;
    color: #fff;
    padding: 0.8em 1em;
    border: 0;
    width: 93%;
    border-bottom: 1px solid #c7c7c7;
    background: none;
    -webkit-appearance: none;
}
/*-- input-effect --*/
.styled-input input:focus ~ label, .styled-input input:valid ~ label {
    font-size: 1.1em;
    color: #02a299;
    top: -2em;
    -webkit-transition: all 0.125s ease;
    transition: all 0.125s ease;
}
.styled-input {
  width:100%;
  margin: 2em 0 1em;
  position: relative;
}

.styled-input label {
    color: #fff;
    padding: 0.8em 1em;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
    transition: all 0.3s ease;
    pointer-events: none;
    font-weight: 400;
    font-size: 1em;
    display: block;
    line-height: 1em;
}
.styled-input input ~ span {
  display: block;
  width: 0;
  height:2px;
  background:#fff;
  position: absolute;
  bottom: 0;
  left: 0;
  -webkit-transition: all 0.125s ease;
  transition: all 0.125s ease; 
}

.styled-input input:focus { outline: 0; }

.styled-input input:focus ~ span {
     width: 100%;
    -webkit-transition: all 0.075s ease;
      transition: all 0.075s ease;
      font-family: 'OpenSans-Regular';
} 
/*-- //input-effect --*/
.login-form p {
    font-size: 1em;
    color: #fff;
    margin: 1em 0 .5em;
}
/*-- checkbox --*/
.wthree-text input[type="checkbox"] {
    display: none;
}
.wthree-text input[type="checkbox"]+label {
    position: relative;
    padding-left: 1.8em;
    border: none;
    outline: none;
    font-size: 1em;
    color: #fff;
    cursor: pointer;
    display: block; 
}
.wthree-text input[type="checkbox"]+label span:first-child {
    width: 14px;
    height: 14px;
    border: 2px solid #fff;
    position: absolute;
    left: 0;
	top: 2px; 
}
.wthree-text input[type="checkbox"]:checked+label span:first-child:before {
    content: "";
    background: url(./images/tick.png)no-repeat;
    position: absolute;
    left: 2px;
    top: 2px;
    font-size: 10px;
    width: 10px;
    height: 10px;
}
/*-- //checkbox --*/
.wthree-text {
    margin-top: 3em;
}
.wthree-text ul li{
	display:inline-block;
	float: left;
}
.wthree-text ul li:nth-child(2) {
    float: right;
}
.wthree-text ul li a{
	font-size:1em;
    color: #fff;
}
.wthree-text ul li a:hover{
    color: #02a299;
}
.agileits-bottom{
	position:relative;
}
.agileits-bottom:before {
    content: '';
    position: absolute;
    top: -17px;
    left: -17px;
    width: 0;
    height: 0;
    border-top: 17px solid transparent;
    border-right: 18px solid #fff;
	transition:.5s all ease;
}
.agileits-bottom:after {
    content: '';
    position: absolute;
    top: -17px;
    right: -17px;
    width: 0;
    height: 0;
    border-left: 17px solid #fff;
    border-top: 17px solid transparent;
	transition:.5s all ease;
}
.agileits-bottom input[type="submit"] {
    font-size: 1.5em;
    color: #02a299;
    background: #fff;
    outline: none;
    cursor: pointer;
    padding: 1em 0;
    -webkit-appearance: none;
    border: none;
    width: 106%; 
    margin-left: -0.7em;
    text-transform: uppercase; 
}
.agileits-bottom input[type="submit"]:hover {
    color: #FFF;
    background: #02a299;
	transition:.5s all ease;
}
.agileits-bottom:hover:before {
    border-right-color:#02a299;
}
.agileits-bottom:hover:after {
	border-left-color:#02a299;
}
/*-- //main --*/
/*-- copyright --*/
.copyright {
    margin: 2em 0;
    text-align: center;
}
.copyright p {
    font-size: 1em;
    color: #fff;
	line-height:1.8em;
}
.copyright p a{
    color: #fff; 
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
	transition: 0.5s all;
}
.copyright p a:hover{
    color: #000;	
}
/*-- //copyright --*/
/*-- responsive-design --*/
@media(max-width:1440px){
.agileits-bottom input[type="submit"] { 
    width: 106.8%; 
}
}
@media(max-width:1366px){
.login-form {
    width: 37%; 
	margin: 3em auto;
}
}
@media(max-width:1280px){
.login-form {
    width: 40%; 
}
}
@media(max-width:1080px){
.main {
    padding: 2em 0 0;
}
.login-form {
    width: 48%;
}
h1 {
    font-size: 2.8em; 
}
}
@media(max-width:1024px){
h1 {
    font-size: 2.6em;
}
.login-form {
    width: 50%;
    margin: 2em auto;
}
}
@media(max-width:991px){
h1 {
    font-size: 2.5em;
}
.login-form {
    width: 52%; 
}
}
@media(max-width:900px){
.agileits-top {
    padding: 1em 3em 3em;
}
.login-form { 
	width: 56%;
    padding-bottom: 3.5em;
}
}
@media(max-width:800px){
.login-form {
    width: 63%; 
}
.agileits-top {
    padding: 1em 2.5em 2.5em;
}
.agileits-bottom input[type="submit"] {
    font-size: 1.3em; 
    margin-left: -0.8em; 
}
}
@media(max-width:768px){
h1 {
    font-size: 2.3em;
}
.agileits-bottom input[type="submit"] {
    width: 107%;
} 
} 
@media (max-width: 736px){
.agileits-bottom input[type="submit"] {
    width: 107.5%;
} 
} 
@media(max-width:667px){
.agileits-bottom input[type="submit"] {
    width: 108%;
    font-size: 1.1em;
    margin-left: -0.9em;
}
} 
@media(max-width:640px){
.login-form {
    width: 67%;
}
.agileits-bottom input[type="submit"] {
    width: 108%;
}
}
@media(max-width:600px){
.agileits-bottom input[type="submit"] {
    width: 108.7%;
}
}
@media(max-width:480px){
h1 {
    font-size: 1.8em;
}
h2 {
    font-size: 1em; 
    padding: 1em; 
    letter-spacing: 7px;
}
.agileits-top {
    padding: 1em 1.5em 1.5em;
}
.login-form input[type="text"], .login-form input[type="password"] {
    font-size: 0.9em; 
    padding: 0.6em 1em; 
    width: 93%; 
}
.styled-input label { 
    padding: 0.6em 1em; 
    font-size: 0.9em; 
}
.styled-input input:focus ~ label, .styled-input input:valid ~ label {
    font-size: 1em; 
	top: -1.5em;
}
.wthree-text {
    margin-top: 2em;
}
.wthree-text input[type="checkbox"]+label { 
    font-size: 0.9em; 
	padding-left: 1.5em;
}
.wthree-text input[type="checkbox"]+label span:first-child {
    width: 12px;
    height: 12px; 
}
.wthree-text ul li a {
    font-size: 0.9em; 
}
.agileits-bottom input[type="submit"] {
    font-size: 1em;
    margin-left: -0.6em;
    width: 105.3%;
    padding: 0.8em 0;
}
.login-form { 
    padding-bottom: 3em;
}
.login-form {
    width: 80%;
}

.copyright p {
    font-size: 0.9em; 
}
.agileits-bottom:before { 
    top: -11px;
    left: -11px; 
    border-top: 11px solid transparent;
    border-right: 11px solid #fff; 
}
.agileits-bottom:after { 
    top: -11px;
    right: -11px; 
    border-left: 11px solid #fff;
    border-top: 11px solid transparent; 
}
.wthree-text input[type="checkbox"]:checked+label span:first-child:before { 
    left: 1px;
    top: 1px; 
}
}
@media(max-width:414px){
.main {
    padding: 1.5em 0 0;
}
.styled-input { 
    margin: 1.5em 0 1em; 
}
.copyright p { 
    padding: 0 1em;
}
.agileits-bottom:before {
    top: -10px;
    left: -10px;
    border-top: 10px solid transparent;
    border-right: 10px solid #fff;
}
.agileits-bottom:after { 
    top: -10px;
    right: -10px;
    border-left: 10px solid #fff;
    border-top: 10px solid transparent; 
}
.agileits-bottom input[type="submit"] { 
    width: 106%; 
}
}
@media(max-width:384px){
.agileits-bottom input[type="submit"] {
    width: 106.8%;
    font-size: 0.9em;
    margin-left: -0.7em;
}
}
@media(max-width:375px){
.agileits-bottom input[type="submit"] {
    width: 106.5%;
    margin-left: -0.6em;
}
h1 {
    font-size: 1.6em;
}
h2 { 
    letter-spacing: 5px;
}
.login-form { 
    margin: 1.5em auto;
}
.wthree-text ul li { 
    float: none;
    display: block;
}
.wthree-text ul li:nth-child(2) {
    float: none;
    margin-top: 1em;
}
.wthree-text {
    margin-top: 1.5em;
}
}
@media(max-width:320px){
h2 {
    letter-spacing: 3px;
    padding: 0.8em;
}
.login-form {
    width: 85%;
}
.agileits-top {
    padding:0.5em 1em 1.5em;
}
.login-form input[type="text"], .login-form input[type="password"] {
    font-size: 0.85em;
    padding: 0.6em;
    width: 88%;
}
.styled-input label {
    padding: 0.6em;
    font-size: 0.85em;
}
.styled-input input:focus ~ label, .styled-input input:valid ~ label {
    font-size: 0.9em;
    top: -1em;
}
.login-form {
    padding-bottom: 2em;
}
.agileits-bottom input[type="submit"] {
    width: 107%;
    margin-left: -0.6em;
}
}
/*-- //responsive-design --*/

.message{
	display:inline-block;
	background:rgba(12, 85, 105, 0.51);
	border:green solid 1px;
	height:55px;
	color:red;
	margin:10px;
	position:absolute;
	margin-left:12px;
	border-radius:5px;
}

</style>
</head>
<body>



	<div class="alert  col-md-3 col-md-push-9" style="postion:absolute;" >
	<div class="alert  col-md-12 " style="postion:absolute; margin:12px; float:right; background:rgba(12, 85, 105, 0.51);color:#fff;"><button type="button"  class="close" data-dismiss="alert" aria-label="Close"><span style="color:red;" aria-hidden="true">&times;</span></button>E-mail:<strong> mike@mike.com</strong><br>Password: <strong>mike</strong></div>
	<div class="alert  col-md-12 " style="postion:absolute; margin:12px; float:right; background:rgba(12, 85, 105, 0.51);color:#fff;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>E-mail:<strong> moun@moun.com</strong><br>Password: <strong>moun</strong></div>
	<div class="alert  col-md-12 " style="postion:absolute; margin:12px; float:right; background:rgba(12, 85, 105, 0.51);color:#fff;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>E-mail:<strong> sidahmed@sidahmed.com</strong><br>Password: <strong>sidahmed</strong></div>
	</div>
	<!-- main -->

	<div class="main"> 
	<center><h1>Da7aBook<small><sup>&trade;</sup></small></h1></center>

		<div class="login-form"> 
			<h2>Login To Da7aBook</h2> 
			<div class="agileits-top">
				<form action="" method="post">
					<div class="styled-input">
						<input type="text" name="email" required=""/>
						<label>E-mail</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="password" name="password" required=""> 
						<label>Password</label>
						<span></span>
					</div> 
					<div class="wthree-text"> 
						<ul> 
							<li>
								<input type="checkbox" id="brand" value="">
								<label for="brand"><span></span> Remember me ?</label>  
							</li>
							<li> <a href="forgot.php">Forgot password?</a> </li>
						</ul>
						<div class="clear"> </div>
					</div>  
				
			</div>
			<div class="agileits-bottom">
				
					<input type="submit" name="submit" value="Log In">
				</form>
			</div>	
		</div>	
	</div>	
	<!-- //main -->
	<!-- copyright -->
	
	<div class="copyright">
		<p> Copyrights 2018 @  Da7acodes . All rights reserved  </p>
		<!-- <p> © 2018 Badge Sign In Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p> -->
	</div>
	
	<!-- //copyright -->
</body>
</html>