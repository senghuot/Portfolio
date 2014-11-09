<?php 
	include_once "includes/helper.php";
	
	// for logging out
	if( isset($_POST["logout"]) ){
		session_destroy();
		session_regenerate_id(true);
		header("location: login.php");
	}
	
	// for uploading into Database
	if( isset($_POST["upload"]) ){
		$_SESSION["message"]= "<div id = 'success'> Post successfully uploaded </div>";
		$db = new PDO("mysql:dbname=senghuot_senghuotlim", "senghuot", "H@tt1890");
		$title = $_POST["title"];
		$picture = "pictures/" . $_FILES["picture"]["name"];
		$tmp_pic = $_FILES["picture"]["tmp_name"];
		$article = $_POST["article"];
		$type = $_POST["type"];
		$date = date("Y-m-d");
		move_uploaded_file($tmp_pic, $picture);
		
		$query = "INSERT INTO `articles` (`id`, `title`, `date`, `pic`, `article`, `categories_id`)
			VALUES (NULL, '$title', '$date', '$picture', '$article', '$type')";
		$db->query($query);
				
	}
	
	//get username and password from login.php
	$user = $_POST["username"];
	$pass = $_POST["password"];
	
	if($_SESSION["logged_in"]){
		//you have successfully logged in.	
	}elseif ( $user == "senghuot" && $pass == "H@tt1890"){
		$_SESSION["username"]= $user;
		$_SESSION["password"]= $pass;
		$_SESSION["logged_in"] = TRUE;
		$_SESSION["message"]= "<div id = 'success'> Welcome back scottie </div>";
	}else{
		$_SESSION["message"]= "<div id = 'fail'>Sorry please check your username and password again!</div>";
		header("location: login.php");
	}

	include_once "includes/header.php";
	
	//display flash message
	if( $_SESSION["logged_in"] ){
		echo $_SESSION["message"];
		$_SESSION["message"] = NULL; 	
	}
?>
	<div id = "update">
		<form method="post" action="update.php" enctype = "multipart/form-data">
			<table>
				<tr>
					<td> Title: </td>
					<td> <input type="text" name = "title" > </td>
				</tr>
				<tr>
					<td> Picture: </td>
					<td> <input type="file" name = "picture" id="picture"> </td>
				</tr> 
				<tr>
					<td> Article: </td>
					<td> <textarea rows="10" cols="40" name = "article"></textarea> </td>
				</tr>  
				<tr>
					<td> Type: </td>
					<td> 
						<select name = "type"> 
							<?php 
								$query = "SELECT * FROM categories";
								$rows = getRows($query);
								foreach ($rows as $row){
									echo "<option value='$row[id]'>$row[type]</option>"; 	
								}	
							?>
						</select>
					</td>
				</tr> 
				<tr>
					<td><input class= "button" type="submit" value = "Log Out" name = "logout"/></td>
					<td><input class= "button" type="submit" value = "Upload" name = "upload"/></td>
					
				</tr>
			</table>
		</form>
	</div>		
	
</div>

<?php
	include_once "includes/footer.php";
?>