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
  <style type="text/css">
    .tab{
       background-color: #fbfbfbb3 !important;
       box-shadow:  0 15px 10px 5px rgb(6, 6, 6);
    transition: 0.3s;
      }
       h1{
    color: #0ac1e9;
text-align: center;
text-shadow: 0 6px 6px rgb(46, 118, 243)
;margin-top: 9%;

font-size: 30px;
  }
  </style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery smooth-scroll.js Demo Page</title>
	<link rel="stylesheet" href="">
</head>
<body background="Img/gear.jpg">

<div class="main">

	<section id="home"><h2></h2><div style="margin-top:20px" align="center">

</div></section>
<div class="bg">
  <section id="gallery">
<h1><center>History</center></h1>
<?php
  $sql=mysqli_query($connect,"CALL `show`();");
?>
<table width="500" cellpadding=5celspacing=5 border=1  align="center" class="tab">
  <tr>
  <th>Manufacturer</th>
  <th>Model</th>
  <th>Variant</th>
  </tr>
  <?php while($row=mysqli_fetch_array($sql)):?>
  <tr>
  <td><?php echo $row['MName'];?></td>
  <td><?php echo $row['Mo_Name'];?></td>
  <td><?php echo $row['Mo_Type'];?></td>
  </tr>
  <?php endwhile;?> 
  </table>
  </section>
</div>
</body>
</html>
