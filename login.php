
<!-- Signing up new users -->
<?php
include 'JobsDB.php';
?>

<!-- Signing up new users ends -->

<!-- Redirect page message "incorrect username" begins.--> 

<?php

$_GET['login'];
if (isset($_GET['login']))
{

?>

<section style="text-align: center; color: black; margin-top: 5%; font-size:20px;">

Incorrect username ! <br> <br> Please re-enter username. <p>

</section>



<?php
}
?>

<!--Redirect page message "incorrect username" ends-->


<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
</head>
<!--User Login form Begins-->
<body style="background-color: #EFFF62">
	<form action='check_login.php'>
		<section class="sign" id="in">
		<h3> Log in </h3>
			<table border=0 cellpadding=10>
				<tr>
					<td width="200">
						<h4 style="display: inline;">Username</h4>
					</td>
					<td>
						<input type= "text" placeholder="Enter username" name="user_name"></tr>
					</td>
				</tr>
				<tr>
					<td>	
						<h4 style="display: inline;">Password</h4>
					</td>
					<td>	
						<input type= "password" placeholder="Enter password" name="user_pass">
					</td>
				</tr>
			</table>
			<input type="submit" value="Sign in" style="background-color:red; color:white; border:none; border-radius: 10px; width: 80px; height:30px; margin-left: 70%; margin-bottom: 10%;">
		
		</section>
	</form>

<!--User Login form ends-->




<!-- Redirect page message "username already exists" begins.--> 

<?php

$_GET['login'];
if (isset($_GET['adduser']))
{ 
?>

<section style='text-align: center; color: black; margin-top: 5%; font-size:20px;'>
	Username already exists. <br> Please try a different username.
</section>

<?php

}

?>
<!-- Redirect page message "username already exists" ends.--> 

<!--New user Signup form begins-->

	<form action='add_user.php'>
		<section class="sign" id="up">
		<h3> Don't have an account yet? &nbsp &nbsp Sign up !</h3>
			<table border=0 cellpadding=10>
				<tr>
					<td width="200">	
						<h4 style="display: inline;">Name</h4>
					</td>
					<td>	
						<input type= "text" placeholder="Enter desired username" name="Newuser_name">
					</td>
				</tr>
				<tr>
					<td>		
						<h4 style="display: inline;">Password</h4>
					</td>
					<td>	
						<input type= "password" placeholder="Enter password" name="Newuser_pass">
					</td>
				</tr>	
				<tr>
					<td>	
						<h4 class= "form_sections" style="display: inline;">Re-enter Password</h4>
					</td>
					<td>	
						<input type= "text" placeholder="Confirm password" name="Newuser_pass_conf"><br />
					</td>
				</tr>
			</table>
			
			<input type="submit" value="Sign up" style="background-color:red; color:white; border:none; border-radius: 10px; width: 80px; height:30px; margin-left: 70%; margin-bottom: 10%;">
		
		</section>
	</form>

<!--New user Signup form ends-->

<!-- Style section begins-->
<style>

.sign { 
	box-shadow: 2px 5px 5px black;
	margin: 5% auto;
	width: 500px;
	height: auto; 
	background-color: #FF9F22;
	border-radius: 5px;
}
table {
	margin: 10% auto;
}

h3{
	padding-top: 10%;
	text-align: center;

}

</style>
<!-- Style section ends-->




</body>