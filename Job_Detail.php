<?php
include 'JobsDB.php';	
$id=$_GET['id'];
?>	

<!DOCTYPE html>
<html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<title>
		Job Details
	</title>
</head>

<body>
<?php
$result = getjob($id);
$row = mysql_fetch_assoc($result);
?>

<style>
h4 {
	font-family: cursive;
	font-size: 15px;
	font-weight: 5px;
}
p{

}
</style>
<!--

-->
	<section style="text-align:center;">
		<table border="2" cellpadding="5" style="margin:5% 20%; background-color: #ffdd5c; font-family: calibri; border-radius: 10px; box-shadow: 2px 5px 5px black;">
			<tr>
				<th colspan=2>
					<h1 style="text-align: center;"> <?php echo $row['Title']; ?></h1>
				</th>
			</tr>
			<tr>
				<td width="200">
					<h4> Employer</h4>
				</td>
				<td width="600">
					<p><?php echo $row ['Employer']; ?></p>
				</td>
			</tr>
			<tr>
				<td >
					<h4> Job description</h4>
				</td>
				<td height="400">
					<p><?php echo $row ['Job_Description']; ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<h4> Salary</h4>
				</td>
				<td>
					<p><?php echo $row ['Salary']; ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<h4> Location</h4>
				</td>
				<td>
					<p><?php echo $row ['Location']; ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<h4> Minimum Qualification</h4>
				</td>
				<td height="250">
					<p><?php echo $row ['Qualifications']; ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<h4> Website</h4>
				</td>
				<td height="250">
					<p><?php echo $row ['website']; ?></p>
				</td>
			</tr>
		</table>
	</section>	
</body>
