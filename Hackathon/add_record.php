<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Record</title>
    <link rel="stylesheet" href="css/add_record.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
<div class="container">
    <!--main page-->
    <section class="main">
      <div class="main-top">
        <h1>College of Computing Studies, Information and Communication Technology</h1>
      </div>

      <div class="form-container">
      <form action = "student_add_record.php" method = "post">
      <h3>Add New Student Details</h3>
      <input type="text" name="txtstudid" required placeholder="Enter student ID #">
      <input type="text" name="txtfname" required placeholder="Enter student first name">
      <input type="text" name="txtmname" required placeholder="Enter student middle name">
      <input type="text" name="txtlname" required placeholder="Enter student last name">
      <select name = "txtsex">
				  <option value = "cboSex">Sex</option>
					<option value = "Male">Male</option>
					<option value = "Female">Female</option>
			</select>

      <select name = "txtcourse">
      <option value = "cbocourse">Course</option>
			</select>

      
      <input type="submit" name="btnsave" value="Save" class="form-btn">
    </form>
</div>
</body>
</html>
