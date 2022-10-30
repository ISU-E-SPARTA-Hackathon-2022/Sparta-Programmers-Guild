<?php

session_start();

?>
<?php


if(isset($_POST["btnsave"])){
	$first = $_POST["first"];
	$last = $_POST["last"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$area = $_POST["area"];
	$country = $_POST["country"];
	$departure = $_POST["depart"];
	$ticket = $_POST["ticket"];
	$about = $_POST["about"];
	
	require("db_connect.php");
	
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
		
	
	$sql = "INSERT INTO oneway(first, last,  email, mobile, area, country, departure, ticket, about) VALUES(:first, :last, :email, :mobile, :area, :country, :departure, :ticket, :about)";
	
	$result = $conn->prepare($sql);
	$values = array(":first"=>$first, ":last"=>$last, ":email"=>$email, ":mobile"=>$mobile,":area"=>$area,":country"=>$country, ":departure"=>$departure,":ticket"=>$ticket, ":about"=>$about);
	
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
		font color: white;
	
	}
	.foot{
		font color: white;
		background-color: skyblue;
		padding: 20px 10px 10px 10px;
		text-align: center;
		font-size: 15px;
		
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
		background-image: url();
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
		border-radius: 15px 15px 0px 0px;
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
		left: -189px;
		top: 5;
		line-height: 40px;
		width:200	;
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
		left: 10px;
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
		left: -210px;
		top: -4px;
	}
	.to{
		position: relative;
		color: whitesmoke;
		text-transform: capitalize;
		font-size: 20px;
		left: 35px;
		top: -4px;
	}
	.from{
		position: relative;
		color: whitesmoke;
		text-transform: capitalize;
		font-size: 20px;
		left:230px;
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
		left: 430px;
		top: 3px;
		}
		.option{
		position: relative;
		left: 450px;
		top: 3;
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
		left: 30px;
		top: 10px;
	}
	.about{
		position: relative;
		left: 55	;
		top: 10;
		line-height: 40px;
		width:385;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 15px;
		color: #555;

	}
	footer{
		padding-top: 30;
		width: 100;
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
<form action = "oneway.php" method = "post">

<div id = "name">
	<label class = "neym">Name</label>
	<input class = "Firstname" type = "text" placeholder="First Name" name = "first">
	<input class = "Lastname" type = "text" placeholder="Last Name" name = "last">

</div>


<h2 class = "name">Email Address</h2>
<input class = "email" type = "email" placeholder="@gmail/yahoo.com" name = "email">

<h2 class = "name">Mobile/Phone Number</h2>
<input class = "mobile" type = "text" placeholder="Phone-number" name = "mobile"><br>
<div id = "country">
<label class = "to">To</label>
<select class="form1" type = "text" name = "area" aria-label=".form-select-lg example">
  <option disabled="disabled" selected = "selected">Country</option>
  <option value="China">China</option>
  <option value="India">India</option>
  <option value="United States">	United States</option>
  <option value="Indonesia">	Indonesia</option>
  <option value="Pakistan">Pakistan</option>
  <option value="Brazil">	Brazil</option>
  <option value="Nigeria">	Nigeria</option>
  <option value="Bangladesh">Bangladesh</option>
   <option value="Russia">	Russia</option>
  <option value="Mexico">	Mexico</option>
  <option value="Japan">		Japan</option>
  <option value="Ethiopia">		Ethiopia</option>
  <option value="Philippines">Philippines</option>
  <option value="Egypt">		Egypt</option>
  <option value="Vietnam">		Vietnam</option>
  <option value="Bangladesh">Bangladesh</option>
   <option value="DR Congo">	DR Congo</option>
  <option value="Turkey">Turkey</option>
  <option value="Iran">		Iran</option>
  <option value="Indonesia">	Indonesia</option>
  <option value="Germany">	Germany</option>
  <option value="Thailand">		Thailand</option>
  <option value="United Kingdom">		United Kingdom</option>
  <option value="France">	France</option>
    <option value="Italy">	Italy</option>
  <option value="Tanzania">Tanzania</option>
  <option value="South Africa">South Africa</option>
  <option value="Myanmar">		Myanmar</option>
  <option value="Kenya">	Kenya</option>
  <option value="South Korea">	South Korea</option>
  <option value="Colombia">	Colombia</option>
  <option value="Spain">	Spain</option>
   <option value="Uganda">	Uganda</option>
  <option value="Argentina">	Argentina</option>
  <option value="Algeria">			Algeria</option>
  <option value="Sudan">			Sudan</option>
  <option value="Ukraine">Ukraine</option>
  <option value="Iraq">			Iraq</option>
  <option value="Afghanistan">		Afghanistan</option>
  <option value="Poland">Poland</option>
   <option value="Canada">		Canada</option>
  <option value="Morocco">	Morocco</option>
  <option value="Saudi Arabia">		Saudi Arabia</option>
  <option value="Uzbekistan">	Uzbekistan</option>
  <option value="Peru">		Peru</option>
  <option value="Angola">		Angola</option>
  <option value="Malaysia">		Malaysia</option>
  <option value="Venezuela">	Venezuela</option>
  <option value="Madagascar">Madagascar</option>
  <option value="Cameroon">	Cameroon</option>
  <option value="North Korea">		North Korea</option>
  <option value="Australia">		Australia</option>
  <option value="Niger">Niger</option>
  <option value="Sri Lanka">		Sri Lanka</option>
  <option value="Mali">		Mali</option>
  <option value="Romania">	Romania</option>
   <option value="Chile">		Chile</option>
  <option value="Kazakhstan">	Kazakhstan</option>
  <option value="Zambia">			Zambia</option>
  <option value="Senegal">		Senegal</option>
  <option value="Jordan">	Jordan</option>
  <option value="Greece">		Greece</option>
  <option value="Portugal">			Portugal</option>
  <option value="United Arab Emirates">	United Arab Emirates</option>
   <option value="Hungary">Hungary</option>
  <option value="Turkey">Turkey</option>
  <option value="Austria">			Austria</option>
  <option value="Switzerland">		Switzerland</option>
  <option value="Laos">		Laos</option>
  <option value="Singapore">			Singapore</option>
  <option value="Denmark">			Denmark</option>
  <option value="Finland">		Finland</option>
    <option value="Norway">		Norway</option>
  <option value="Oman">	Oman</option>
  <option value="Costa Rica">		Costa Rica</option>
  <option value="Liberia">			Liberia</option>
  <option value="Panama">	Panama</option>
  <option value="Croatia">	Croatia</option>
  <option value="Armenia">	Armenia</option>
   <option value="Jamaica">	Jamaica</option>
  <option value="Qatar">	Qatar</option>
  <option value="Lithuania">			Lithuania</option>
  <option value="Slovenia">				Slovenia</option>
  <option value="Bahrain">Bahrain</option>
  <option value="Timor-Leste">			Timor-Leste</option>
  <option value="Cyprus">			Cyprus</option>
  <option value="Brunei">Brunei</option>
   <option value="Iceland">			Iceland</option>
  <option value="Samoa">	Samoa</option>
  <option value="Grenada">	Grenada</option>
  <option value="Bahamas">		Bahamas</option>

</select>

<label class = "from">From</label>
<select class="form2" type = "text" name = "country" aria-label=".form-select-lg example">
 <option disabled="disabled" selected = "selected">Country</option>
  <option value="China">China</option>
  <option value="India">India</option>
  <option value="United States">	United States</option>
  <option value="Indonesia">	Indonesia</option>
  <option value="Pakistan">Pakistan</option>
  <option value="Brazil">	Brazil</option>
  <option value="Nigeria">	Nigeria</option>
  <option value="Bangladesh">Bangladesh</option>
   <option value="Russia">	Russia</option>
  <option value="Mexico">	Mexico</option>
  <option value="Japan">		Japan</option>
  <option value="Ethiopia">		Ethiopia</option>
  <option value="Philippines">Philippines</option>
  <option value="Egypt">		Egypt</option>
  <option value="Vietnam">		Vietnam</option>
  <option value="Bangladesh">Bangladesh</option>
   <option value="DR Congo">	DR Congo</option>
  <option value="Turkey">Turkey</option>
  <option value="Iran">		Iran</option>
  <option value="Indonesia">	Indonesia</option>
  <option value="Germany">	Germany</option>
  <option value="Thailand">		Thailand</option>
  <option value="United Kingdom">		United Kingdom</option>
  <option value="France">	France</option>
    <option value="Italy">	Italy</option>
  <option value="Tanzania">Tanzania</option>
  <option value="South Africa">South Africa</option>
  <option value="Myanmar">		Myanmar</option>
  <option value="Kenya">	Kenya</option>
  <option value="South Korea">	South Korea</option>
  <option value="Colombia">	Colombia</option>
  <option value="Spain">	Spain</option>
   <option value="Uganda">	Uganda</option>
  <option value="Argentina">	Argentina</option>
  <option value="Algeria">			Algeria</option>
  <option value="Sudan">			Sudan</option>
  <option value="Ukraine">Ukraine</option>
  <option value="Iraq">			Iraq</option>
  <option value="Afghanistan">		Afghanistan</option>
  <option value="Poland">Poland</option>
   <option value="Canada">		Canada</option>
  <option value="Morocco">	Morocco</option>
  <option value="Saudi Arabia">		Saudi Arabia</option>
  <option value="Uzbekistan">	Uzbekistan</option>
  <option value="Peru">		Peru</option>
  <option value="Angola">		Angola</option>
  <option value="Malaysia">		Malaysia</option>
  <option value="Venezuela">	Venezuela</option>
  <option value="Madagascar">Madagascar</option>
  <option value="Cameroon">	Cameroon</option>
  <option value="North Korea">		North Korea</option>
  <option value="Australia">		Australia</option>
  <option value="Niger">Niger</option>
  <option value="Sri Lanka">		Sri Lanka</option>
  <option value="Mali">		Mali</option>
  <option value="Romania">	Romania</option>
   <option value="Chile">		Chile</option>
  <option value="Kazakhstan">	Kazakhstan</option>
  <option value="Zambia">			Zambia</option>
  <option value="Senegal">		Senegal</option>
  <option value="Jordan">	Jordan</option>
  <option value="Greece">		Greece</option>
  <option value="Portugal">			Portugal</option>
  <option value="United Arab Emirates">	United Arab Emirates</option>
   <option value="Hungary">Hungary</option>
  <option value="Turkey">Turkey</option>
  <option value="Austria">			Austria</option>
  <option value="Switzerland">		Switzerland</option>
  <option value="Laos">		Laos</option>
  <option value="Singapore">			Singapore</option>
  <option value="Denmark">			Denmark</option>
  <option value="Finland">		Finland</option>
    <option value="Norway">		Norway</option>
  <option value="Oman">	Oman</option>
  <option value="Costa Rica">		Costa Rica</option>
  <option value="Liberia">			Liberia</option>
  <option value="Panama">	Panama</option>
  <option value="Croatia">	Croatia</option>
  <option value="Armenia">	Armenia</option>
   <option value="Jamaica">	Jamaica</option>
  <option value="Qatar">	Qatar</option>
  <option value="Lithuania">			Lithuania</option>
  <option value="Slovenia">				Slovenia</option>
  <option value="Bahrain">Bahrain</option>
  <option value="Timor-Leste">			Timor-Leste</option>
  <option value="Cyprus">			Cyprus</option>
  <option value="Brunei">Brunei</option>
   <option value="Iceland">			Iceland</option>
  <option value="Samoa">	Samoa</option>
  <option value="Grenada">	Grenada</option>
  <option value="Bahamas">		Bahamas</option>

</select><br><br><br>

<label class = "ticket">Class</label>
<select class = "option" name = "ticket">
				<option disabled="disabled" selected = "selected">Choose Option</option>
				<option value = "Economy">Economy</option>
				<option value = "Bussiness">Bussiness</option>
				<option value = "Deluxe">Deluxe</option>
				<option value = "First Class">First Class</option>
</select>

<label class = "departure">Departure Date</label>
<input class = "deptdate" type = "date" name = "depart"><br><br><br>

<label class = "concern">Other Concern</label>
<input class = "about" type = "text" name = "about"><br><br>

	<button type = "submit" name = "btnsave">Register</button>
<div class="footer"><br>

</div>


</form>
<div class="foot">
		<a href="home.php" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p>United Airlines.com</p>		
	</div>
</body>
</html>