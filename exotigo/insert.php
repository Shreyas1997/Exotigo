<?php
$connection = mysqli_connect("localhost", "root", "wolverine"); 
$db = mysqli_select_db($connection,"employee" ); 
if(isset($_POST['submit'])){
$sl_no = $_POST['sl_no'];
$emp_name = $_POST['emp_name'];
$desig = $_POST['desig'];


if($sl_no !=''||$emp_name !=''||$desig !=''){
$query =mysqli_query($connection,"insert into desig_details(sl_no, emp_name, desig) values ('$sl_no','$emp_name','$desig')");

echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
?>