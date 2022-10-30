
<?php

session_start();

require("db_connect.php");
?>

<html>
<head></title></title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="forcompany.css">
	<link rel="stylesheet" href="homepage.css">

	
	<script src="login.js"> </script>


<style type = "text/css">

body{
		
		background-position: center;
		font-family: sans-serif;
		margin-top: 40px;
		background-color: whitesmoke;
		background-image: url(im.jpg);
		background-size: cover;
	}

	
	h1{
	
		padding: 5px 10px 5px 10px;
	}
	.header{
		padding-top: 20;
		padding-bottom: 20;
		background-color: lightblue;
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
		<div class="header">
		<h2 align="center">United Airlines</h2> 
		<p align="center">Adventure is Worthwhile</p>
	</div>
		</div><br>	

	
<h1 align="center">One-Way Table Form</h1>

<div class ="text-right">
<a href="oneway.php" class="btn btn-lg btn-primary" role="button" data-bs-toggle="button" aria-pressed="true">Add Record</a>
</div>
	<hr><table class="table table-dark table-striped">
	
  <thead align="center">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">To</th>
      <th scope="col">From</th>
      <th scope="col">Departure Date</th>
      <th scope="col">Class</th>
      <th scope="col">About</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  
  </tbody>


<?php
	$sql = "SELECT 
			id, 
			first, 
			last, 
			email,
			mobile, 
			area,
			country,
			departure,
			ticket,
			about
			FROM oneway";
	
	$result = $conn->prepare($sql);
	$result->execute();
	
	$count = $result->rowCount();
	
	if($result->rowCount()>0){
		
		$i=1;
		while ($row = $result->fetch(PDO::FETCH_ASSOC))
		{
			echo  "<tr>
						<td>" . $i . "</td>
						<td>" . $row['first'] . "</td>
						<td>" . $row['last'] . "</td>
						<td>" . $row['email'] . "</td>
						<td>" . $row['mobile'] . "</td>
						<td>" . $row['area'] . "</td>
						<td>" . $row['country'] . "</td>
						<td>" . $row['departure'] . "</td>
						<td>" . $row['ticket'] . "</td>
						<td>" . $row['about'] . "</td>
		<td>
		<a class = 'btn btn-warning' href = 'oneway_edit.php?id=" . $row['id'] . "'>Edit</a> | ";
	?>	
		<a class = 'btn btn-warning' href = 'deleting.php?id=<?php echo $row['id'];?>' onClick = "return confirm('Are you sure want to delete this record?')">Delete</a></td>
	<?php					
		echo  "</tr>";
		$i++;
		}
		echo "<tr><td colspan = '3'>Number of records: $count</td></tr>";
		
	}else
	{
		echo "<tr><td = colspan = '5'>No records found!</td></tr>";
	}

	
?>
	</tbody>
	
</table><hr>

</body>
</html>

