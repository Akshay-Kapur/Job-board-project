<?php

include 'JobsDB.php';

$username=$_GET['Newuser_name'];
$password=$_GET['Newuser_pass'];
$result = adduser ($username , $password);
//echo $result;

if ($result)	
{
	session_start();
	$_SESSION['name']= $_GET['Newuser_name'];
	echo "<META http-equiv='refresh' content='0;URL=PostingBoard.php'>";
} 

else 
{
	echo "<META http-equiv='refresh' content='0;URL=login.php?adduser=fail'>";
}


?>