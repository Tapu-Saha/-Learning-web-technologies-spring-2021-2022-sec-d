<?php	
	
	
	if(isset($_REQUEST['submit'])){
		
		$courseId = $_POST['courseId'];
		$courseName = $_POST['courseName'];
		$teacher = $_POST['teacher'];

		if( $courseId != null &&  $courseName != null  &&  $teacher != null){
			
			
			$course= "|" . $courseId . "|" . $courseName. "|" . $teacher;

			$file = fopen('../models/course.txt', 'a+');
			fwrite($file, "$course");
			fclose($file);
			header('location: ../views/Course.php');


		}else{
			echo "Missing input";
		}
	}

?>