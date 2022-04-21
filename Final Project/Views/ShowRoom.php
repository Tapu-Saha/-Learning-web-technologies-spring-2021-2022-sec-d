<?php
    include 'navbar.php';
    require_once '../Controllers/RoomNo.php';
    $courses = getRoom();
    // $departments=getDepartment();
?>
<table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
         <tr align="center" >
             <th >Course ID</th>
             <th >Course Name</th>
             <th >Allocated Room</th>
             <th >Class Time</th>

             

             <?php

             $i=0;
             echo "<tr align='center'>";
             foreach($courses as $course){
                 
                 
                echo "<tr>";
                echo "<td>".$course['courseId']."</td>";
                echo "<td>".$course['courseName']."</td>";
                echo "<td>".$course['roomNo']."</td>";
                echo "<td>".$course['time']."</td>";  
                echo "</tr>";
                 }
                 
             
                
             ?>
         </tr>
              
     </table>
