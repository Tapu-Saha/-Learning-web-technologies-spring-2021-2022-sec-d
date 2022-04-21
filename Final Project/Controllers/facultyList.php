<?php	
 require '../Models/db_config.php';
function getAllFaculty(){
                    $faculty = getFaculty();
                    return $faculty;
                
            }
            function deleteFaculty($id){
                deleteFacultyInfo($id);
            }
            function getAssignCourse(){
                $file = fopen('../models/AssignCourse.txt', 'r');
                while(!feof($file)){
                    $Acourse = fgets($file);
                    $assignArray = explode('|', $Acourse);
                    return $assignArray;
                }
            }
            
?>