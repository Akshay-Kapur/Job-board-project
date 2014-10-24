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

echo "<META http-equiv='refresh' content='0;URL=PostingBoard.php'>";

?>