<?php	
require '../Models/db_config.php';

    function getAllResult(){
        $student = viewAllResult();
        return $student;
    
}

function getsResult(){
    $result = viewsResult();
    return $result;

}
          