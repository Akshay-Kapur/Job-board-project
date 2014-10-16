<?php
/*
$title=$_GET['job_title'];
$salary=$_GET['job_salary'];
$jobdesc=$_GET['job_desc'];
$location=$_GET['job_location'];
*/
function dbopen ()
{
	$dbconn = mysql_connect('localhost','root','akshay');
	mysql_select_db('jobs');
	return $dbconn;
}

function addjob ($title, $salary, $jobdesc, $location, $qualification, $employer, $website )
{
	dbopen();
	$sql1="INSERT into jobs (Title, Salary, Job_Description, Location, Qualifications, Employer, website) values('$title','$salary','$jobdesc','$location','$qualification','$employer','$website')";
	$result = mysql_query($sql1);

}


function getjobs ()
{
	$db=dbopen ();
	$sql2="select * from jobs";
	$result = mysql_query($sql2);
	return $result;

}

function getjob ($id)
{
	$db=dbopen ();
	$sql3="select * from jobs where id=$id";
	$result = mysql_query($sql3);
	return $result;
}


function adduser($username, $password)
{
	dbopen();
	$sql4="INSERT into users (username, password) values('$username','$password')";
	$result = mysql_query($sql4);
	return $result;
}
// adduser('user4','pass4');


function confirmuser( $username, $password)
{
	dbopen();
	$sql5="Select id from users where username='$username' and password='$password'";
	$result= mysql_query($sql5);
	$count= mysql_num_rows($result);
	//echo $count;
	return $count;
}
//confirmuser( 'user2', 'pass2');
//addjob('developer','20000', 'good', 'home', 'none', 'google','googlejobs.com');
/*
$result = getjobs ();
while($row = mysql_fetch_assoc($result))
{
	echo $row['Title']."&nbsp&nbsp";
	echo $row['Salary']."&nbsp&nbsp";
	echo $row['Job_Description']."&nbsp&nbsp";
	echo $row['Location']."&nbsp&nbsp";
	echo $row['Qualifications']."&nbsp&nbsp";
	echo $row['Employer']."&nbsp&nbsp";
	echo $row['website']."<br>";
}
*/
?>