<?php	
	
	
	if(isset($_REQUEST['submit'])){
		
		$facultyId = $_POST['facultyId'];
		$facultyName = $_POST['facultyName'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
        $contact = $_POST['contact'];
        $salary = $_POST['salary'];
		
		
		

		if( $facultyId != null &&  $facultyName != null &&  $gender != null &&  $email != null  &&  $contact != null &&  $salary != null ){
			
			
			$faculties= "|" . $facultyId . "|" . $facultyName . "|" . $gender . "|" . $email ."|" . $contact . "|" . $salary."\r\n";

			$file = fopen('../models/teacher.txt', 'a+');
			fwrite($file, "$faculties");
			fclose($file);
			header('location: ../views/Faculty.php');


		}else{
			echo "Missing input";
		}
	}

?>