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


<?php

require("db_connect.php");

if(isset($_POST["btnsave"])){
	$id = $_POST["id"];
	$first = $_POST["first"];
	$last = $_POST["last"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$area = $_POST["area"];
	$country = $_POST["country"];
	$departure = $_POST["depart"];
	$ticket = $_POST["ticket"];
	$about = $_POST["about"];
	
	if($first == ""){
		echo "Please input valid First Name!";
	}else if($last == ""){
		echo "Please insert valid Last Name";
	}else if($email == ""){
		echo "Please insert valid email";
	}else if($mobile == ""){
		echo "Please insert valid mobile";
	}else if($area == ""){
		echo "Please insert valid Country";
	}else if($country == ""){
		echo "Please insert valid Country";
	}else if($departure == ""){
		echo "Please insert valid departure date";
	}else if($ticket == ""){
		echo "Please insert valid ticket";
	}else if($about == ""){
		echo "Please insert valid about";
	}else{
		
	
	$sql = "UPDATE oneway SET first = :first, last = :last, email = :email, mobile = :mobile, area = :area, country = :country, departure = :departure, ticket = :ticket, about = :about WHERE id =:recordid"; 
	
	$result = $conn->prepare($sql);
	$values = array(":first"=>$first, ":last"=>$last, ":email"=>$email, ":mobile"=>$mobile, ":area"=>$area, ":country"=>$country, ":departure"=>$departure,  ":ticket"=>$ticket, ":about"=>$about, ":recordid"=>$id);
	
	$result->execute($values);

	if($result->rowCount()>0){
		echo"<script>alert('Record has been saved!'); window.location = 'table_oneway.php';</script>";
	}else{
		echo"<script>alert('No Record has been saved!'); </script>";
	}
	}
	
}

?>
<html>
<head><title One Way></title>
<<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="forcompany.css">
	<link rel="stylesheet" href="homepage.css">
	<link rel="stylesheet" href="AdminSignin.css">
	<script src="login.js"> </script>
	<script src="jump.js"> </script>
</head>
<body>

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
		FROM oneway WHERE id=:recordid";

	$id = "";
	$first = "";
	$last = "";
	$email = "";
	$mobile = "";
	$area = "";
	$country = "";
	$departure = "";
	$ticket = "";
	$about = "";
	
	try{
		
	$result = $conn->prepare($sql);
	$value =array(":recordid"=>$_REQUEST["id"]);
	
		try{
		
			$result->execute($value);
	
			$count=$result->rowCount();
	
	if($result->rowCount()>0){
		
		$i=1;
		$row = $result->fetch(PDO::FETCH_ASSOC);
		
	$id = $row["id"];
	$first = $row["first"];
	$last = $row["last"];
	$email = $row["email"];
	$mobile = $row["mobile"];
	$area = $row["area"];
	$country = $row["country"];
	$departure = $row["departure"];
	$ticket = $row["ticket"];
	$about = $row["about"];
		
		}
	}catch(PDOException $e){
		die("An error has been occured!");
	}
	}
	catch(PDOException $e){
		die("An error has been occured!");
	}

?>

<html>

<head><title></title>  <meta charset="utf-8">
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
		<style type = "text/css">
	*{
		margin: 0;
		padding: 0;

	}
	body{
		background-image: url(100.png);
		background-position: center;
		background-size: cover;
		font-family: sans-serif;
		margin-top: 40px;
		background-color: white;

	}
	.bookform{
			width: 800px;
		background-color: rgb(0,0,0,0.6);
		margin: auto;
		color: #FFFFFF;
		padding: 10px 0px 10px 0px;
		text-align: center;
		 border-radius: 15px 15px 0px 0px;

	}
	.main{
	width: 800px;
		margin: auto;
		background-color: rgb(0,0,0,0.5);
	}
	.header{
		background-color: skyblue;
		padding: 20px;
		text-align: center;
		margin: auto;
		font-size: 20px;
	}
	.form{
		padding: 10px;
		border-radius: 10px;
	}
	#name{
		width: 100px;
		height: 100px;
	}
	.name{
		margin-left: 25px;
		margin-top: 30px;
		width: 125px;
		color: white;
		font-size: 18px;
		font-weight: 700;
	}
	.firstname{
		position: relative;
		left: 200px;
		top: -20px;
		line-height: 40px;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 16px;
	}
	.lastname{
		position: relative;
		left:465px;
		top:-65px;
		line-height:40px;
		border-radius:6px;
		padding:0 22px;
		font-size:16px;
		color: #555;
	}
	.neym{
		position: relative;
		color: whitesmoke;
		text-transform: capitalize;
		font-size: 20px;
		left: 30px;
		top: 20px;
	}
	
	.email{
		position: relative;
		left: 200px;
		top: -36;
		line-height: 40px;
		width: 500;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 15px;
		color: #555;
	}
	
	.mobile{
		position: relative;
		left: 200px;
		top: -55;
		line-height: 40px;
		width: 500;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 15px;
		color: #555;
	}
	.phone-number{
		position: relative;
		color: whitesmoke;
		text-transform: capitalize;
		font-size: 16px;
		left: -125px;
		top: -4px;
	}
	.deptdate{
		position: relative;
		left: 60px;
		top: 5;
		line-height: 40px;
		width:170	;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 15px;
		color: #555;
	}
	.retdate{
		position: relative;
		left: 80px;
		top: 5;
		line-height: 40px;
		width:170	;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 15px;
		color: #555;
	}
	
	.tocountry{
		position: relative;
		left: 60px;
		top: 5;
		line-height: 40px;
		width:180	;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 15px;
		color: #555;
	}
	.fromcountry{
		position: relative;
		left: 100px;
		top: 5;
		line-height: 40px;
		width:250	;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 15px;
		color: #555;
	}
	.departure{
		position: relative;
		color: whitesmoke;
		text-transform: capitalize;
		font-size: 20px;
		left: 20px;
		top: -4px;
	}
	.to{
		position: relative;
		color: whitesmoke;
		text-transform: capitalize;
		font-size: 20px;
		left: 50px;
		top: -4px;
	}
	.from{
		position: relative;
		color: whitesmoke;
		text-transform: capitalize;
		font-size: 20px;
		left:200px;
		top: -4px;
	}
	
	.return{
		position: relative;
		color: whitesmoke;
		text-transform: capitalize;
		font-size: 20px;
		left: 70px;
		top: -4px;
	}
	.foot{
		font color: white;
		background-color: skyblue;
		padding: 20px 10px 10px 10px;
		text-align: center;
		font-size: 15px;
		
	}
	.time{
		position: relative;
		left: 80px;
		top: 5;
		line-height: 40px;
		width:155;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 15px;
		color: #555;
	}
	.passenger{
		position: relative;
		left:200px;
		top: -50;
		line-height: 40px;
		width:180;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 15px;
		color: #555;
	}
	.form1{
		position: relative;
		left:180px;
		top: -2;
		line-height: 40px;
		width:170;
		border-radius: 6px;
		padding: 10px;
		font-size: 15px;
		color: #555;
	}
	.form2{
		position: relative;
		left:260px;
		top: -2;
		line-height: 40px;
		width:170;
		border-radius: 6px;
		padding: 10px;
		font-size: 15px;
		color: #555;
	}
	.ticket{
		position: relative;
		color: whitesmoke;
		text-transform: capitalize;
		font-size: 20px;
		left: 80px;
		top: 0px;
		}
		.option{
		position: relative;
		left: 135px;
		top: 0;
		line-height: 40px;
		width:180	;
		border-radius: 6px;
		padding: 10px;
		font-size: 15px;
		color: #555;
	}
	

		.concern{
		position: relative;
		color: whitesmoke;
		text-transform: capitalize;
		font-size: 20px;
		left: 20px;
		top: 20px;
	}
	.about{
		position: relative;
		left: 60	;
		top: 20;
		line-height: 40px;
		width:385;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 15px;
		color: #555;

	}

		

