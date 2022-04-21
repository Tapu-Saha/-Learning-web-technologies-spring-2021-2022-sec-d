<?php
    include 'studentNavbar.php';
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/studentMajorCheck.php" onsubmit="return validateform()">
        <table>
            
            
            <tr>
                <td>Select your major</td>
                <td>
                    <select id="major" name="major">
                        <option value="softwareEngineering">Bsc in Software Engineering</option>
                        <option value="informationSystem">Information System</option>
                        <option value="computationalTheory">Computational Theory</option> 
                    </select>
                </td>
                <td><p id="errorName" style="color: red;"></p></td>
            </tr>
                
            
            <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

   
        
        
    
    
			
</body>
<script>
	
	
	function validateform(){  
	// var name=document.myform.name.value;  
	// var name = document.getElementById("id").value;
	var courseName = document.getElementById("courseName").value;
	// var password=document.myform.password.value;  
	
	if (courseName==""){  
		document.getElementById('errorName').innerHTML = "Enter CourseName"
		return false;  
	 
	}  
}
</script>
</fieldset>
</html>