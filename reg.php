<?php
session_start();
$mysql_hostname = "mysql.csmit.org";
$mysql_user = "prayatna_user";
$mysql_password = "qd5egqd5";
$mysql_database = "prayatna_db";
$prefix = "";
$bd = @mysqli_connect($mysql_hostname, $mysql_user,$mysql_password) or die("Could not connect database");
mysqli_select_db($bd,$mysql_database) or die("<h1>Could not select database<h1>");
	$user=$_POST['re'];
	$pass=$_POST['na'];
	$mai=$_POST['ma'];
	$pho=$_POST['ph'];
    $fla=1;
	$reg=$_POST['reg1'];
	header('Refresh: 5; url=register.php');
	    if(empty($user) || empty($pass) || empty($mai) || empty($pho) || empty($reg) || (strlen($reg)!=10) || (strlen($pho)!=10))
        {
                $fla=0;
        }
        if($fla!=0)
        {
			$da=date("Y-m-d H:i:s");
	    $r=mysqli_query($bd,"INSERT INTO triggeruser VALUES('$user','$pass','$mai','$pho','$fla','$reg','$da')");
	    if($r)
	    {	
               	echo '<center><h1>Successfully Registered!!</h1></center>';
		echo '<center><h2>Wait while you are forwarded....</h2></center>'; 	
	    }
          else
		echo '<center><h1>Not Registered Try Again!!</h1></center>';
       
        }
	else
		echo '<center><h1>Invalid User Input!!</h1></center>';
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