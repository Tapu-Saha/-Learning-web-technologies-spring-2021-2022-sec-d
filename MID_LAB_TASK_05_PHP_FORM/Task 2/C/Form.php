<?php
	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['name'];

		if($email == ""){
			echo "invalid name!";
		}else{
			echo $name;
		}

	}else{
		echo 'invalid request';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
</head>
<body>
	<form method="REQUEST" action="email.php">
		<fieldset><legend>Name</legend> <input type="name" name="name" value="" /><br>
				<input type="submit" name="submit" value="Submit"></fieldset>
	</form>
</body>
</html>