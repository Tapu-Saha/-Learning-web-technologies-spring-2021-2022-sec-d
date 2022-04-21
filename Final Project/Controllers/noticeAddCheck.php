<?php	
	 require '../Models/db_config.php';
	
	if(isset($_REQUEST['submit'])){
		$noticeId = $_POST['noticeId'];
		$noticeTitle = $_POST['noticeTitle'];
		$noticeDescription = $_POST['noticeDescription'];
		$date = $_POST['date'];
		//$image = $_POST['image'];

		if( $noticeTitle != null &&  $noticeDescription != null && $date!=null){
			createNotice($noticeId,$noticeTitle,$noticeDescription,$date);
		


			header('location: ../views/NoticeList.php');
			

			echo "invalid username/password";

		}else{
			echo "null submission";
		}
	}

?>