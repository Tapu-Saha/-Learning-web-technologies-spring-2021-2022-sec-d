<?php
    session_start();
    require '../Controllers/vaildUsers.php';
?>
<html>
<head>
	<title>DashBoard</title>
</head>
<body>
<fieldset><legend>DashBoard</legend>
<table>

        <th><a href="NoticeList.php">Notice</a></th>
        <th></th>
    <th><a href="Course.php">Course</a></th>
        <th></th>
    <th><a href="Department.php">Department</a></th>
        <th></th>
    <th><a href="Faculty.php">Faculty</a></th>
        <th></th>
    <th><a href="Student.php">Student</a></th>
    <th></th>
    <th><a href="Room.php">Room Allocation</a></th>
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
    </fieldset>