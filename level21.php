<?php
	session_start();
	if(empty($_SESSION['us']))
	{
		header("Location:level1.php");
	}
	else if($_SESSION['lev']!=21)
	{
		$page="Location:level".$_SESSION['lev'].".php";
		header($page);
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<title>Trigger'17</title>
		<link rel="shortcut icon" href="favicon.ico"/>
		<style>
			body
			{
				background-color:#ECECEA;
				width:100%;
				background-image: url("images/background1.jpg");
			}
			#scr
			{
				font-size:2em;
				color:#FFFFFF;
			}
			#top
			{
				margin-top:5%;
			}
			#r,#u,#d,#s
			{
				background-color:#4A96AD;
				
			}
			#r:hover,#u:hover,#d:hover,#s:hover
			{
				color:#000000;
				background-color:#ECECEA;
			}
			#forms
			{
				margin-top:0%;
				margin-left:25%;
			}
			#reg,#nam,#mai,#pho,#dep
			{
				width:100%;
				padding:10px 20px;
			}
			#sub
			{
				width:100%;
				margin-left:10%;
				background:#7E8F7C;
			}	
			#reg:focus,#nam:focus,#mai:focus,#pho:focus,#dep:focus
			{
				border-color:#E44424;
			}
			.menu{ font-family: Arial, Helvetica, sans-serif; font-size:12px; color:black; font-weight:bold; padding-top:5px; text-decoration:none;}
.menu:hover { color:#CC3; text-decoration:overline;}
.menu a
{
 color:black;
 font-size:15px;
 text-decoration:none;
}
.button
{
cursor:hand;
border-radius:5px;
color:rgb(248,248,238);
width:80px;
background-color:rgba(205,55,44,1);
padding:4px 5px;
font-size:16px;
}

		</style>
	</head>
	<body>
		<div style="margin: 0px auto auto auto;width:100%;min-height:600px;">
			<div style="height:75px;background:black;filter:alpha(opacity=20);;background:black;">

			<table  width="100%" border="0" cellspacing="0" cellpadding="0" align="right" style="margin-top:0px">
				  <tbody><tr>
					<td >&nbsp;&nbsp;&nbsp;<a href="index.html">
					
			<img src="images/trigger2017.JPG" width="80" height="75"> </a></td>
					<td    width="200px" class="menu">&nbsp;<a style="color: white" href="index.html">Home</td>
				<td  class='menu'>&nbsp;<a style="color: white" href='leaderboard.php'>Leaderboard</a></td>      </tr>
				</tbody>
			</table>			
		</div>
		<div class="container-fluid">
			<div id="mar">
				<center><h2 id="scr">&nbsp;&nbsp;&nbsp;Question 21</h2></center>
			</div>
			<div id="forms">
				<form method="post" action="lev21.php">
					<img src="images/21.jpg" width="100%" height="300"><br><br>
					<input id="reg" name="re" type="text" placeholder="Your Answer" title="Answer" required><br><br>
					<input type="submit" name="submit" id="sub"  value="Submit"></input>
				</form>
			</div>
		</div>
	</body>
</html>	
