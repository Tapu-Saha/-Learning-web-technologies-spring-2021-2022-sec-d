<?php
    
    include 'navbar.php';
    require_once '../Controllers/myProfile.php';
    if(isset($_SESSION['user'])){
        $userName = $_SESSION['user']['username'];
    }
    $information = getMyInfo($userName);
?>
    <!-- Notice Form Stated  -->
    <form>
        <table>
        <h4 style="text-align:center;">My Profile</h4> 
            
            
            <tr>
                <td>Name</td>
                <td>
                    <?php
                        echo $information['username'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                <?php
                        echo $information['email'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                <?php
                        echo $information['gender'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td><?php
                        echo $information['contact'];
                    ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php
                        echo $information['address'];
                    ?></td>
           
                
            
            <!-- <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr> -->
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

   
        
        
    
    
			
</body>
<script src="../JavaScript/MyProfile.js"></script>
</fieldset>
</html>