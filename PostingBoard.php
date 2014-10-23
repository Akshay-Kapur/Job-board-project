<?php
session_start();
include 'JobsDB.php';
?>
<!DOCTYPE html>
<html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<title>
		Job Board Posts
	</title>
</head>

<body>


<!--User Login Success Message begins-->
<?php
if (isset($_SESSION['name'])) 
{


?>	

<section style="text-align: center; color: black; margin-top: 5%; font-size:20px;" > 

	<?php echo "Session is set. Hello &nbsp".$_SESSION['name'] ?>

</section>	

<!--*************************************************-->
<!-- Log-out Button -->


	<a href="logout.php" style="text-decoration: none; color: black; float: right; margin-top: 1%; margin-right: 22%;">
		<div style="width: 120px;  height: 30px; background-color: orange; border: solid red 1px; border-radius: 10px; text-align: center; margin-left: 75%;">
			<p style="font-size:18px; font-family: cursive; margin: 2px auto;"> 
				Log out
			</p>
		</div>
	</a>

<!-- Log-out Button-->
<!--*************************************************-->
<!-- Post Job Button -->
	<a href="PostJobForm.php" style="text-decoration: none; color: black;">
		<div style="width: 120px;  height: 30px; background-color: orange; border: solid red 1px; border-radius: 10px; text-align: center; margin-top: 1%; margin-left: 5%;">
			<p style="font-size:18px; font-family: cursive; margin: 2px auto;"> 
			Post a Job
			</p>
		</div>	
	</a>	
<!-- Post Job Button -->
<!--*************************************************-->

<!--User Login Success Message ends-->


<?php
}

else{

?>	

<!--*************************************************-->
<!-- Sign-in Button -->
	<a href="login.php" style="text-decoration: none; color: black; float: right; margin-top: 0; margin-right: 14%;">
		<div style="width: 120px;  height: 30px; background-color: orange; border: solid red 1px; border-radius: 10px; text-align: center;">
			<p style="font-size:18px; font-family: cursive; margin: 2px auto;"> 
			Sign in
			</p>
		</div>	
	</a>	
<!-- Sign-in Button -->
<!--*************************************************-->

<!--*************************************************-->
<!-- Post Job Button -->
	<a href="PostJobForm.php" style="text-decoration: none; color: black;">
		<div style="width: 120px;  height: 30px; background-color: orange; border: solid red 1px; border-radius: 10px; text-align: center; margin-top: 2%; margin-left: 5%;">
			<p style="font-size:18px; font-family: cursive; margin: 2px auto;"> 
			Post a Job
			</p>
		</div>	
	</a>	
<!-- Post Job Button -->
<!--*************************************************-->

<?php

}

?>







<?php
$result = getjobs ();
while($row = mysql_fetch_assoc($result))
{
?>
	<section style="float: left; margin-top: 5%; margin-left: 5%; width: 300px; height: 270px; border: solid #ff9a00 0; background-color: #ffed4c; font-family: calibri; border-radius: 5px; box-shadow: 2px 5px 5px black;">
		<table>
		<table border="0" cellpadding="10">
			<tr>
				<td width="50">
					<h4> Job Title</h4>
				</td>
				<td>
					<p> <?php echo "<a href=Job_Detail.php?id=" . $row['id'] . ">" . $row['Title'] . "</a>"; ?> </p>
					
				</td>
			</tr>
			<tr>
				<td width="50">
					<h4> Employer</h4>
				</td>
				<td>
					<p> <?php echo $row['Employer']; ?> </p>
				</td>
			</tr>
			<tr>
				<td width="50">
					<h4> Location</h4>
				</td>
				<td>
					<p> <?php echo $row['Location']; ?> </p>
				</td>
			</tr>
			<tr>
				<td colspan=2>
			</tr>
		</table>	
	</section>
	<?php 
}
?>
</body>
</html>