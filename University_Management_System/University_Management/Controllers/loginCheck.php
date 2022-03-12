<?php	
	
	session_start();
	if(isset($_REQUEST['submit'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if( $username != null &&  $password != null){
			if(strlen($password)<4){
				echo "Password should be at least 4";
				return;
			}

			$user = ['username'=> $username, 'password'=>$password];
			$_SESSION['user'] = $user;

			$file = fopen('../models/user.txt', 'r');
			while(!feof($file)){
				$_SESSION['status'] = true;
				$user = fgets($file);
				$userArray = explode('|', $user);
				// print_r($userArray);

				for($i=0;$i<count($userArray);$i++){
					if(trim($userArray[$i]) == $username && trim($userArray[$i+1]) == $password){
						setcookie('status', 'true', time()+3600, '/');
						header('location: ../views/Dashboard.php');
					}
				}
				
			}

			echo "invalid username/password";

		}else{
			echo "null submission";
		}
	}

?>