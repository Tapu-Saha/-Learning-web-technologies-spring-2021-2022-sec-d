<?php	
	 require '../Models/db_config.php';
	

            function getAllNotice(){
               $notices = AllNotice();
               return $notices;
            }
            function deleteNotice($id){
               deleteNoticeInfo($id);
           }

?>