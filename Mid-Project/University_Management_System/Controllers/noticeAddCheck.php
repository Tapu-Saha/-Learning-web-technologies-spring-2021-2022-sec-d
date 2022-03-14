<?php	
	
	
	if(isset($_REQUEST['submit'])){
		
		$noticeTitle = $_POST['noticeTitle'];
		$noticeDescription = $_POST['noticeDescription'];
		$time = $_POST['time'];
		$date = $_POST['date'];
		$image = $_POST['image'];

		if( $noticeTitle != null &&  $noticeDescription != null  &&  $time != null && $date!=null){
			//File Upload
			$src = $_FILES['myfile']['tmp_name'];
			$des = '../Assests/upload/'.$_FILES['myfile']['name'];
			// $movedLocation = move_uploaded_file($src, $des);
			if(move_uploaded_file($src, $des)){
				$filename=$_FILES['myfile']['name'];
				
			}else{
				echo "Error";
			}
			
			$notice= "|" . $noticeTitle . "|" . $noticeDescription. "|" . $time . "|" . $date ."|" .$filename;

			

			




			$file = fopen('../models/notice.txt', 'a+');
			fwrite($file, "$notice");
			fclose($file);
			header('location: ../views/NoticeList.php');
			// while(!feof($file)){
			// 	$_SESSION['status'] = true;
			// 	$user = fgets($file);
			// 	$userArray = explode('|', $user);
			// 	// print_r($userArray);
			// 	if(trim($userArray[0]) == $username && trim($userArray[1]) == $password){
			// 		setcookie('status', 'true', time()+3600, '/');
			// 		header('location: ../views/Dashboard.php');
			// 	}
			// }

			echo "invalid username/password";

		}else{
			echo "null submission";
		}
	}

?>