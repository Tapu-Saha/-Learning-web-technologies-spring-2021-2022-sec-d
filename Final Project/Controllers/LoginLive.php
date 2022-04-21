
<?php 
require '../Models/db_config.php';

$json = $_POST['data'];

$obj = json_decode($json);
$name = $obj->name;
$password = $obj->password;
$role = $obj->type;
$user=checkUserDB($name,$password,$role);
if($user == 0){
    echo "Wrong username or password";
    return;
}
else{
    echo "Welcome";
}
?>