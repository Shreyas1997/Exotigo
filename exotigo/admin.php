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
background-color: black;
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
	text-shadow: 0 6px 6px rgb(244, 247, 254);
	align-content: center;
width:300px;
border:1px dashed #aaa;
padding:10px 30px 40px;
margin-left:300px;
background-color: #f9f9fc99;
box-shadow: 1px 1px 6px 0.5px rgb(244, 247, 254);
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
<body bgcolor=black>
<h1>Employee Details</h1>
<div class="maindiv">

<div class="form_div">
<form action="insert.php" method="post">
<label>ESSN:</label>
<input class="input" name="sl_no" type="text" value=""><br>
<label>Name:</label>
<input class="input" name="emp_name" type="text" value=""><br>
<label>Designation:</label>
<input class="input" name="desig" type="text" value=""><br>
<input class="submit" name="submit" type="submit" value="Insert">
</form>
</div>
</div>
</div>
</body>
</html>