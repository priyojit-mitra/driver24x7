<!DOCTYPE html>
<html>
	<head>
		<title>PROJECT LAYOUT</title>
		<meta charset="utf-8">
		<link href="projectstyle.css" rel="stylesheet">
	</head>
	<body>
	<form method="post" action="project_layout1.php">
		<div class="main">
			<header>
				<h1>"DRIVER 24x7"</h1>
				<?php include "navigation.html";?>
			</header>
			<section>
				<article>
					<h2>"BOOK A DRIVER"</h2>
					<p>
<pre>
EMERGENCY?????????
NEED A DRIVER??????????
YOU ARE SEARCHING AT THE RIGHT PLACE...........

<label>ENTER YOUR LOCATION...</label>
			<select name="loc1" id="lc1">
				<option value="KOLKATA">KOLKATA</option>
				<option value="DELHI">DELHI</option>
				<option value="MUMBAI">MUMBAI</option>
				<option value="BANGALORE">BANGALORE</option>
				<option value="CHENNAI">CHENNAI</option>
				<option value="JAIPUR">JAIPUR</option>
				<option value="AGRA">AGRA</option>
				<option value="BHUBANESWAR">BHUBANESWAR</option>
				<option value="LUCKNOW">LUCKNOW</option>
				<option value="PUNE">PUNE</option>
				<option value="RANCHI">RANCHI</option>
				<option value="SILIGURI">SILIGURI</option>
				<option value="HYDERABAD">HYDERABAD</option>
				</select>
				
<label>ENTER MOBILE NUMBER...</label>
			<input type="text" name="t1" id="id1" value="" placeholder="enter number....">		

			
			<input type="button" name="btn1" id="b1" value="CHECK AVAILABILITY" onclick="check()">	

</pre>					
					</p>
				</article>
				
				<aside>
					<h2>"REGISTER AS A DRIVER"</h2>
					<p>
<pre>
ARE YOU A PROFESSIONAL DRIVER????????
REGISTER HERE AND DRIVE ON................
NEVER MISS OUT A SINGLE DAY....................

<label>ENTER YOUR NAME...</label>
			<input type="text" name="t2" id="id2" value="" placeholder="enter name....">

<label>ENTER YOUR LOCATION...</label>
			<select name="loc2" id="lc2">
				<option value="KOLKATA">KOLKATA</option>
				<option value="DELHI">DELHI</option>
				<option value="MUMBAI">MUMBAI</option>
				<option value="BANGALORE">BANGALORE</option>
				<option value="CHENNAI">CHENNAI</option>
				<option value="JAIPUR">JAIPUR</option>
				<option value="AGRA">AGRA</option>
				<option value="BHUBANESWAR">BHUBANESWAR</option>
				<option value="LUCKNOW">LUCKNOW</option>
				<option value="PUNE">PUNE</option>
				<option value="RANCHI">RANCHI</option>
				<option value="SILIGURI">SILIGURI</option>
				<option value="HYDERABAD">HYDERABAD</option>
				</select>
				
<label>ENTER MOBILE NUMBER...</label>
			<input type="text" name="t3" id="id3" value="" placeholder="enter mobile number....">

<label>ENTER LICENCE NUMBER...</label>
			<input type="text" name="t4" id="id4" value="" placeholder="enter driving licence no....">
			
<label>ENTER YEARS OF EXPERIENCE...</label>
			<input type="text" name="t5" id="id5" value="" placeholder="enter experience....">

			
			<input type="submit" name="btn2" id="b2" value="REGISTER NOW">

<pre>
					</p>
				</aside>
				
				
			</section>
			<footer>
				<p>
				Copyright &copy; 2017 Driver 24x7. All rights reserved.
				</p>
			</footer>
		</div>
		</form>
		<?php
			if(isset($_POST["btn2"]))
			{
				$name=$_POST["t2"];
				$location=$_POST["loc2"];
				$mobile=$_POST["t3"];
				$licence=$_POST["t4"];
				$year=$_POST["t5"];
				
				include("connect2.php");
				$query="insert into driver_details(dname,darea,dmobile,dlicence,dyear)
				values('".$name."','".$location."','".$mobile."','".$licence."',".$year.")";
				$n=mysqli_query($con,$query);
				if($n=1)
					echo "<script>alert('Registration Successful')</script>";
			}
		?>
		<script>
		function check()
		{
			var a=document.getElementById("lc1").value;
			window.location.href="project_display.php?location="+a;
		}
		</script>
		
	</body>
</html>