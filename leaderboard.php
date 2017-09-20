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
					echo "<table border=2 cellspacing='8'>";
					echo "<tr>";
					echo "<th height='50'>Username</th>";
					echo "<th>Score</th>";
					echo "</tr>";
					while($row=mysqli_fetch_assoc($r))
					{
						echo "<tr>";
						echo "<td height='50' style='width:100px'>".$row['rno']."</td>";
						echo "<td>".(($row['level']-1)*10)."</td>";
						echo "</tr>";	
					}
					echo "</table>";
?>