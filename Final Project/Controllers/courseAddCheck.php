<?php	
	require '../Models/db_config.php';
	
	if(isset($_REQUEST['submit'])){
		
		$courseId = $_POST['courseId'];
		$courseName = $_POST['courseName'];
		

		if( $courseId != null &&  $courseName != null){
			
			
			// $course= "|" . $courseId . "|" . $courseName ;

			// $file = fopen('../models/course.txt', 'a+');
			// fwrite($file, "$course");
			// fclose($file);
			addCourse($courseId,$courseName);
			header('location: ../views/Course.php');


		}else{
			echo "Missing input";
		}
	}

?>