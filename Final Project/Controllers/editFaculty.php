<?php	
 require '../Models/db_config.php';
 if (isset($_REQUEST['submit'])) 
{
		$facultyId = $_POST['facultyId'];
		$facultyName = $_POST['facultyName'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
        $contact = $_POST['contact'];
        $salary = $_POST['salary'];
		if( $facultyId != null &&  $facultyName != null &&  $gender != null &&  $email != null  &&  $contact != null &&  $salary != null ){
			if(editFacultyInfo($facultyId,$facultyName,$gender,$email,$contact,$salary)){
				header('location: ../views/Faculty.php');
			}
		}
}
	function getFacultyInfo($id){
		return getFacultyInformation($id);
	}
?>