button{
background-color: #3BAF9F;
display: block;
margin: 20px 0px 0px 20px;
text-align: center;
border-radius: 12px
border: 2px solid #366473;
padding: 14px 110px;
outline: none;
color: white;
cursor: pointer;
transition:0.25px;
}
button:hover{
	background-color:#5390f
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
		<h1 align="center">United Airlines</h1> 
		<p>Adventure is Worthwhile</p> 
	</div>
		</div><br>



<div class = "bookform"><h1>One-Way Form</h1></div>
<div class = "main">
<form action = "oneway_edit.php" method = "post">
<input type = "hidden" name = "id" value = "<?php echo $id; ?>">

<div id = "name">
	<label class = "neym">Name</label>
	<input class = "Firstname" type = "text" value = "<?php echo $first; ?>" placeholder="First Name" name = "first">
	<input class = "Lastname" type = "text" value = "<?php echo $last; ?>" placeholder="Last Name" name = "last">

</div>


<h2 class = "name">Email Address</h2>
<input class = "email" type = "email" value = "<?php echo $email; ?>" placeholder="@gmail/yahoo.com" name = "email">

<h2 class = "name">Mobile/Phone Number</h2>
<input class = "mobile" type = "text" value = "<?php echo $mobile; ?>" placeholder="Phone-number" name = "mobile"><br>
<div id = "country">

<label class = "to">To</label>
<select class="form1" type = "tocountry"  name = "area" aria-label=".form-select-lg example">
  <option disabled="disabled" selected = "selected">Country</option>
   <option value="China"<?php echo ($area == "China" ? "selected = 'selected'" : ""); ?>>China</option>
  <option value="India"<?php echo ($area == "India" ? "selected = 'selected'" : ""); ?>>India</option>
  <option value="United States"<?php echo ($area == "United States" ? "selected = 'selected'" : ""); ?>>	United States</option>
  <option value="Indonesia"<?php echo ($area == "Indonesia" ? "selected = 'selected'" : ""); ?>>	Indonesia</option>
  <option value="Pakistan"<?php echo ($area == "Pakistan" ? "selected = 'selected'" : ""); ?>>Pakistan</option>
  <option value="Brazil"<?php echo ($area == "Brazil" ? "selected = 'selected'" : ""); ?>>	Brazil</option>
  <option value="Nigeria"<?php echo ($area == "Nigeria" ? "selected = 'selected'" : ""); ?>>	Nigeria</option>
  <option value="Bangladesh"<?php echo ($area == "Bangladesh" ? "selected = 'selected'" : ""); ?>>Bangladesh</option>
   <option value="Russia"<?php echo ($area == "Russia" ? "selected = 'selected'" : ""); ?>>	Russia</option>
  <option value="Mexico"<?php echo ($area == "Mexico" ? "selected = 'selected'" : ""); ?>>	Mexico</option>
  <option value="Japan"<?php echo ($area == "Japan" ? "selected = 'selected'" : ""); ?>>		Japan</option>
  <option value="Ethiopia"<?php echo ($area == "Ethiopia" ? "selected = 'selected'" : ""); ?>>		Ethiopia</option>
  <option value="Philippines"<?php echo ($area == "Philippines" ? "selected = 'selected'" : ""); ?>>Philippines</option>
  <option value="Egypt"<?php echo ($area == "Egypt" ? "selected = 'selected'" : ""); ?>>		Egypt</option>
  <option value="Vietnam"<?php echo ($area == "Vietnam" ? "selected = 'selected'" : ""); ?>>		Vietnam</option>
   <option value="DR Congo"<?php echo ($area == "DR Congo" ? "selected = 'selected'" : ""); ?>>	DR Congo</option>
  <option value="Turkey" <?php echo ($area == "Turkey" ? "selected = 'selected'" : ""); ?>>Turkey</option>
  <option value="Iran"<?php echo ($area == "Iran" ? "selected = 'selected'" : ""); ?>>		Iran</option>
  <option value="Indonesia"<?php echo ($area == "Indonesia" ? "selected = 'selected'" : ""); ?>>	Indonesia</option>
  <option value="Germany"<?php echo ($area == "Germany" ? "selected = 'selected'" : ""); ?>>	Germany</option>
  <option value="Thailand"<?php echo ($area == "Thailand" ? "selected = 'selected'" : ""); ?>>		Thailand</option>
  <option value="United Kingdom"<?php echo ($area == "United Kingdom" ? "selected = 'selected'" : ""); ?>>		United Kingdom</option>
  <option value="France"<?php echo ($area == "France" ? "selected = 'selected'" : ""); ?>>	France</option>
    <option value="Italy"<?php echo ($area == "Italy" ? "selected = 'selected'" : ""); ?>>	Italy</option>
  <option value="Tanzania"<?php echo ($area == "Tanzania" ? "selected = 'selected'" : ""); ?>>Tanzania</option>
  <option value="South Africa"<?php echo ($area == "South Africa" ? "selected = 'selected'" : ""); ?>>South Africa</option>
  <option value="Myanmar"<?php echo ($area == "Myanmar" ? "selected = 'selected'" : ""); ?>>		Myanmar</option>
  <option value="Kenya"<?php echo ($area == "Kenya" ? "selected = 'selected'" : ""); ?>>	Kenya</option>
  <option value="South Korea"<?php echo ($area == "South Korea" ? "selected = 'selected'" : ""); ?>>	South Korea</option>
  <option value="Colombia"<?php echo ($area == "Colombia" ? "selected = 'selected'" : ""); ?>>	Colombia</option>
  <option value="Spain"<?php echo ($area == "Spain" ? "selected = 'selected'" : ""); ?>>	Spain</option>
   <option value="Uganda"<?php echo ($area == "Uganda" ? "selected = 'selected'" : ""); ?>>	Uganda</option>
  <option value="Argentina"<?php echo ($area == "Argentina" ? "selected = 'selected'" : ""); ?>>	Argentina</option>
  <option value="Algeria"<?php echo ($area == "Algeria" ? "selected = 'selected'" : ""); ?>>			Algeria</option>
  <option value="Sudan"<?php echo ($area == "Sudan" ? "selected = 'selected'" : ""); ?>>			Sudan</option>
  <option value="Ukraine"<?php echo ($area == "Ukraine" ? "selected = 'selected'" : ""); ?>>Ukraine</option>
  <option value="Iraq"<?php echo ($area == "Iraq" ? "selected = 'selected'" : ""); ?>>			Iraq</option>
  <option value="Afghanistan"<?php echo ($area == "Afghanistan" ? "selected = 'selected'" : ""); ?>>		Afghanistan</option>
  <option value="Poland"<?php echo ($area == "Poland" ? "selected = 'selected'" : ""); ?>>Poland</option>
   <option value="Canada"<?php echo ($area == "Canada" ? "selected = 'selected'" : ""); ?>>		Canada</option>
  <option value="Morocco"<?php echo ($area == "Morocco" ? "selected = 'selected'" : ""); ?>>	Morocco</option>
  <option value="Saudi Arabia"<?php echo ($area == "Saudi Arabia" ? "selected = 'selected'" : ""); ?>>		Saudi Arabia</option>
  <option value="Uzbekistan"<?php echo ($area == "Uzbekistan" ? "selected = 'selected'" : ""); ?>>	Uzbekistan</option>
  <option value="Peru"<?php echo ($area == "Peru" ? "selected = 'selected'" : ""); ?>>		Peru</option>
  <option value="Angola"<?php echo ($area == "Angola" ? "selected = 'selected'" : ""); ?>>		Angola</option>
  <option value="Malaysia"<?php echo ($area == "Malaysia" ? "selected = 'selected'" : ""); ?>>		Malaysia</option>
  <option value="Venezuela"<?php echo ($area == "Venezuela" ? "selected = 'selected'" : ""); ?>>	Venezuela</option>
  <option value="Madagascar"<?php echo ($area == "Madagascar" ? "selected = 'selected'" : ""); ?>>Madagascar</option>
  <option value="Cameroon"<?php echo ($area == "Cameroon" ? "selected = 'selected'" : ""); ?>>	Cameroon</option>
  <option value="North Korea"<?php echo ($area == "North Korea" ? "selected = 'selected'" : ""); ?>>		North Korea</option>
  <option value="Australia"<?php echo ($area == "Australia" ? "selected = 'selected'" : ""); ?>>		Australia</option>
  <option value="Nigeria"<?php echo ($area == "Nigeria" ? "selected = 'selected'" : ""); ?>>Niger</option>
  <option value="Sri Lanka"<?php echo ($area == "Sri Lanka" ? "selected = 'selected'" : ""); ?>>		Sri Lanka</option>
  <option value="Mali"<?php echo ($area == "Mali" ? "selected = 'selected'" : ""); ?>>		Mali</option>
  <option value="Romania"<?php echo ($area == "Romania" ? "selected = 'selected'" : ""); ?>>	Romania</option>
   <option value="Chile"<?php echo ($area == "Chile" ? "selected = 'selected'" : ""); ?>>		Chile</option>
  <option value="Kazakhstan"<?php echo ($area == "Kazakhstan" ? "selected = 'selected'" : ""); ?>>	Kazakhstan</option>
  <option value="Zambia"<?php echo ($area == "Zambia" ? "selected = 'selected'" : ""); ?>>			Zambia</option>
  <option value="Senegal"<?php echo ($area == "Senegal" ? "selected = 'selected'" : ""); ?>>		Senegal</option>
  <option value="Jordan"<?php echo ($area == "Jordan" ? "selected = 'selected'" : ""); ?>>	Jordan</option>
  <option value="Greece"<?php echo ($area == "Greece" ? "selected = 'selected'" : ""); ?>>		Greece</option>
  <option value="Portugal"<?php echo ($area == "Portugal" ? "selected = 'selected'" : ""); ?>>			Portugal</option>
  <option value="United Arab Emirates"<?php echo ($area == "United Arab Emirates" ? "selected = 'selected'" : ""); ?>>	United Arab Emirates</option>
   <option value="Hungary"<?php echo ($area == "Hungary" ? "selected = 'selected'" : ""); ?>>Hungary</option>
  <option value="Turkey"<?php echo ($area == "Turkey" ? "selected = 'selected'" : ""); ?>>Turkey</option>
  <option value="Austria"<?php echo ($area == "Austria" ? "selected = 'selected'" : ""); ?>>			Austria</option>
  <option value="Switzerland"<?php echo ($area == "Switzerland" ? "selected = 'selected'" : ""); ?>>		Switzerland</option>
  <option value="Laos"<?php echo ($area == "Laos" ? "selected = 'selected'" : ""); ?>>		Laos</option>
  <option value="Singapore"<?php echo ($area == "Singapore" ? "selected = 'selected'" : ""); ?>>			Singapore</option>
  <option value="Denmark"<?php echo ($area == "Denmark" ? "selected = 'selected'" : ""); ?>>			Denmark</option>
  <option value="Finland"<?php echo ($area == "Finland" ? "selected = 'selected'" : ""); ?>>		Finland</option>
    <option value="Norway"<?php echo ($area == "Norway" ? "selected = 'selected'" : ""); ?>>		Norway</option>
  <option value="Oman"<?php echo ($area == "Oman" ? "selected = 'selected'" : ""); ?>>	Oman</option>
  <option value="Costa Rica"<?php echo ($area == "Costa Rica" ? "selected = 'selected'" : ""); ?>>		Costa Rica</option>
  <option value="Liberia"<?php echo ($area == "Liberia" ? "selected = 'selected'" : ""); ?>>			Liberia</option>
  <option value="Panama"<?php echo ($area == "Panama" ? "selected = 'selected'" : ""); ?>>	Panama</option>
  <option value="Croatia"<?php echo ($area == "Croatia" ? "selected = 'selected'" : ""); ?>>	Croatia</option>
  <option value="Armenia"<?php echo ($area == "Armenia" ? "selected = 'selected'" : ""); ?>>	Armenia</option>
   <option value="Jamaica"<?php echo ($area == "Economy" ? "selected = 'selected'" : ""); ?>>	Jamaica</option>
  <option value="Qatar"<?php echo ($area == "Qatar" ? "selected = 'selected'" : ""); ?>>	Qatar</option>
  <option value="Lithuania"<?php echo ($area == "Lithuania" ? "selected = 'selected'" : ""); ?>>			Lithuania</option>
  <option value="Slovenia"<?php echo ($area == "Slovenia" ? "selected = 'selected'" : ""); ?>>				Slovenia</option>
  <option value="Bahrain"<?php echo ($area == "Bahrain" ? "selected = 'selected'" : ""); ?>>Bahrain</option>
  <option value="Timor-Leste"<?php echo ($area == "Timor-Leste" ? "selected = 'selected'" : ""); ?>>			Timor-Leste</option>
  <option value="Cyprus"<?php echo ($area == "Cyprus" ? "selected = 'selected'" : ""); ?>>			Cyprus</option>
  <option value="Brunei"<?php echo ($area == "Brunei" ? "selected = 'selected'" : ""); ?>>Brunei</option>
   <option value="Iceland"<?php echo ($area == "Iceland" ? "selected = 'selected'" : ""); ?>>			Iceland</option>
  <option value="Samoa"<?php echo ($area == "Samoa" ? "selected = 'selected'" : ""); ?>>	Samoa</option>
  <option value="Grenada"<?php echo ($area == "Grenada" ? "selected = 'selected'" : ""); ?>>	Grenada</option>
  <option value="Bahamas"<?php echo ($area == "Bahamas" ? "selected = 'selected'" : ""); ?>>		Bahamas</option>

</select>

<label class = "from">From</label>
<select class="form2" type = "fromcountry"  name = "country" aria-label=".form-select-lg example">
 <option disabled="disabled" selected = "selected">Country</option>
  <option value="China"<?php echo ($country == "China" ? "selected = 'selected'" : ""); ?>>China</option>
  <option value="India"<?php echo ($country == "India" ? "selected = 'selected'" : ""); ?>>India</option>
  <option value="United States"<?php echo ($country == "United States" ? "selected = 'selected'" : ""); ?>>	United States</option>
  <option value="Indonesia"<?php echo ($country == "Indonesia" ? "selected = 'selected'" : ""); ?>>	Indonesia</option>
  <option value="Pakistan"<?php echo ($country == "Pakistan" ? "selected = 'selected'" : ""); ?>>Pakistan</option>
  <option value="Brazil"<?php echo ($country == "Brazil" ? "selected = 'selected'" : ""); ?>>	Brazil</option>
  <option value="Nigeria"<?php echo ($country == "Nigeria" ? "selected = 'selected'" : ""); ?>>	Nigeria</option>
  <option value="Bangladesh"<?php echo ($country == "Bangladesh" ? "selected = 'selected'" : ""); ?>>Bangladesh</option>
   <option value="Russia"<?php echo ($country == "Russia" ? "selected = 'selected'" : ""); ?>>	Russia</option>
  <option value="Mexico"<?php echo ($country == "Mexico" ? "selected = 'selected'" : ""); ?>>	Mexico</option>
  <option value="Japan"<?php echo ($country == "Japan" ? "selected = 'selected'" : ""); ?>>		Japan</option>
  <option value="Ethiopia"<?php echo ($country == "Ethiopia" ? "selected = 'selected'" : ""); ?>>		Ethiopia</option>
  <option value="Philippines"<?php echo ($country == "Philippines" ? "selected = 'selected'" : ""); ?>>Philippines</option>
  <option value="Egypt"<?php echo ($country == "Egypt" ? "selected = 'selected'" : ""); ?>>		Egypt</option>
  <option value="Vietnam"<?php echo ($country == "Vietnam" ? "selected = 'selected'" : ""); ?>>		Vietnam</option>
   <option value="DR Congo"<?php echo ($country == "DR Congo" ? "selected = 'selected'" : ""); ?>>	DR Congo</option>
  <option value="Turkey" <?php echo ($country == "Turkey" ? "selected = 'selected'" : ""); ?>>Turkey</option>
  <option value="Iran"<?php echo ($country == "Iran" ? "selected = 'selected'" : ""); ?>>		Iran</option>
  <option value="Indonesia"<?php echo ($country == "Indonesia" ? "selected = 'selected'" : ""); ?>>	Indonesia</option>
  <option value="Germany"<?php echo ($country == "Germany" ? "selected = 'selected'" : ""); ?>>	Germany</option>
  <option value="Thailand"<?php echo ($country == "Thailand" ? "selected = 'selected'" : ""); ?>>		Thailand</option>
  <option value="United Kingdom"<?php echo ($country == "United Kingdom" ? "selected = 'selected'" : ""); ?>>		United Kingdom</option>
  <option value="France"<?php echo ($country == "France" ? "selected = 'selected'" : ""); ?>>	France</option>
    <option value="Italy"<?php echo ($country == "Italy" ? "selected = 'selected'" : ""); ?>>	Italy</option>
  <option value="Tanzania"<?php echo ($country == "Tanzania" ? "selected = 'selected'" : ""); ?>>Tanzania</option>
  <option value="South Africa"<?php echo ($country == "South Africa" ? "selected = 'selected'" : ""); ?>>South Africa</option>
  <option value="Myanmar"<?php echo ($country == "Myanmar" ? "selected = 'selected'" : ""); ?>>		Myanmar</option>
  <option value="Kenya"<?php echo ($country == "Kenya" ? "selected = 'selected'" : ""); ?>>	Kenya</option>
  <option value="South Korea"<?php echo ($country == "South Korea" ? "selected = 'selected'" : ""); ?>>	South Korea</option>
  <option value="Colombia"<?php echo ($country == "Colombia" ? "selected = 'selected'" : ""); ?>>	Colombia</option>
  <option value="Spain"<?php echo ($country == "Spain" ? "selected = 'selected'" : ""); ?>>	Spain</option>
   <option value="Uganda"<?php echo ($country == "Uganda" ? "selected = 'selected'" : ""); ?>>	Uganda</option>
  <option value="Argentina"<?php echo ($country == "Argentina" ? "selected = 'selected'" : ""); ?>>	Argentina</option>
  <option value="Algeria"<?php echo ($country == "Algeria" ? "selected = 'selected'" : ""); ?>>			Algeria</option>
  <option value="Sudan"<?php echo ($country == "Sudan" ? "selected = 'selected'" : ""); ?>>			Sudan</option>
  <option value="Ukraine"<?php echo ($country == "Ukraine" ? "selected = 'selected'" : ""); ?>>Ukraine</option>
  <option value="Iraq"<?php echo ($country == "Iraq" ? "selected = 'selected'" : ""); ?>>			Iraq</option>
  <option value="Afghanistan"<?php echo ($country == "Afghanistan" ? "selected = 'selected'" : ""); ?>>		Afghanistan</option>
  <option value="Poland"<?php echo ($country == "Poland" ? "selected = 'selected'" : ""); ?>>Poland</option>
   <option value="Canada"<?php echo ($country == "Canada" ? "selected = 'selected'" : ""); ?>>		Canada</option>
  <option value="Morocco"<?php echo ($country == "Morocco" ? "selected = 'selected'" : ""); ?>>	Morocco</option>
  <option value="Saudi Arabia"<?php echo ($country == "Saudi Arabia" ? "selected = 'selected'" : ""); ?>>		Saudi Arabia</option>
  <option value="Uzbekistan"<?php echo ($country == "Uzbekistan" ? "selected = 'selected'" : ""); ?>>	Uzbekistan</option>
  <option value="Peru"<?php echo ($country == "Peru" ? "selected = 'selected'" : ""); ?>>		Peru</option>
  <option value="Angola"<?php echo ($country == "Angola" ? "selected = 'selected'" : ""); ?>>		Angola</option>
  <option value="Malaysia"<?php echo ($country == "Malaysia" ? "selected = 'selected'" : ""); ?>>		Malaysia</option>
  <option value="Venezuela"<?php echo ($country == "Venezuela" ? "selected = 'selected'" : ""); ?>>	Venezuela</option>
  <option value="Madagascar"<?php echo ($country == "Madagascar" ? "selected = 'selected'" : ""); ?>>Madagascar</option>
  <option value="Cameroon"<?php echo ($country == "Cameroon" ? "selected = 'selected'" : ""); ?>>	Cameroon</option>
  <option value="North Korea"<?php echo ($country == "North Korea" ? "selected = 'selected'" : ""); ?>>		North Korea</option>
  <option value="Australia"<?php echo ($country == "Australia" ? "selected = 'selected'" : ""); ?>>		Australia</option>
  <option value="Nigeria"<?php echo ($country == "Nigeria" ? "selected = 'selected'" : ""); ?>>Nigeria</option>
  <option value="Sri Lanka"<?php echo ($country == "Sri Lanka" ? "selected = 'selected'" : ""); ?>>		Sri Lanka</option>
  <option value="Mali"<?php echo ($country == "Mali" ? "selected = 'selected'" : ""); ?>>		Mali</option>
  <option value="Romania"<?php echo ($country == "Romania" ? "selected = 'selected'" : ""); ?>>	Romania</option>
   <option value="Chile"<?php echo ($country == "Chile" ? "selected = 'selected'" : ""); ?>>		Chile</option>
  <option value="Kazakhstan"<?php echo ($country == "Kazakhstan" ? "selected = 'selected'" : ""); ?>>	Kazakhstan</option>
  <option value="Zambia"<?php echo ($country == "Zambia" ? "selected = 'selected'" : ""); ?>>			Zambia</option>
  <option value="Senegal"<?php echo ($country == "Senegal" ? "selected = 'selected'" : ""); ?>>		Senegal</option>
  <option value="Jordan"<?php echo ($country == "Jordan" ? "selected = 'selected'" : ""); ?>>	Jordan</option>
  <option value="Greece"<?php echo ($country == "Greece" ? "selected = 'selected'" : ""); ?>>		Greece</option>
  <option value="Portugal"<?php echo ($country == "Portugal" ? "selected = 'selected'" : ""); ?>>			Portugal</option>
  <option value="United Arab Emirates"<?php echo ($country == "United Arab Emirates" ? "selected = 'selected'" : ""); ?>>	United Arab Emirates</option>
   <option value="Hungary"<?php echo ($country == "Hungary" ? "selected = 'selected'" : ""); ?>>Hungary</option>
  <option value="Turkey"<?php echo ($country == "Turkey" ? "selected = 'selected'" : ""); ?>>Turkey</option>
  <option value="Austria"<?php echo ($country == "Austria" ? "selected = 'selected'" : ""); ?>>			Austria</option>
  <option value="Switzerland"<?php echo ($country == "Switzerland" ? "selected = 'selected'" : ""); ?>>		Switzerland</option>
  <option value="Laos"<?php echo ($country == "Laos" ? "selected = 'selected'" : ""); ?>>		Laos</option>
  <option value="Singapore"<?php echo ($country == "Singapore" ? "selected = 'selected'" : ""); ?>>			Singapore</option>
  <option value="Denmark"<?php echo ($country == "Denmark" ? "selected = 'selected'" : ""); ?>>			Denmark</option>
  <option value="Finland"<?php echo ($country == "Finland" ? "selected = 'selected'" : ""); ?>>		Finland</option>
    <option value="Norway"<?php echo ($country == "Norway" ? "selected = 'selected'" : ""); ?>>		Norway</option>
  <option value="Oman"<?php echo ($country == "Oman" ? "selected = 'selected'" : ""); ?>>	Oman</option>
  <option value="Costa Rica"<?php echo ($country == "Costa Rica" ? "selected = 'selected'" : ""); ?>>		Costa Rica</option>
  <option value="Liberia"<?php echo ($country == "Liberia" ? "selected = 'selected'" : ""); ?>>			Liberia</option>
  <option value="Panama"<?php echo ($country == "Panama" ? "selected = 'selected'" : ""); ?>>	Panama</option>
  <option value="Croatia"<?php echo ($country == "Croatia" ? "selected = 'selected'" : ""); ?>>	Croatia</option>
  <option value="Armenia"<?php echo ($country == "Armenia" ? "selected = 'selected'" : ""); ?>>	Armenia</option>
   <option value="Jamaica"<?php echo ($country == "Economy" ? "selected = 'selected'" : ""); ?>>	Jamaica</option>
  <option value="Qatar"<?php echo ($country == "Qatar" ? "selected = 'selected'" : ""); ?>>	Qatar</option>
  <option value="Lithuania"<?php echo ($country == "Lithuania" ? "selected = 'selected'" : ""); ?>>			Lithuania</option>
  <option value="Slovenia"<?php echo ($country == "Slovenia" ? "selected = 'selected'" : ""); ?>>				Slovenia</option>
  <option value="Bahrain"<?php echo ($country == "Bahrain" ? "selected = 'selected'" : ""); ?>>Bahrain</option>
  <option value="Timor-Leste"<?php echo ($country == "Timor-Leste" ? "selected = 'selected'" : ""); ?>>			Timor-Leste</option>
  <option value="Cyprus"<?php echo ($country == "Cyprus" ? "selected = 'selected'" : ""); ?>>			Cyprus</option>
  <option value="Brunei"<?php echo ($country == "Brunei" ? "selected = 'selected'" : ""); ?>>Brunei</option>
   <option value="Iceland"<?php echo ($country == "Iceland" ? "selected = 'selected'" : ""); ?>>			Iceland</option>
  <option value="Samoa"<?php echo ($country == "Samoa" ? "selected = 'selected'" : ""); ?>>	Samoa</option>
  <option value="Grenada"<?php echo ($country == "Grenada" ? "selected = 'selected'" : ""); ?>>	Grenada</option>
  <option value="Bahamas"<?php echo ($country == "Bahamas" ? "selected = 'selected'" : ""); ?>>		Bahamas</option>

</select><br><br><br>


<label class = "departure">Departure Date</label>
<input class = "deptdate" type = "date" value = "<?php echo $departure; ?>" name = "depart">

<label class = "ticket">Class</label>
<select class = "option" name = "ticket">
				<option disabled="disabled" selected = "selected">Choose Option</option>
				<option value = "Economy"<?php echo ($ticket == "Economy" ? "selected = 'selected'" : ""); ?>>Economy</option>
				<option value = "Bussiness"<?php echo ($ticket == "Bussiness" ? "selected = 'selected'" : ""); ?>>Bussiness</option>
				<option value = "Deluxe"<?php echo ($ticket == "Deluxe" ? "selected = 'selected'" : ""); ?>>Deluxe</option>
				<option value = "First Class"<?php echo ($ticket == "First Class" ? "selected = 'selected'" : ""); ?>>First Class</option>
</select><br><br>

<label class = "concern">Other Concern</label>
<input class = "about" type = "text" value = "<?php echo $about; ?>" name = "about"><br><br><br>

	<button type = "submit" name = "btnsave">Register</button>
<div class="footer"><hr>

</div>
<footer class="foot">
		<a href="#signUpPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p>United Airlines.com</p>		
	</footer>
</form>

</body>
</html>