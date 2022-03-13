<?php	
	
	
	if(isset($_REQUEST['submit'])){
		
		$facultyId = $_POST['facultyId'];
		$facultyName = $_POST['facultyName'];
		$courseName = $_POST['courseName'];

		if( $facultyId != null &&  $facultyName != null  &&  $courseName != null){
			
			
			$Acourse= "|".$facultyId . "|" . $facultyName. "|" . $courseName;

			$file = fopen('../models/Assign.txt', 'a+');
			fwrite($file, "$Acourse");
			fclose($file);
			header('location: ../views/Subject.php');


		}else{
			echo "Missing input";
		}
	}
    function getCourse(){
        $file = fopen('../models/Assign.txt', 'r');
                    while(!feof($file)){
                        $courses = fgets($file);
                        $coursesArray = explode('|', $courses);
                        return $coursesArray;
                    }
    }

?>