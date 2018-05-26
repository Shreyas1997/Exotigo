<?php
 //create connection
 $connect=mysqli_connect('localhost','root','wolverine','exotigo');
  
//check connection
 if(mysqli_connect_errno($connect))
 {
  echo 'Failed to connect to database: '.mysqli_connect_error();
}
?>

<title>HomePage</title>
<head>
<style type="text/css">
body{
		margin:0;
		font-family: sans-serif;
	}
	@import url(https://fonts.googleapis.com/css?family=Open+Sans);

nav {
    width: 100%;
    max-width: 100%;
    position: fixed;
    z-index: 999;
    background: black;
    box-shadow: 0px 0px 20px 0px rgba(8, 72, 72, 0.95);
    height: 50px;
}

/*.overlaybg{
	 	background-image: url("Img/supercar1.jpg");
	 	background-size:cover;
	 	height:100%;
	 	width: 100%;
	 	background-attachment: fixed;
	 }*/
   .crossfade > div:nth-child(1) {
    background-image: url("Img/supercar1.jpg");
    background-size:cover;
   /* height:100%;
    width: 100%;
    /*background-attachment: fixed;;*/ 
  }
  .crossfade > div:nth-child(2) {
    animation-delay: 6s;
      background-image: url("Img/Audi.jpg");
    background-size:cover;
    /*height:100%;
    width: 100%;
    /*background-attachment: fixed;*/
  }
  .crossfade > div:nth-child(3) {
    animation-delay: 12s;
    background-image: url("Img/Benz.jpg");
    background-size:cover;
  /*  height:100%;
    width: 100%;
    /*background-attachment: fixed;*/
  }
  .crossfade > div:nth-child(4) {
    animation-delay: 18s;
      background-image: url("Img/Hyu.jpg");
    background-size:cover;
   /* height:100%;
    width: 100%;
   /* background-attachment: fixed;*/
  }
  .crossfade > div:nth-child(5) {
    animation-delay: 24s;
      background-image: url("Img/bmw.jpg");
    background-size:cover;
   /* height:100%;
    width: 100%;
   /* background-attachment: fixed;*/
  }
   .crossfade > div {
      animation:imageAnimation 30s linear infinite 0s;
      backface-visibility: hidden;
      background-size: cover;
      background-position: center center;
      color: transparent;
      height: 100% !important;
     /* left: 0px;*/
      opacity: 0;
      position: absolute;
      /*top: 0px;*/
      width: 100% !important;
      z-index: 0;
      margin-right:0px !important;
  }
  @keyframes
  imageAnimation {  0% {
   animation-timing-function: ease-in;
   opacity: 0;
  }
   8% {
   animation-timing-function: ease-out;
   opacity: 1;
  }
   17% {
   opacity: 1;
  }
   25% {
   opacity: 0;
  }
   100% {
   opacity: 0;
  }
  }


  .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  position: absolute;
  overflow: hidden;
  width: 100%;
  height: 92.5%;
  top: 7%;
  border-bottom: 1px solid #FFF;
  border-top: 1px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);
  background: rgba(0,0,0,0.5);
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  filter: brightness(1);
  -webkit-filter: brightness(0.6);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}
input[type=text] {
  color: white;
    width: 130px;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
    font-size: 16px;
    background-color:  rgba(0,0,0,0.2);
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    box-shadow:inset 0px 0px 20px 0px rgb(255, 10, 10);
}

input[type=text]:focus {
    width: 50%;
}
.button{
  border-radius: 10px;
  margin-top: 20px;
  background-color:  rgba(17, 204, 245, 0.2);
  border: 2px solid red;
  color: white;
  width: 100px;
  height: 30px;
  box-shadow:inset 0px 0px 20px 0px rgb(255, 10, 10);
}
.search{
  color:white;
  font:sans-serif;
}

.dropbtn {
    background-color: rgba(72, 76, 72, 0.32);
    color:  #1af1f3;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
   background-color: rgba(72, 76, 72, 0.32);
    min-width: 160px;
   box-shadow:inset 0px 0px 20px 0px rgb(255, 10, 10);
    z-index: 10;
}

.dropdown-content a {
    color: #4dc4c5;
    text-shadow: 0px 0px 2px;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
   box-shadow:inset 0px 0px 20px 0px rgba(8, 72, 72, 0.95);
   text-shadow: 0px 0px 2px;
}
.logo{
  height: 25px;
  margin-bottom: px;
}
.tname{
  color: white;
}
.home{
  text-decoration: none;
}
.tab{
  text-decoration: none;
}
a{
  text-decoration: none;
}
</style>
</head>
<body>
<nav>
  <ul>
      <li><img class="logo" src="Img/mainlog.png"/></li>
    </ul>
</nav>
<div class="crossfade"> 
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
       
            <div class="overlay">
<p class="flow1">
  <h1 class="search">Click on model</h1>
<?php
  $result=mysqli_query($connect,"select Mo_Name from models where Mo_Name='Q3'");
  $result8=mysqli_query($connect,"select Mo_Name from models where Mo_Name='Vitara Brezza'");
?>
  <table width="500" cellpadding=5celspacing=5 border=1  align="center" class="tab">
  <tr>
  
  <th class="tname">Model</th>
  </tr>
  <?php while($row=mysqli_fetch_array($result)):?>
  <tr>
   
  <td style="text-align: center"><a href="q32.php"><?php echo $row['Mo_Name'];?></a></td>

  </tr>
  <?php endwhile;?>  
  <?php while($row=mysqli_fetch_array($result8)):?>
  <tr>
   
  <td style="text-align: center"><a href="brezza2.php"><?php echo $row['Mo_Name'];?></a></td>

  </tr>
  <?php endwhile;?>  
  </table>
</p>
<a class="home" href="index2.php"><< Home</a>
            </div>
    </div>
</div>
</body>
<?php
    // 5. Close database connection
    mysqli_close($connect);
?>