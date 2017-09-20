<?php
session_start();
$mysql_hostname = "mysql.csmit.org";
$mysql_user = "prayatna_user";
$mysql_password = "qd5egqd5";
$mysql_database = "prayatna_db";
$prefix = "";
$bd = @mysqli_connect($mysql_hostname, $mysql_user,$mysql_password) or die("Could not connect database");
mysqli_select_db($bd,$mysql_database) or die("<h1>Could not select database<h1>");
	$ans=$_POST['re'];
	$un=$_SESSION['us'];
	$ans=strtolower($ans);
	$ans=preg_replace('/\s+/','',$ans);
	    if(!empty($ans) && $ans=="margotrobbie")
        {
				header('Refresh: 3; url=leaderboard.php');
        }
        else
		{
			header('Refresh: 3; url=level25.php');
			echo '<center><h1>Incorrect Answer!! Try Again!!</h1></center>';
		}
?>	
<html>
	<head>
		<style>
		body
			{
				background-image: url("images/processing.gif");
    height: 50%; 

    background-position: center;
    background-repeat: no-repeat;
			}
		</style>
	</head>
	<body>
		
	</body>
</html>
