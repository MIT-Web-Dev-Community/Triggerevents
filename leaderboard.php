<?php
session_start();
$mysql_hostname = "mysql.csmit.org";
$mysql_user = "prayatna_user";
$mysql_password = "qd5egqd5";
$mysql_database = "prayatna_db";
$prefix = "";
$bd = @mysqli_connect($mysql_hostname, $mysql_user,$mysql_password) or die("Could not connect database");
mysqli_select_db($bd,$mysql_database) or die("<h1>Could not select database<h1>");

					$r=mysqli_query($bd,"select * from triggeruser ORDER BY level desc,time");
					?>
<html>
<head>
<title>leadership board</title>
<style>
body {
                background-image: url("images/background.jpg");
				width: 100%;
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
th {
width: 250px;
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
				<td  class='menu'>&nbsp;<a style="color: white" href='leaderboard.php'>LeaderBoard</a></td> 
				<td  class='menu'>&nbsp;<a style="color: white" href='Change.php'>Back to Questions</a></td>      
				</tr>
				</tr>
				</tbody>
			</table>			
		</div>
<center>		
<table style="color: black" cellpadding='20'  border=2 cellspacing='8'>
		<tr>
					<th height='50'>Username</th>
					<th>Score</th>
					</tr>
<?php
					while($row=mysqli_fetch_assoc($r))
					{
						echo "<tr>";
						echo "<td height='50' style='width:100px'>".$row['rno']."</td>";
						echo "<td>".(($row['level']-1)*10)."</td>";
						echo "</tr>";	
					}
?>
</table>
</center>
</body>
</html>