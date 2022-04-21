<?php
    session_start();
    // require '../Controllers/vaildUsers.php';
?>
<html>
<head>
	<title>DashBoard</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

table {
  font-family: 'Poppins', sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 td,  th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<body>

<div class="topnav">
<a href="./sNoticeList.php" class="active">Notice</a>
<a href="./sCourse.php">Course</a>
<a href="./sFacultyInfo.php">Faculty Information</a>
<a href="./sResult.php">Result</a>
<!-- <a href="./sPay.php">Payment Slip</a> -->
<a href="./sMajor.php">Major Selection</a>
<!-- <a href="./sMinor.php">Minor Selection</a> -->
<a href="./studentProfile.php">My Profile</a>
<!-- <a href="./Department.php">Department</a> -->
<!-- <a href="./Department.php">Department</a> -->
<!-- <a href="./Faculty.php">Faculty</a> -->
<!-- <a href="./Student.php">Student</a> -->
<!-- <a href="./Room.php">Room Allocation</a> -->
<a href="../Controllers/logout.php">Logout</a>
<a rowspan="4" align="right"> Welcome,  
    <?php
        if(isset($_SESSION['user'])){
            print_r($_SESSION['user']['username']);
        }
    ?>
    </a>
  
</div>



<!-- <fieldset><legend>DashBoard</legend>
<table>

        <th><a href="./NoticeList.php">Notice</a></th>
        <th></th>
    <th><a href="./Course.php">Course</a></th>
        <th></th>
    <th><a href="./Department.php">Department</a></th>
        <th></th>
    <th><a href="./Faculty.php">Faculty</a></th>
        <th></th>
    <th><a href="./Student.php">Student</a></th>
    <th></th>
    <th><a href="./Room.php">Room Allocation</a></th>
    <th></th>
    <th><a href="../Controllers/logout.php">Logout</a></th>
    
    <th rowspan="4" align="right"> Welcome,  
    <?php
        if(isset($_SESSION['user'])){
            print_r($_SESSION['user']['username']);
        }
    ?>
    </th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

</table>
    </fieldset> -->