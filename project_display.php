<html>
	<head>
	<title>Display Page</title>
		<style>
			header
			{
				float:left;
				width:100%;
			}
			h1
			{
				float:left;
				color:white;
				text-shadow:5px 5px grey;
				width:55%;
				padding-left:24%;
				margin-bottom:80px;
				box-sizing:border-box;
				border:0px solid red
			}
		</style>
	</head>
	<header>
		<h1>DRIVER DETAILS</h1>
		<?php include "navigation.html";?>
	</header>
	<body style="background-color:black;color:white">
<?php

	$con=mysqli_connect("localhost","root","","driver24x7");
	if(!$con)
		die("cannot connect to server");
	else
	{
		$location=$_GET["location"];
		$query="select * from driver_details where darea ='".$location."'";//fetching from database
		$rs=mysqli_query($con,$query);
		if(mysqli_num_rows($rs)>0)
		{
			echo "<table border='1px' align='center' cellpadding='15px' cellspacing='0px'>";
			echo "<tr><th>NAME</th><th>LOCATION</th><th>CONTACT</th>";
			echo "<th>LICENCE NUMBER</th><th>YEARS OF EXPERIENCE</th></tr>";
			while($row=mysqli_fetch_array($rs))
			{
				echo "<tr align='center'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
			}
			echo "</table>";
		}
		else
			include "message.html";
	}
?>
</body>
</html>