<?php
    include 'navbar.php';
    require_once '../Controllers/AssignCourse.php';
    $courses = getCourse();
    // $departments=getDepartment();
?>
<table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
         <tr align="center" >
             <th >Faculty ID</th>
             <th >Faculty Name</th>
             <th >Course Name</th>

             

             <?php

             $i=0;
             echo "<tr align='center'>";
             foreach($courses as $course){
                 
                 
                echo "<tr>";
                echo "<td>".$course['facultyId']."</td>";
                echo "<td>".$course['facultyName']."</td>";
                echo "<td>".$course['courseName']."</td>";
                echo "</tr>";
                 }
                 
            
                
             ?>
         </tr>
              
     </table>
