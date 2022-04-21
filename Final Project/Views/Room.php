<?php
    include './navbar.php';
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/RoomNo.php" onsubmit="return validateform()" >
        <table>
            
            <tr>
                <td>Course ID</td>
                <td><input type="text" name="courseId" value="" id="courseId" onkeyup="showCourseRoom(this.value)"></td>
                <td><p id="errorId" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Course Name</td>
                <td><input type="text" name="courseName" value="" id="courseName"></td>
                <td><p id="errorName" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Room No</td>
                <td><input type="text" name="roomNo" value="" id="roomNo"></td>
                <td><p id="errorRoom" style="color: red;"></p></td>
</tr>
<tr>
                <td>Time</td>
                <td>
                    <input type="time" name="time" value="" id="time">
                    <td><p id="errorTime" style="color: red;"></p></td>
                    
            </td>
            </tr>
                
            
            <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit" class="button"></td>
                <td><button class="cancelbtn"><a href="./ShowRoom.php">View</a></button></td>
			</tr>
            
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

    
        
        
    
    
			
</body>
<script src="../JavaScript/Room.js"></script>
</fieldset>
</html>