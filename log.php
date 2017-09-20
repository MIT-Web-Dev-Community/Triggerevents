<?php
session_start();
$mysql_hostname = "mysql.csmit.org";
$mysql_user = "prayatna_user";
$mysql_password = "qd5egqd5";
$mysql_database = "prayatna_db";
$prefix = "";
$bd = @mysqli_connect($mysql_hostname, $mysql_user,$mysql_password) or die("Could not connect database");
mysqli_select_db($bd,$mysql_database) or die("<h1>Could not select database<h1>");
      $use=$_POST['us'];
      $pas=$_POST['pa'];
      $r=mysqli_query($bd,"select * from triggeruser where rno='$use' && password='$pas'");
      if(mysqli_num_rows($r)==1)
      {	
			header('Refresh: 3; url=level1.php');
			$ra=mysqli_query($bd,"Select level from triggeruser where rno='$use'");
				$row=mysqli_fetch_assoc($ra);
				$lev=$row['level'];
				$_SESSION['lev']=$lev;
				$_SESSION['us']=$use;
           echo '<center><h1>Successfully logged in!</h1></center>';
      }
      else	
      {
		  header('Refresh: 3; url=login.php');
	echo '<center><h1>Wrong Username or password!!!</h1></center>';
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