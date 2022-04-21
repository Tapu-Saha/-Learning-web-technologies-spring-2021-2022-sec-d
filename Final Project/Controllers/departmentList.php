<?php	
require '../Models/db_config.php';
function getAllDepartment(){
    $departments = AllDepartment();
    return $departments;

}


?>