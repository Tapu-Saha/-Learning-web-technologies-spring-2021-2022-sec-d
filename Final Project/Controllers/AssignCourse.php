<?php	
	
	require '../Models/db_config.php';
	
	if(isset($_REQUEST['submit'])){
		
		$facultyId = $_POST['facultyId'];
		$facultyName = $_POST['facultyName'];
		$courseName = $_POST['courseName'];

		if( $facultyId != null &&  $facultyName != null  &&  $courseName != null){
			
			
			// $Acourse= "|".$facultyId . "|" . $facultyName. "|" . $courseName;

			// $file = fopen('../models/Assign.txt', 'a+');
			// fwrite($file, "$Acourse");
			// fclose($file);
			assignCourse($facultyId,$facultyName,$courseName);
			header('location: ../views/Subject.php');


		}else{
			echo "Missing input";
		}
	}
    function getCourse(){
		return getCourseInformation();
    }

?>