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
            <td><button><a href="./AddNewFaculty.php">Add New Faculty</a></button></td>
            <td></td>
            <td><button><a href="./AssignCourse.php">Assign Courses</a></button></td>
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
                    <tr align="center" >
                        <th >Faculty Id</th>
                        <th >Faculty Name</th>
                        <th >Gender</th>
                        <th >Email</th>
                        <th >Contact No</th>
                        <th >Salary</th>

                        <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($faculties as $faculty){
                            
                            
                            echo "<td>$faculty</td>";
                            $i++;
                            if($i>5){
                                $i=0;
                                echo "</tr>";
                                echo "<tr align='center'>";
                            }
                            
                        }
                           
                        ?>
                    </tr>
                         
                </table>
            </tr>
        </table>

    </form>
    
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
   
    
    
			
</body>
</html>
