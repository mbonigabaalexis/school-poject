

<?php
include('connect.php');
// view table
$query= 'SELECT * FROM  guests  ';
$result = mysqli_query($conn,$query);
$guests= mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
a:link {color: #000000}
a:visited {color: black}
a:hover {color: green}
body{
	margin-top: 5px;
	margin-bottom: 20px;
  margin-left: 50px;
  margin-right: 50px;
	border-top: 1px solid #00a2d1;
	border-left: 1px solid #00a2d1;
	border-right: 1px solid #00a2d1;
	border-bottom: 1px solid #00a2d1;*/"
	border-radius:8px;
	width: 1200px;
	background:linear-gradient(white,#5F9EA0);clear: both;
	height: 800px;

}
/*section{
  width: 100px;
box-shadow:2px 2px 2px 2px #008080;*/
}
#header{
	width: 1200px;
	height: 150px;
	background-color:#fff;
	box-shadow:1px 1px 1px 1px #008080;
	
}

r{
	position: fixed;
}
#navigation{
	width: 1200px;
  margin: 0px;
	height: 32px;
	 background-color:#000000;
	text-align: center;
	padding:  20px 0px;


}
#main{
	width: 185px;
  height: 380px;
  background-image:url(images/ma.png);
}
#content{
  width:170px;
  height:380px;
  background:none;margin-left:0px;
	box-shadow:1px 1px 1px 1px #008080;
  margin:0px;
  display: inline;
  }
#div3{
	width: 1200px;
  height: 600px;
  
  margin-top:8px;
  margin:0px;
  box-shadow:1px 1px 1px 1px #008080;
}
#navbar ul {
	margin:0;
	padding:0;
}
#navbar ul li {
	list-style-type:none;
	float:left;
	display:block;
	height:32px;
	text-align:center;
	line-height:32px;
	font-family:NewsTimes Roman;
	font-size:20px;
	margin: 10px 0px;
	padding: 0 20px;
}
#navbar ul li a {
	text-decoration:none;
	color:#fff;

}
#navbar ul li:hover {
	background:linear-gradient(RED,#00a2d1);
}
#navbar ul li:hover a {
	display:block;
}
.btn{
	float: right;
	color: green;
}
footer{
  margin:0px;
  margin-top: 5px;
  padding: 30px;
  background-color: #666;
}
.aside{
	float: right;

}
#wrapper{
						width:1200px;
						background-color: #e3e3e3;
						text-align: center;
				
			 }
			 h1{
				 color:tomato;

			 }

			 table{
					float: left;
						background: #fff;
						
						
			 }
			 table 
						background-color:#5F9EA0 ;
						color: #black;
						text-translate:UpperCase;
						
			 }
			 .
			 table tr{
						text-align: center;
			 }
			 img,.image{
						float:left;
						border-radius:10px;
						width: 90px;
			 }
</style>
	<title>NYABIHEKE HEALTH CENTER</title>
</head>
<body>
	<aside style="background:linear-gradient(white,#00a2d1);clear: both;">
<div id="header"><img src="image/algt.png" width="100" height="80" alt="min" class="img">
	<img
	src="image/min.jpg" width="100" height="80" alt="min"></div>
<div id="navigation">
<div id="navbar">
<ul>
<li><a href="homepage.php">Home</a></li>
<li><a href="patient.php">patient</a></li>
<li><a href="#">reception</a></li>
<li><a href="#">Consultaion</a></li>
<li><a href="#">appointment</a></li>
<li><a href="viewpatient.php">report</a></li>
<li><a class="btn" href="homepage.php">Logout</a></li>
</ul>
</div>
</div>

<div id="div3">

  <div id="main">

    	<div class="navbar" style="float:left;">

			<a href="nurserpage.php"><img src="image/BACK.gif" width="130px;" height="25px"style=" width:90px;border-radius:10px;"></a>
		</nav></div>
		<div id="search" style="float:left;margin: 0 800px">
				 <form action="search.php" method="GET">
		<input type="text" name="search" placeholder=" search..." style="border-radius:5px;height:25px ;width:200px; background:#fff;text-align:center;width:200px;" >
		<input type="submit" value="search" style="border-radius:10px;width:100px; height:30px;background-color:orange;color:#fff;" >
		</form>
		</div>



	<h1>Report of reception patient </h1>
<table cellpadding="5" cellspacing="0" border="1">
  <thead>

	<tr style="background-color: #666;color:#fff;" >
		<th style="background-color: orange;">NO</th>
		<th>First Name</th>
		<th>Last  Name</th>
		<th>Age</th>
		<th>Gender</th>
		<th>identify/ID</th>
		<th>Father Name</th>
		<th>Mother Name</th>
		<th>House Hold Number</th>
		<th>Quartie /<b>NO</b></th>
		<th>Place</th>
		<th style="background:red;color:green;">ACTION</th>


	</tr>
</thead>
	<tbody>
	<?php foreach ($guests as $guests): ?>
	<tr>
		<td style="background-color: black;color: white"><?php echo $guests['id']?></td>
		<td><?php echo $guests['firstname']?></td>
		<td><?php echo $guests['lastname']?></td>
		<td><?php echo $guests['age']?></td>
		<td><?php echo $guests['sex']?></td>
		<td><?php echo $guests['identify']?></td>
			<td><?php echo $guests['father']?></td>
				<td><?php echo $guests['mother']?></td>
		<td><?php echo $guests['house']?></td>
		<td><b><?php echo $guests['quartie']?></b></td>
		<td><?php echo $guests['place']?></td>
		<td style="background-color:black;"><a href="update.php?id=<?php echo $guests['id']?>"> <img src="image/update.png" width="70px" height="30px"></a><br>
			<a href="deletep.php?id=<?php echo $guests['id']?>"> <img src="image/delete.png" width="70px" height="30px"></a></td>


</tr>
<?php endforeach ?>
<tbody>
</table>
<button onclick="print_page()">print</button>
<script>
function print_page(){
	window.print();
}

</script>
</center>
<?php mysqli_close($conn);?>
</div>
  </div>

</div>
  </div>
  <footer>
     

    <footer>
    	</aside>
</body>
</html>
