<?php
    include './navbar.php';
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/courseAddCheck.php" onsubmit="return validateform()">
        <table>
            
            <tr>
                <td>Course ID</td>
                <td><input type="text" name="courseId" value="" id="id"></td>
                <td><p id="errorId" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Course Name</td>
                <td><input type="text" name="courseName" value="" id="courseName"></td>
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
<script src="../JavaScript/AddCourse.js"></script>
</fieldset>
</html>