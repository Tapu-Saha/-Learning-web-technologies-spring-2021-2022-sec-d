<?php	
	require '../Models/db_config.php';
	
	if(isset($_REQUEST['submit'])){
		
		$courseId = $_POST['courseId'];
		$courseName = $_POST['courseName'];
		$roomNo = $_POST['roomNo'];
		$time = $_POST['time'];

		if( $courseId != null &&  $courseName != null  &&  $roomNo != null &&  $time != null){
			
			createRoom($courseId,$courseName,$roomNo,$time);
			
			 header('location: ../views/ShowRoom.php');


		}else{
			echo "Missing input";
		}
	}
    function getRoom(){
		$student = AllRoom();
        return $student;
                   
    }

?>