<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="../css/admin.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Admin Dashboard</span>
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
      <div class="name-job">
        <div class="profile_name">Prem Shahi</div>
        <div class="job">Web Desginer</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Admin Dashboard</span>
    </div>
    <section class="home-section">

      <div class="home-content">
    <section class="attendance">
      <div class="attendance-list">
      <a href="../Hackathon/add_record.php" class= "btn"> <i class='bx bx-plus'></i>Add Student Information</a>
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
