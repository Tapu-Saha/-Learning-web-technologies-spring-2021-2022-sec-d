<?php
    include 'studentNavbar.php';
    require_once '../Controllers/sCourseList.php';
    $courses = getAllCourse();
    $departments = getDepartment();
?>
    <!-- Course Form Stated  -->
    <h4>Courses</h4>
    <form action="">
        <table>
       <tr>
                <tr>
                    <td class=""  style="background-color: #04AA6D;">ID</td>
                    <td class="" style="background-color: #04AA6D;">Course Name</td>
                </tr>
            </tr>

                    <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($courses as $course){
                            
                            echo "<tr>";
                            echo "<td>".$course['id']."</td>";
                            echo "<td>".$course['courseName']."</td>";
                            echo "</tr>";
                    
                        }
                        ?>
                    <!-- </tr> -->
                        
                </table>
            <!-- </tr> -->
        <!-- </table> -->

    </form>
    
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
   
    
    
			
</body>
</html>