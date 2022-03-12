<?php
    include 'navbar.php';
    require_once '../Controllers/departmentList.php';
    $departments = getAllDepartment();
?>
    <!-- Course Form Stated  -->
    <form action="">
        <table>
            
            <tr>
            <td><button><a href="./AddNewDepartment.php">Add New Department</a></button></td>
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
                    <tr align="center" >
                        <th >Department Id</th>
                        <th >Department Name</th>

                        <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($departments as $department){
                            
                            
                            echo "<td>$department</td>";
                            $i++;
                            if($i>1){
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
