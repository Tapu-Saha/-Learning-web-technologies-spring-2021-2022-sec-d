<?php
    include 'studentNavbar.php';
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/studentMajorCheck.php" onsubmit="return validateform()">
        <table>
            
            
            <tr  style="text-align:center;">    
                <td>My Profile</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>Shezan</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>shezan@gmail.com</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>Male</td>
            </tr>
            <tr>
                <td>CGPA</td>
                <td>3.40</td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td>0172356789</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>Mirpur,Dhaka</td>
           
                
            
            <!-- <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr> -->
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