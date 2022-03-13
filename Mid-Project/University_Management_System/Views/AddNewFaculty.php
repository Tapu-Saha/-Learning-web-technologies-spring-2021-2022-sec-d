<?php
    include './navbar.php';
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/facultyAddCheck.php" >
        <table>
            
            <tr>
                <td>Faculty ID</td>
                <td><input type="text" name="facultyId"></td>
            </tr>
            <tr>
                <td>Faculty Name</td>
                <td><input type="text" name="facultyName"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="gender"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" name="contact"></td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="salary"></td>
            </tr>
                
            <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
        
    
    
			
</body>
</html>