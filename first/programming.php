<?php
	include_once "includes/header.php";
	include "includes/helper.php";
?>	
	<div id = "left_content">
<?
	$query = "SELECT * FROM articles WHERE categories_id = 2 ";
	$rows = getRows($query);
	
	foreach($rows as $row){
		$date = new DateTime("$row[date]");
		$date = date_format($date, "F d, Y");
?>
	
	<div class="story">
		<h2> <a href="<?php echo "display.php?id=$row[id]"; ?>"> <?php echo "$row[title]";?> </a> </h2>	
		<div class="date"> <?php echo $date; ?></div>	
		<img src="<?php echo $row["pic"] ?>"  width= 280px>
		<div class = "article">
			<?php echo substr($row["article"], 0, 300) . "..." ?>
			<a href="<?php echo "display.php?id=$row[id]"; ?>"> <?php echo "more";?> </a>	
		</div>
	</div>	
<?php
	}
	echo "</div>";
	include "includes/footer.php";
?>

