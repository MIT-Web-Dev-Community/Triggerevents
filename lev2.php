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
	    if(!empty($ans) && $ans=="1")
        {
				header('Refresh: 3; url=level2.php');
                $r=mysqli_query($bd,"Select level from triggeruser where uname='$un'");
				$row=mysqli_fetch_assoc($r)
				$lev=$row['level']+1;
				$r=mysqli_query($bd,"Update triggeruser set level='$lev' where uname='$un'");	
				echo '<center><h1>Correct Answer! Loading Next question</h1></center>';
	    }
        else
		{
			echo '<center><h1>Incorrect Answer!! Try Again!!</h1></center>';
			header('Refresh: 3; url=level1.php');
		}
?>	