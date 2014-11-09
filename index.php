<?php
	include_once "includes/header.php";
	include_once "includes/helper.php"; 
?>

 <div class = "container">
	<div class = "jumbotron intro">
		<div class = "row">
		 	 	<div class="col-sm-9">
				    <h2> Hello World, </h2>
				    <p>
				    	I'm a <a href="http://cs.washington.edu">computer science</a> student at the <a href="http://washington.edu">University of Washington</a>
					based out of Seattle, Washington. I'm interested in software engineering, web development, and building mobile apps.
				    </p>
				    <div class="btn-group">
				    	<a href="https://github.com/senghuot" role="button" class="btn btn-primary btn-lg my-project">My Github</a>
					    <a href="#contact" role="button" class="btn btn-danger btn-lg">My Contacts</a>
					</div> 
				</div>
				<div class="col-sm-3" >
			      <img  id = "avatar" src="pictures/avatar.jpg" width = "190px" alt="avatar" class="img-rounded">
		 	 	</div>
		    </div>
		</div>
  </div>
</div>

<div class="jumbotron" id = "project">
	<center><h2> My Projects</h2></center>
	<div class="row">
	    <div class="col-sm-4">
	    	<div class="thumbnail">
	    		<img src="pictures/projectmovie.jpg" >
	    		<center><h3>Project Movies</h3></center>
		    	<p>
		      		Get over one thousand hits whitin the first three hour of release, almost one hundred students accounts had been signed up and
		      		verify. Technology involve: PHP, Javascript, JQuery, MySql, Ajax, Flash, Video.JS. 
		      		<a href="http://senghuotlim.com/projectmovies/index.php" role="button" class="btn btn-default btn-default">Live Demo</a>
		      	</p>
	    	</div>
	    </div>
	     <div class="col-sm-4">
	    	<div class="thumbnail">
	    		<img src="pictures/secret.jpg" >
	    		<center><h3>Coming Soon</h3></center>
		    	<p>
		     		We will be working on a project that bring non-stop entertainment to your smartphones. We will make a web app, follow by Android and
		     		iPhone app. Let's grab some coffee if you're interested in collaboration. Technology involve: JSP, MySql, HTMl, 
		     		Java, Ajax, Jquery, Bootstrap, XML, and Objective C.
		      	</p>
	    	</div>
	    </div>
	     <div class="col-sm-4">
	    	<div class="thumbnail">
	    		<img src="pictures/smart_calc.jpg" >
	    		<center><h3>Smart Calc</h3></center>
		    	<p>
		      		Written solely in Java, exported as JAR file. Able to compute: Cross-Product, Dot-Product, Distances, Angles and Area of the Triangle.
		      		This program comes in handy for multi-variables calculus aka Math 126.
		      		<a href="https://github.com/senghuot/Smart-Calc" role="button" class="btn btn-default btn-default">Source Code</a>
		      	</p>
	    	</div>
	    </div>
	</div>

    <div class="row second-row">
	    <div class="col-sm-4">
	    	<div class="thumbnail">
	    		<img src="pictures/android.png" >
	    		<center><h3>Flash Light</h3></center>
		    	<p>
		      		This app can be used to turn on/off flashlight on Samsung Galaxy S2 running Ice Cream Sandwich Android OS. There are still bugs inside the code.
		      		Written soley in Java and XML. 
		      	</p>
	    	</div>
	    </div>
	     <div class="col-sm-4">
	    	<div class="thumbnail">
	    		<img src="pictures/GPA.jpg" >
	    		<center><h3>GPA predictor</h3></center>
		    	<p>
		     		conducted a study to find out some factors that could potentially measure student
		     		performance given basic information such as: age, gender, race...etc. We
		     		derived an equation that could predict Bellevue College student GPA to the nearest tenth.
		     		<a href="/files/Final Project.pdf" role="button" class="btn btn-default btn-default">Read More</a>
		      	</p>
	    	</div>
	    </div>
	     <div class="col-sm-4">
	    	<div class="thumbnail">
	    		<a href="https://github.com/senghuot">
	    			<img src="pictures/github.png">
	    		</a>
	    		<center><h3>More Projects</h3></center>
		    	<p>
		      		I'm in the process of uploading all the software project source code to Github.
		      		I encourage you to download, modify, or shoot me an email if your interest in learning more about 
		      		any projects.
		      	</p>
	    	</div>
	    </div>
	</div>
</div>


<div class = "jumbotron" id = "story">
	<center><h2>My Story</h2> </center>
	<div class="row">
		<div class="col-sm-4">
		    	<div class="thumbnail">
		    		<a href="http://www.cs.washington.edu/">
		    			<img src="pictures/uw.jpg">
		    		</a>
		    		<center><h3>UW CSE</h3></center>
			    	<p>
						I'm working toward a Computer Science bachelor degree at University of Washington. Looking forward to work with many talented classmates
						and professors in the future.
						<div class="comment">
							// I believe compiler ignores all my comments
						</div>
			      	</p>
		    	</div>
		    </div>
		     <div class="col-sm-4">
		    	<div class="thumbnail">
		    		<a href="http://en.wikipedia.org/wiki/Cambodia">
		    			<img src="pictures/khmer.jpg">
		    		</a>
		    		<center><h3>Cambodia</h3></center>
			    	<p>
			     		Born and raised in Cambodia. I moved to the U.S when I was fifteen years old. I'm proud to be the first generation to 
			     		attend University of Washington and be apart of one of the best CS programs in the country.
			      	</p>
		    	</div>
		    </div>
		     <div class="col-sm-4">
		    	<div class="thumbnail">
		    		<img src="pictures/reddit.jpg">
		    		<center><h3>Hobby</h3></center>
			    	<p>
			    		<a href="http://www.reddit.com/user/7seng7/" class="boldlink">Reddit</a> and 
			    		<a href="https://www.quora.com/Scottie-Lim" class="boldlink">Quora</a> is how I spent my free time.
			    		<a href="http://stackoverflow.com/users/2206434/7seng7" class="boldlink">Stackoverflow</a> is how I reference my codes. 
			    		<a href="http://en.wikipedia.org/wiki/YouTube" class="boldlink">Youtube</a> is how I entertainment myself. 
			    		<a href="http://en.wikipedia.org/wiki/Torrentz" class="boldlink">Torrentz</a> is how I share files with my friends. Making this
			    		site is how I enjoy my weekend.
			      	</p>
		    	</div>
		    </div>	    
	</div>
</div>

<div id = "contact" class = "jumbotron">
	<center>
		<h2> Get in contact with me. </h2> 
		<div class="container">
			<div class="row">
					<ul class="nav navbar-nav contact-icon">
						<li><a href="https://github.com/senghuot"> <img src="contact-icons/github.png" > </a></li>
						<li><a href="https://www.linkedin.com/in/senghuotlim/"> <img src="contact-icons/linkedin.png" > </a></li> 
						<li><a href="https://www.facebook.com/senghuot.lim"> <img src="contact-icons/facebook.png" > </a></li>
						<li><a href="https://twitter.com/7seng7"> <img src="contact-icons/twitter.png" > </a></li>
						<li><a href="mailto:senghuotlim@gmail.com"> <img src="contact-icons/mail.png" > </a></li>
					</ul>
			</div>
		</div>
    </center>
</div>

<?php
	include_once "includes/footer.php";
?>
