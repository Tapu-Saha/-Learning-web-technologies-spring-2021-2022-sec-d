<?php	
	 require '../Models/db_config.php';
	session_start();
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$type = $_POST['role'];

		if($username != null &&  $password != null && $type!= null){
			if(strlen($password)<4){
				echo "Password should be at least 4";
				return;
			}

			$user = ['username'=> $username];
			

			// $file = fopen('../models/user.txt', 'r');
			// while(!feof($file)){
				$_SESSION['status'] = true;
				$user=checkUserDB($username,$password,$type);
				if($user>1){	
					print_r($user);
					$_SESSION['user'] = $user;
					if($user['type'] == 'student'){
						header('location: ../views/sNoticeList.php');
					}
					else {
					 header('location: ../views/Dashboard.php');
				}
			}
				

			echo "invalid username/password";

		}
		else{
			echo "Please Fill up the box properly";
		}
	}

?>