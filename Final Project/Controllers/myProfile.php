<?php	
 require '../Models/db_config.php';
function getMyInfo($userName){
                    $info = getMyProfileInfo($userName);
                    return $info;
                
            }
            
            
?>