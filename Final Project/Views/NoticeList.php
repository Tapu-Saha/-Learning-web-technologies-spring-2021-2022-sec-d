<?php
    include 'navbar.php';
    require_once '../Controllers/noticeListCheck.php';
    $notices = getAllNotice();
    // print_r($notices);
?>
    <!-- Course Form Stated  -->
    <table>
            <tbody><tr><td></td></tr>
            <tr>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td><button class="button"><a href="./NoticeAdd.php">Add New Notice</a></button></td>
               <!-- <td><button><a href="../Controllers/noticeDelete.php">Delete All Notice</a></button></td> -->
              <!-- <td><button><a href="../Controllers/noticeListCheck.php">View Notice</a></button></td>  -->
            </tr>
            <tr>
                <td><b>Notices:</b></td>
            </tr>
            <tr>
                </tr></tbody></table>
    <form action="">
        <table>
            
            <tr>
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
                    <tr align="center" >
                        <th >ID</th>
                        <th >Notice Title</th>
                        <th >Notice Description</th>
                        <th >Date</th>
                        <th >Edit</th>
                        <th >Delete</th>
                        <!-- <th >Photo</th> -->
                        
                    
                    </tr>   
                    
                        <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($notices as $notice){
                           
                            
                            echo "<tr>";
                            echo "<td>".$notice['No']."</td>";
                            echo "<td>".$notice['NoticeName']."</td>";
                            echo "<td>".$notice['NoticeDetails']."</td>";
                            echo "<td>".$notice['Date']."</td>";
                            echo '<td><button class="button"><a href="./editNotice.php/?id='.$notice['No'].'">Edit</a></button></td>';
                            echo '<td><button class="cancelbtn"><a href="../Controllers/deleteNotice.php/?id='.$notice['No'].'">Delete</a></button></td>';
                            
                            // echo "<td>".$notice['image']."</td>";
                            echo "</tr>";
                            //echo '<td><button><a href="./editFaculty.php/?id='.$student['id'].'">Edit</a></button></td>';
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
