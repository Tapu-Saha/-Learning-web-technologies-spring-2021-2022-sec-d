<?php
    include 'navbar.php';
    require_once '../Controllers/departmentList.php';
    $departments = getAllDepartment();
?>
    <!-- Course Form Stated  -->
    <form action="">
        <table>
            
            <tr>
            <td><button class="button"><a href="./AddNewDepartment.php">Add New Department</a></button></td>
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
                    <tr align="center" >
                        <th >Department Id</th>
                        <th >Department Name</th>

                        <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($departments as $department){
                            
                            
                            echo "<tr>";
                            echo "<td>".$department['id']."</td>";
                            echo "<td>".$department['departmentName']."</td>";
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
