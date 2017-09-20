<?php
session_start();
	if(empty($_SESSION['us']))
	{
		header("Location:level1.php");
	}
	else if($_SESSION['lev']!=24)
	{
		$page="Location:level".$_SESSION['lev'].".php";
		header($page);
	}
?>