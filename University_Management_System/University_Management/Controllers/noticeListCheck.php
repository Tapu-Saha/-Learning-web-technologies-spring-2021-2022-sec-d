<?php	
	
	

            function getAllNotice(){
                $file = fopen('../models/notice.txt', 'r');
                while(!feof($file)){
                    $notice = fgets($file);
                    $noticeArray = explode('|', $notice);
                    // print_r($noticeArray);
                    return $noticeArray;
                }
            }


?>