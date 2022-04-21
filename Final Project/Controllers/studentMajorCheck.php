<?php	
require '../Models/db_config.php';
if(isset($_REQUEST['submit'])){
		
		$major = $_POST['major'];
		
		
		

		if( $major != null){
			
			
			// 
			createMajor($major);
			header('location: ../views/sCourse.php');


		}else{
			echo "Missing input";
		}
    }

?>