<?php	
 require '../Models/db_config.php';
function getAllFaculty(){
                    $faculty = getFaculty();
                    return $faculty;
                
            }