<?php	
 require '../Models/db_config.php';
 if (isset($_REQUEST['submit'])) 
{
		$noticeId = $_POST['noticeId'];
		$noticeName = $_POST['noticeName'];
		$noticeDescription = $_POST['noticeDescription'];
		$Date = $_POST['Date'];
        // $contact = $_POST['contact'];
        // $salary = $_POST['salary'];
		if( $noticeName != null &&  $Date != null){
			if(editNoticeInfo($noticeId,$noticeName,$noticeDescription,$Date)){
				header('location: ../views/NoticeList.php');
			}
		}
}
	function getNotice($No){
		return getNoticeInformation($No);
	}
?>