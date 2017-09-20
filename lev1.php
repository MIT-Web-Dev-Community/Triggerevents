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
				header('Refresh: 5; url=level2.php');
				echo '<center><h1>Correct Answer!! Loading Next Question</h1></center>';
                $r=mysqli_query($bd,"Select level from triggeruser where uname='$un'");
				$row=mysqli_fetch_assoc($r);
				$lev=$row['level']+1;
				$_SESSION['lev']=$lev;
				$r=mysqli_query($bd,"Update triggersuser set level='$lev' where uname='$un'");
				
	    }
        else
		{
			header('Refresh: 3; url=level1.php');
			echo '<center><h1>InCorrect Answer! Try Again</h1></center>';			
		}
?>	