<?php
if(unlink('../models/notice.txt')){
    echo "File has been deleted";
}


    // $key= $_GET['notice'];
    // $file = fopen('../models/notice.txt', 'r');
	// 		while(!feof($file)){
	// 			$allNotice = fgets($file);
	// 			$noticeArray = explode('|', $allNotice);
    //         }
    //         $pos=array_search($key,$noticeArray);
    //         echo $pos;
    //         for($i=$pos;$i>$pos-5;$i--){
    //             $newNotice = unset($noticeArray[$i]);
    //         }
    //         for($j=0;j<count($noticeArray);j++){
    //             $newNotice = $newNotice[j]."|".$newNotice[j+1];
    //         }

    //         $newNotice= "|". $noticeId . "|" . $noticeTitle . "|" . $noticeDescription. "|" . $time . "|" . $date;
    //         $f=fopen('../models/notice.txt','w');
    //         fwrite($f,$noticeArray);
    //         fclose($f);
?>