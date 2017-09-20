<?php
session_start();
$mysql_hostname = "mysql.csmit.org";
$mysql_user = "prayatna_user";
$mysql_password = "qd5egqd5";
$mysql_database = "prayatna_db";
$prefix = "";
$bd = @mysqli_connect($mysql_hostname, $mysql_user,$mysql_password) or die("Could not connect database");
mysqli_select_db($bd,$mysql_database) or die("<h1>Could not select database<h1>");
      header('Refresh: 5; url=level1.php');
      $use=$_POST['us'];
      $pas=$_POST['pa'];
      $r=mysqli_query($bd,"select * from triggeruser where uname='$use' && password='$pas'");
      if(mysqli_num_rows($r)==1)
      {	
			$_SESSION['us']=$use;
           echo '<center><h1>Successfully logged in!</h1></center>';
      }
      else	
      {
	echo '<center><h1>Wrong Username or password!!!</h1></center>';
      }
?>						
