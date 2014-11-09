<?php
	include_once "includes/header.php";
	include_once "includes/helper.php";
?>

	<div id="share">
	  	<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_floating_style addthis_counter_style" style="left:50px;top:50px;">
		<a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
		<a class="addthis_button_tweet" tw:count="vertical"></a>
		<a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
		<a class="addthis_counter"></a>
		</div>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5204b3e777e23b8a">
				
		</script>
		<!-- AddThis Button END -->
	</div>
	
	
	<!-- Plugin initialization -->
	<script type="text/javascript">
		function jqUpdateSize(){
		    // Get the dimensions of the viewport
		    var width = $(window).width();
		    if(width > 1200){
		    	$("#share").hide();	
		    	setTimeout(function(){
		    		$("#share").fadeIn();
			    }, 3000);
		    	
			}else{
				$("#share").hide();
			}
		};
		
		$(document).ready(jqUpdateSize);    // When the page first loads
		$(window).resize(jqUpdateSize);
	</script>
	
	
	<div id = "left_content">
<?
	$id = $_GET['id'];
	$query = "SELECT * FROM articles WHERE id = $id ";
	$rows = getRows($query);
	
	foreach($rows as $row){
		$date = new DateTime("$row[date]");
		$date = date_format($date, "F d, Y");
?>	
		
		<div class = "story">
		<h2> <a href="<?php echo "$url"; ?>"> <?php echo "$row[title]";?> </a> </h2>
		
		<div class="date"> <?php echo $date; ?> </div>
		
		<img src="<?php echo $row["pic"] ?>" width = "400px" /> 
		<div style = "clear: both"></div>
			<p class = "article">
				<?php echo $row[article]; ?>
			</p>
			
<?php 		
	}
?>
		</div>
		
		<div style="clear: both"></div>
		<div style = "margin-bottom: 30px"></div>
		
		    <div id="disqus_thread"></div>
		    <script type="text/javascript">
		        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		        var disqus_shortname = 'senghuotlim'; // required: replace example with your forum shortname
		
		        /* * * DON'T EDIT BELOW THIS LINE * * */
		        (function() {
		            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
		            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		        })();
		    </script>
		    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
			
			<script type="text/javascript">
			    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			    var disqus_shortname = 'senghuotlim'; // required: replace example with your forum shortname
			
			    /* * * DON'T EDIT BELOW THIS LINE * * */
			    (function () {
			        var s = document.createElement('script'); s.async = true;
			        s.type = 'text/javascript';
			        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
			        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
			    }());
		    </script>
 
	</div>
<?php 
	include_once "includes/footer.php";
?>