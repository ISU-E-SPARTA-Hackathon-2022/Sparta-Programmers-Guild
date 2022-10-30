
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Manage Semester Information</title>
  <link rel="stylesheet" href="css/sidebar.css" />
  <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"/>
</head>
<body>
    <div class="sidebar">
      <div class="logo-details">
      <span class="logo_name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Administrator</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="student.php" class="active">
          <i class='bx bxs-user-circle'></i>
            <span class="links_name">student Profile</span>
          </a>
        </li>
        <li>
          <a href="course.php">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Course</span>
          </a>
        </li>
        <li>
          <a href="semester.php">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Semester</span>
          </a>
        </li>
        <li>
          <a href="class.php">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Class Management</span>
          </a>
        <li>
          <a href="enrolled_students.php">
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">Enrolled Students</span>
          </a>
        </li>
        <li>
          <a href="instructor.php" >
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Instructor</span>
          </a>
        <li>
          <a href="report.php">
          <i class='bx bxs-report'></i>
            <span class="links_name">Attendance Report</span>
          </a>
        </li>
        <li>
          <a href="user.php">
            <i class="bx bx-user"></i>
            <span class="links_name">User</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Student Profile</span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search..." />
          <i class="bx bx-search"></i>
        </div>
      </nav>

      <div class="home-content">
    <section class="attendance">
      <div class="attendance-list">
      <a href="student_add_record.php" class= "btn"> <i class='bx bx-plus'></i>Add Student Information</a>
      <a href="import-excel/index.php" class= "btn">Import Excel</a>
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Student ID</th>
              <th>Name</th>
              <th>Sex</th>
              <th>Course</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
        <!--PHP CODE HERE -->
        <?php
        //echo "<tr> <td colspan = '9'>Total of records is $count</td> </tr>";
       
        @include './studenthandler/student_eventhandler.php';
        @include './config/db_connection.php';
        $_conn = new ConnectionHandler();
        $_student = new Student($_conn);
        $result = $_student->getStudent();
        $number_daw_sabi_ni_czarina = 1;

        array_map(function($info) use (&$number_daw_sabi_ni_czarina)
        {
          echo "<tr>
          <td>" . $number_daw_sabi_ni_czarina . "</td>
          <td>" . $info['stud_id'] . "</td>
          <td>" . $info['fname'] . " " . $info['mname'] . " " . $info['lname'] . "</td>
          <td>" . $info['sex'] . "</td>
          <td>" . $info['coursecode'] . "</td>
          <td><a href = 'student_edit_record.php?id=". $info['id'] ."'>Edit</a> | ";
          ?>       
          
          <a href = 'student_delete_record.php?id=<?php echo $info['id'];?>' onClick = "return confirm('are you sure you want to delete this?');">Delete</a></td>
<?php
          echo "</tr>";
          $number_daw_sabi_ni_czarina++;
        }, $result)?>

        
          </tbody>
    </table>
      </div>
    </section>

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
    </script>
  </body>
</html>
