	<?php 
	$url = $_SERVER['REQUEST_URI'];
	if(preg_match("/^\/S/i", $url)){
		$url = substr($url, 15, strlen($url)-1 );
	}
	if( $url != "/first/index.php" && $url != "/first/login.php" && $url != "/first/update.php" && $url != "/first/" ) {
 	?>
 		<div id = "right_content">
 		<h3>Recent Post:</h3>
 		<ul>
 	<?php 
	 	$query = "SELECT * FROM articles ORDER BY date DESC";
	 	$rows = getRows($query);
	 	foreach($rows as $row){
	?>
 			<li> <a href="<?php echo "display.php?id=$row[id]"; ?> "> <?php echo $row[title]; ?> </a> </li>
	<?php 	
		}
 	?>	
 		</ul>
 		</div>
 	<?php
		}
 	?>
	</div>	
		
	<!-- This is div tag closed from the header -->
	</div>
</div>
	<div id = "footer">
		Copyright &copy; 2012 - 2013. <br/ >All content on this site are subjected to be <a class = "special" href="login.php">changed and updated</a> 
		regularly. All suggestions are welcome, please <a class="special" href="mailto:admin@senghuotlim.com">contact me</a>.
	</div>		
		
</body>
	
</html>
