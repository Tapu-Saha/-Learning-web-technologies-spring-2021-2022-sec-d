<?php
    include './navbar.php';
    require '../Controllers/facultyAddCheck.php';
    // $faculty = getFacultyInfo($_GET['id']);
    // echo $faculty;
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/facultyAddCheck.php" onsubmit="return validateform()" >
        <table>
            
            <tr>
                <td>Faculty ID</td>
                <td><input type="text" name="facultyId"value="" id="id" ></td>
            </tr>
            <tr>
                <td>Faculty Name</td>
                <td><input type="text" name="facultyName" value=''id="facultyName"></td>
                <td><p id="errorName" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="gender" value=''id="gender"></td>
                <td><p id="errorGender" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"value=''id="email"></td>
                <td><p id="errorEmail" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" name="contactNo"value=''id="contactNo"></td>
                <td><p id="errorContact" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="salary"value=''id="salary"></td>
                <td><p id="errorSalary" style="color: red;"></p></td>
            </tr>
                
            <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

    
        
        
    
    
			
</body>
<script src="../JavaScript/AddFaculty.js"></script>
</fieldset>
</html>