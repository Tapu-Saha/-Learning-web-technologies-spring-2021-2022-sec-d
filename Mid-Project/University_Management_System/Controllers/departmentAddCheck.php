<?php	
	
	
	if(isset($_REQUEST['submit'])){
		
		$departmentId = $_POST['departmentId'];
		$departmentName = $_POST['departmentName'];
		

		if( $departmentId != null &&  $departmentName != null){
			
			
			$departments= "|" . $departmentId . "|" . $departmentName ;

			$file = fopen('../models/department.txt', 'a+');
			fwrite($file, "$departments");
			fclose($file);
			header('location: ../views/Department.php');


		}else{
			echo "Missing input";
		}
	}

?>