<?php	
 require '../Models/db_config.php';
	function getFacultyInfo($id){
		getFacultyInformation($id);
	}
	
	if(isset($_REQUEST['submit'])){
		
		$facultyId = $_POST['facultyId'];
		$facultyName = $_POST['facultyName'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
        $contactNo = $_POST['contactNo'];
        $salary = $_POST['salary'];
		
		
		

		if( $facultyName != null &&  $gender != null &&  $email != null  &&  $contactNo != null &&  $salary != null ){
			
			
			// 
			createFaculty($facultyId,$facultyName,$gender,$email,$contactNo,$salary);
			header('location: ../views/Faculty.php');


		}else{
			echo "Missing input";
		}
	}

?>