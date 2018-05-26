<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="css/insert.css" rel="stylesheet">
<style type="text/css">
h1{
	text-align:center;
text-shadow:2px 2px 2px #cfcfcf;
}
	.maindiv {
margin:30px auto;
width:980px;
height:500px;
background:#fff;
padding-top:20px;
font-family:'Droid Serif',serif;
font-size:14px
}
.title {
width:500px;
height:70px;
text-shadow:2px 2px 2px #cfcfcf;
font-size:16px;
text-align:center
}
.form_div {
width:70%;
float:left
}
form {
	align-content: center;
width:300px;
border:1px dashed #aaa;
padding:10px 30px 40px;
margin-left:70px;
background-color:#f0f8ff;
}
form h2 {
text-align:center;
text-shadow:2px 2px 2px #cfcfcf;
}
textarea {
width:100%;
height:60px;
border-radius:1px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:7px;
border:none
}
.input {
width:100%;
height:30px;
border-radius:2px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:7px;
border:none;
margin-bottom:20px
}
.submit {
color:#fff;
border-radius:3px;
background:#1F8DD6;
padding:5px;
margin-top:40px;
border:none;
width:100%;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:18px
}
p {
color:red;
text-align:center
}
span {
text-align:center;
color:green
}
</style>
</head>
<body>
	<h1>Insert History</h1>
<div class="maindiv">
<?php
 //create connection
 $connect=mysqli_connect('localhost','root','wolverine','exotigo');
//check connection
 if(mysqli_connect_errno($connect))
 {
  echo 'Failed to connect to database: '.mysqli_connect_error();
}
/*else
  echo 'Connected Successfully!!';*/
  $res=mysqli_query($connect,"CALL `show`(@p0, @p1); SELECT @p0 AS `MName`, @p1 AS `Mo_Name`;");

/*while($row=mysqli_fetch_array($result))
{
         echo $row['MName'].' '.$row['Mo_Name'].' '.$row['Mo_Type'].'<br/>';
 }*/
?>
<?php while($row=mysqli_fetch_array($res)):?>
  <tr>
   
  <td ><?php echo $row['MName'];?></td>
  <td><?php echo $row['Mo_Name'];?></td>
  </tr>
  <?php endwhile;?>

</div>
</div>
</div>
</body>
</html>