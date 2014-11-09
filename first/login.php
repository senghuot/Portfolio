<?php
	include_once "includes/helper.php";
	//check if user already logged in
	if($_SESSION["logged_in"]){
		header("location: update.php");		
	}
	// if not then display content
	include_once "includes/header.php";
	
	//display flash message
	if( isset($_SESSION["message"]) ){
		echo $_SESSION["message"];
		$_SESSION["message"] = NULL;
	}
?>


<div id = "login">
	<form method="post" action="update.php">
		<table>	
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" /></td>
			</tr>
				
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" /></td>
			</tr>	
			<tr>
				<td></td>
				<td><input class = "button" type="submit" value = "Log in" /></td>
			</tr>
		</table> 	
	</form>
</div>	

<?php
	include_once "includes/footer.php";
?>