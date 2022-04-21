<?php
    include 'navbar.php';
    require_once '../Controllers/facultyList.php';
    $faculties = getAllFaculty();
?>
    <!-- Course Form Stated  -->
    <form action="">
        <table>
            
            <tr>
                <td><h3>Faculty List:</h3></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><button class="button"><a href="./AddNewFaculty.php">Add New Faculty</a></button></td>
            <td></td>
            <td><button class="button"><a href="./AssignCourse.php">Assign Courses</a></button></td>
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
                    <thead align="center" >
                        <th >Faculty Id</th>
                        <th >Faculty Name</th>
                        <th >Gender</th>
                        <th >Email</th>
                        <th >Contact No</th>
                        <th >Salary</th>
                        <th >Edit</th>
                        <th >Delete</th>
                        </thead>

                        <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($faculties as $faculty){
                            echo "<tr>";
                            echo "<td>".$faculty['id']."</td>";
                            echo "<td>".$faculty['facultyName']."</td>";
                            echo "<td>".$faculty['gender']."</td>";
                            echo "<td>".$faculty['email']."</td>";
                            echo "<td>".$faculty['contactNo']."</td>";  
                            echo "<td>".$faculty['salary']."</td>";
                            echo '<td><button class="button"><a href="./editFaculty.php/?id='.$faculty['id'].'">Edit</a></button></td>';
                            echo '<td><button class="cancelbtn"><a href="../Controllers/deleteFaculty.php/?id='.$faculty['id'].'">Delete</a></button></td>';
                            
                            
                            echo "</tr>";
                            
                            
                        }
                           
                        ?>
                    
        </table>

    </form>
    
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
   
    
    
			
</body>
</html>
