<?php	
function getAllFaculty(){
                $file = fopen('../models/teacher.txt', 'r');
                while(!feof($file)){
                    $faculty = fgets($file);
                    $facultyArray = explode('|', $faculty);
                    return $facultyArray;
                }
            }
?>