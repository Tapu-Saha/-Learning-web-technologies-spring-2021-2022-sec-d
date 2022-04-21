<?php	
	require '../Models/db_config.php';
	
	
	if(isset($_REQUEST['submit'])){
		
		$departmentId = $_POST['departmentId'];
		$departmentName = $_POST['departmentName'];
		

		if( $departmentName != null){
			
			
			// $departments= "|" . $departmentId . "|" . $departmentName ;

			// $file = fopen('../models/department.txt', 'a+');
			// fwrite($file, "$departments");
			// fclose($file);
			createDepartment($departmentId,$departmentName);
			header('location: ../views/Department.php');


		}else{
			echo "Missing input";
		}
	}

?>