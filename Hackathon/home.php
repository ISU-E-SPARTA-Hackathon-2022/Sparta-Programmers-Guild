<?php

session_start();

if(!isset($_SESSION["Username"])){
	header("location:index.php"); exit();
}

if(isset($_REQUEST["logout"])){
	session_destroy();
	header("location:logout.php"); exit();
}
require("db_connect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>United Airlines</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="forcompany.css">
	<link rel="stylesheet" href="homepage.css">
	<link rel="stylesheet" href="AdminSignin.css">
	
	<script src="login.js"> </script>
	<script src="jump.js"> </script>

	<style>
	body{
		background-image: url(100.png);
		background-position: center;
		background-size: cover;
	}
	.foot{
		background-color: skyblue;
		width: 1150px;
		text-align:center ;
		padding-top: 40px;
		padding-bottom: 40px;
		

	}

h4 {
	font-weight: bold;
}
</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a>				
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
		

					  <li class="dropdown" id = "old">
						<a class="dropdown-toggle" data-toggle="dropdown" href="home.php" ><span class="glyphicon glyphicon-user" id="wuser">Welcome!<?php echo $_SESSION["Username"];?></span>
						<span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
													
							<li><a href="home.php?logout=logout" id="logout">Log out</a></li>
						</ul>
						</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="jumbotron text-center">
		<h1 align="center">United Airlines</h1> 
		<p align="center">"Adventure is Worthwhile"</p>
	</div>

	<div class="container" id="homepage">
		<h1><b>Choose your flight option</b></h1>
		<br />
	
		<div class="btn-group btn-group-justified">			
			<div class="btn-group">
			<a href="oneway.php" class="btn btn-primary" role="button" data-bs-toggle="button">One way</a>
			</div>
			<div class="btn-group">
			<a href="roundtrip.php" class="btn btn-primary" role="button" data-bs-toggle="button">Round-trip</a>
			</div>
		</div>
		<hr /><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	
</body>
</html>