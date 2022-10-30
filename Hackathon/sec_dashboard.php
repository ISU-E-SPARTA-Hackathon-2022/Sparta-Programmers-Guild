
<?php

session_start();

require("db_connect.php");
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="admin.css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.clipartkey.com/mpngs/m/228-2282541_isabela-cauayan-city-circle.png" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Dashboard</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Demography</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Demography</a></li>
          <li><a href="#">Population</a></li>
          <li><a href="#">Health & Nutrition</a></li>
          <li><a href="#">Housing</a></li>
          <li><a href="#">Water & Sanitation</a></li>
          <li><a href="#">Basic Education</a></li>
          <li><a href="#">Income & Livelihood</a></li>
          <li><a href="#">Peace and Order</a></li>
        </ul>
      </li>
      <li>

          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">PWD, Senior, Solo Parent</span>
          </a>
   
        <ul class="sub-menu">
          <li><a class="link_name" href="#">PWD, Senior, Solo Parent</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Agriculture</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Agriculture</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Filipino Overseas & Employment</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Filipino Overseas & Employment</a></li>
        </ul>
      </li>
      <li>
      
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Calamity</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Calamity</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">Enteprenurial</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Enteprenurial</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Garbage Collection</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Garbage Collection</a></li>
        </ul>
      </li>
      <li>

      <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Logs</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Logs</a></li>
        </ul>
      </li>

      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
    <h3>Log Out</h3>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Barangay Secretary Dashboard</span>
    </div>
    <div class ="text-right">
<a href="oneway.php" class="btn btn-md btn-primary" role="button" data-bs-toggle="button" aria-pressed="true">Add Record</a>

	<hr><table class="table table-success table-striped">
	
  <thead align="center">
    <tr >
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
  </section>

 


  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>
