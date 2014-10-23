<?php

include 'JobsDB.php';	
$title=$_GET['job_title'];
$salary=$_GET['job_salary'];
$jobdesc=$_GET['job_desc'];
$location=$_GET['job_location'];
$qualification=$_GET['job_qual'];
$employer=$_GET['job_employer'];
$website=$_GET['job_website'];

addjob ($title , $salary , $jobdesc , $location , $qualification , $employer , $website);

?>



<!DOCTYPE html>
<html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<title>
		Job Form-Fill
	</title>
</head>

<body>

<!--Form Begins-->
<form> 
<!--  action='PostingBoard1.php'-->
<!--Table Begins-->
<table>
	<tr>
		<td width="200">
			<h4 class= "form_sections" style="display: inline;"> Job Title</h4>
		</td>
		<td>
			<input type= "text" placeholder="Job title" name="job_title"></tr>
		</td>
	</tr>
	<tr>
		<td>	
			<h4 class= "form_sections" style="display: inline;">  Salary</h4>
		</td>
		<td>	
			<input type= "text" placeholder="annual salary(in $)" name="job_salary">
		</td>
	</tr>
	<tr>
		<td>	
			<h4 class= "form_sections" style="display: inline;">  Job Description</h4>
		</td>
		<td>	
			<input type= "text" placeholder="Describe Job roles and responsibilities" name="job_desc" style="height:200px; width:400px;">
		</td>
	</tr>
	<tr>
		<td>		
			<h4 class= "form_sections" style="display: inline;"> Work Location</h4>
		</td>
		<td>	
			<input type= "text" placeholder="Work Location" name="job_location">
		</td>
	</tr>	
	<tr>
		<td>	
			<h4 class= "form_sections" style="display: inline;">  Employer</h4>
		</td>
		<td>	
			<input type= "text" placeholder="Employer's name" name="job_employer"><br />
		</td>
	</tr>
	<tr>
		<td>		
			<h4 class= "form_sections" style="display: inline;"> Website</h4>
		</td>
		<td>	
			<input type= "text" placeholder="Employer's Website Url" name="job_website"><br />
		</td>
	</tr>
	<tr>
		<td>		
			<h4 class= "form_sections" style="display: inline;">Qualifications</h4>
		</td>
		<td>	
			<input type= "text" placeholder="Minimum Qualification required" name="job_qual" style="height:80px; width:400px;"><br />
		</td>
	</tr>
</table>
<!--Table ends-->

<input type="submit" style="background-color:red; color:white; border:none; border-radius: 10px; width: 80px; margin-left: 210px; margin-top: 40px;">
</form>
</body>
</html>

