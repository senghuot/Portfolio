<?php
    include_once "includes/header.php";
	include_once "includes/helper.php"; 
	$query = "SELECT * FROM articles ORDER BY date DESC";
	$rows = getRows($query);
	foreach($rows as $row) {
		$date = new DateTime("$row[date]");
		$date = date_format($date, "F d, Y");
?>

	<div class="highlights">
		<h2><a href="<?php echo "display.php?id=$row[id]"; ?>"> <?php echo "$row[title]";?> </a></h2>
		<div class="date"> <?php echo $date; ?></div>
		<p>
			<?php echo substr($row[article], 0, 200) . "..."; ?>
			<a href="<?php echo "display.php?id=$row[id]"; ?>"> <?php echo "more";?> </a>
		</p>
	</div>
			
	
		
	
<?Php
	} 
	include_once "includes/footer.php";
?>

