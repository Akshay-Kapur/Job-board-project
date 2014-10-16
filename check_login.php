<?php
include 'JobsDB.php';

$count=confirmuser($_GET['user_name'],$_GET['user_pass']);
if ( $count == 1)
{
	session_start();
	$_SESSION['name']= $_GET['user_name'];
	echo "<META http-equiv='refresh' content='0;URL=PostingBoard.php'>";
}	


else {
	echo "<META http-equiv='refresh' content='0;URL=login.php?login=bad'>";
}

//echo $count;

?>

