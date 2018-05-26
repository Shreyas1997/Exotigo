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
	<link rel="stylesheet" href="main8.css">
</head>
<body>

<div class="main">
	<nav>
		<ul>
			<li><a href="Page2.php">Previous Page</a></li>
			<li><a href="#gallery">Engine Specs</a></li>
			<li><a href="#info">Safety</a></li>
			<li><a href="#contacts">Mechanical Specs</a></li>
		</ul>
	</nav>

	<section id="home"><h2></h2><div style="margin-top:20px" align="center">

</div></section>
<div class="bg">
  <section id="gallery">

<?php
  $result=mysqli_query($connect,"select * from engine_specs where Mo_Name='RS6 Avant'");

?>
<h1>Engine Details</h1>
  <table width="500" cellpadding=5celspacing=5 border=1  align="center" class="tab">
  <tr>
  
  
  <th>Cylinder</th>
  <th>Transmission</th>
  <th>Lubrication</th>
  <th>Horse Power</th>
  </tr>
  <?php while($row=mysqli_fetch_array($result)):?>
  <tr>
   
  
  <td><?php echo $row['Cylinder'];?></td>
  <td><?php echo $row['Transmission'];?></td>
  <td><?php echo $row['Lubrication'];?></td>
  <td><?php echo $row['Horse_Power'];?></td>
  </tr>
  <?php endwhile;?> 
  </table>
  
	</section>
	<section id="info">
      <?php
 
  $result=mysqli_query($connect,"select * from safetys where Mo_Name='RS6 Avant'");

?>
<h1>Safety Features</h1>

  <table width="500" cellpadding=5celspacing=5 border=1  align="center" class="tab">
  <tr>
  
  
  <th>Anti-Lock Break</th>
  <th>Face-Impact Airbag</th>
  <th>Side-Impact Airbag</th>
  <th>Knee Airbag</th>
  <th>Pretensioners</th>
  </tr>
  <?php while($row=mysqli_fetch_array($result)):?>
  <tr>
   
  
  <td><?php echo $row['Alb'];?></td>
  <td><?php echo $row['Fia'];?></td>
  <td><?php echo $row['Sia'];?></td>
  <td><?php echo $row['Ka'];?></td>
  <td><?php echo $row['Pre'];?></td>
  </tr>
  <?php endwhile;?> 
  </table>
  </section>

	<section id="contacts">
    <?php
 
  $result=mysqli_query($connect,"select * from machanics where Mo_Name='RS6 Avant'");
?>
<h1>Mechanics</h1>

  <table width="500" cellpadding=5celspacing=5 border=1  align="center" class="tab">
  <tr>
  
  
  <th>Top Speed(km/hr)</th>
  <th>Mileage(kmpl)</th>
  <th>Doors</th>
  <th>Seats</th>
  <th>Drive Type</th>
  </tr>
  <?php while($row=mysqli_fetch_array($result)):?>
  <tr>
   
  
  <td><?php echo $row['Ts'];?></td>
  <td><?php echo $row['Mil'];?></td>
  <td><?php echo $row['Doors'];?></td>
  <td><?php echo $row['Seats'];?></td>
  <td><?php echo $row['DT'];?></td>
  </tr>
  <?php endwhile;?> 
  </table>
  </section>
</div>

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
