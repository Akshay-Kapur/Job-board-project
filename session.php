<?php

	session_start();
	$_SESSION['name']= "frank"; //$_GET['username'];
	echo "set the session: " . $_SESSION['name'];
?>

<p>
<a href=check.php>check</a>