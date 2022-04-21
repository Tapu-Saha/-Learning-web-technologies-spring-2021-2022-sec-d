<?php
    include 'studentNavbar.php';
    require_once '../Controllers/sResult.php';
    $students = getAllResult();
    $result = getsResult();
    
    
?>
    <!-- Course Form Stated  -->
    <form action="">    
        <table>
            <td><h3><u>Grade Report</u></h3></td>  
        
        
       
        <!-- <td><button><a href="./Result.php">Show Result</a></button></td> -->
        
        </table>
        <!-- <div id="txtHint">Student info will be listed here...</div> -->
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px" style="margin-top: 40px;">
                <h4>Curriculum Grade Report</h4> 
                    
                    
                    <tr align="center" >
                        <th >Student Id</th>
                        <th >Student Name</th>
                        <th >Credit(s) Completed</th>
                        <th >Coure(s) Completed</th>
                        <th >Cgpa</th>
                        <!-- <th >Contact No</th>
                        <th >Address</th> -->
                    
                    
                        <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($students as $student){
                            
                            
                            echo "<tr>";
                            echo "<td>".$student['id']."</td>";
                            echo "<td>".$student['name']."</td>";
                            echo "<td>".$student['creditC']."</td>";
                            echo "<td>".$student['courseC']."</td>";
                            echo "<td>".$student['cgpa']."</td>";  
                            // echo "<td>".$student['contactNo']."</td>";
                            // echo "<td>".$student['address']."</td>";
                            echo "</tr>";
                            
                        }
                        ?>
                    <!-- </tr> -->
                    
                         
                </table>

                <h4 style="text-align:center;">Core Curriculum</h4> 
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px" style="margin-top: 40px;">
                
            <!-- </tr> -->
        <!-- </table> -->
        <tr align="center" >
                        <th >Code</th>
                        <th >Course In Curriculum</th>
                        <th >Attended Course/Passing Semester/Grade</th>

                    
                    
                        <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($result as $results){
                            
                            
                            echo "<tr>";
                            echo "<td>".$results['id']."</td>";
                            echo "<td>".$results['subject']."</td>";
                            echo "<td>".$results['grade']."</td>";
                            echo "</tr>";
                            
                        }
                        ?>
                    <!-- </tr> -->
                    
                         
                </table>

    </form>
    
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
</body>

</html>
