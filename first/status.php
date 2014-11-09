<?php
	if (isset($_POST["btnSubmit"]) or !empty($_POST["btnSubmit"])){
		echo "You have click submit.";
	}
	
	if (isset($_POST["btnReset"])){
		echo "You have click reset.";
	}
?>

<html>
	<head>
		<title>status page</title>
	</head>
	<body>
		<form action="status.php" mehtod="post">
			<input type="submit" name="btnSubmit" value="Submit" />
			<input type="submit" name="btnReset" value="Reset" />
		</form>

	</body>
</html>