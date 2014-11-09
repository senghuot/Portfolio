<!DOCTYPE HTML>
<html>
<head>
  <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="includes/bootstrap/css/style.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="includes/bootstrap/js/bootstramp.js" type="text/javascript"></script>
  <link rel="shortcut icon" href="pictures/favicon.ico">
  
  <!-- This is for custume stylesheet-->
  <link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
  
<!--  Google Analytic -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
    ga('create', 'UA-43572782-1', 'senghuotlim.com');
    ga('send', 'pageview');


    $(document).ready(function(){
      $("body").fadeIn(1000);
      
      // Smooth Scroll
      $('a[href^="#"]').on('click',function (e) {
          e.preventDefault();

          var target = this.hash,
          $target = $(target);

          $('html, body').stop().animate({
              'scrollTop': $target.offset().top
          }, 900, 'swing', function () {
              window.location.hash = target;
          });
      });
    });
  
  </script>

  <title>Senghuot Lim</title>
</head>
<body>

<div class = "navbar navbar-inverse navbar-static-top">
  <div class = "container">
    <div class = "collapse navbar-collapse">
      <ul class = "nav navbar-nav navigation">
        <li><a href = "https://www.dropbox.com/s/zkjj9ics0mmwa6k/Senghuot.docx?dl=0"> Resume </a></li>
        <li><a href ="#project"> Projects </a></li>
        <li><a href ="#"> Blog </a></li>
        <li><a href ="#contact"> Contact Me </a></li>
      </ul>
    </div>
  </div>
</div>
