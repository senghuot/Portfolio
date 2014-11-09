<?php
	include_once "includes/header.php";
	include_once "includes/helper.php";
	$keyword =  $_POST["search"];

	echo '<div id = "left_content">';
	$query = "SELECT * FROM articles WHERE article LIKE '%$keyword%' 
										OR title LIKE '%$keyword%'
			";
	$rows = getRows($query);
	
	if(!empty($keyword)){
		foreach( $rows as $row){
			$date = new DateTime("$row[date]");
			$date = date_format($date, "F d, Y");
?>
		<div class="story">
			<h2> <a href="<?php echo "display.php?id=$row[id]"; ?>"> <?php echo "$row[title]";?> </a> </h2>
				<div class="date"> <?php echo $date; ?> </div>			
				<img src="<?php echo $row["pic"] ?>" width = "300px" /> 
				<div class = "article">
					<?php echo substr($row["article"], 0, 250) . "..." ?>
					<a href="<?php echo "display.php?id=$row[id]"; ?>"> more </a>
				</div>
	
		</div>
	
<?php 
		}
	}
	echo '</div>';
	include_once "includes/footer.php";
?>