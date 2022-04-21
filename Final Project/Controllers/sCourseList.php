<?php	
require '../Models/db_config.php';
function getAllCourse(){
        $courses = AllCourse();
        return $courses;
    
    }
function getDepartment(){
    $departments = AllDepartment();
        return $departments;
    
    }
?>