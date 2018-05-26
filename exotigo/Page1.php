<?php
 //create connection
 $connect=mysqli_connect('localhost','root','wolverine','exotigo');
  
//check connection
 if(mysqli_connect_errno($connect))
 {
  echo 'Failed to connect to database: '.mysqli_connect_error();
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery smooth-scroll.js Demo Page</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>

<div class="main">
	<nav>
		<ul>
			<li><a href="index1.php">Home Page</a></li>
			<li><a href="#about">Models</a></li>
		</ul>
	</nav>

	<section id="home"><h2></h2><div style="margin-top:20px" align="center">

</div></section>
	<section id="about"><h2>Models</h2>
		<div class="cc">
		<div class="card">
		<img src="Img/aventador.jpg" alt="Avatar" style="width:100%">
  			<div class="container">
    			<h4><b>Aventador</b></h4>
          <a href="avent.php" class="btn btn-info"> View details</a>  
  			</div>
  	</div>
  	<div class="card">
		<img src="Img/hurracan.jpg" alt="Avatar" style="width:100%">
  			<div class="container">
    			<h4><b>Hurracan</b></h4>  
          <a href="hurr.php" class="btn btn-info"> View details</a>  
  			</div>
  	</div>
  	<div class="card">
		<img src="Img/centenario.jpg" alt="Avatar" style="width:100%">
  			<div class="container">
    			<h4><b>Centenario</b></h4> 
          <a href="cent.php" class="btn btn-info"> View details</a>   
  			</div>
  	</div>
  </div>
	</section>
	

<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="smooth-scroll.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
