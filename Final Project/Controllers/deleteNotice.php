<?php	
 require '../Models/db_config.php';
 deleteNoticeInfo($_GET['id']);
 header('location: ../../views/NoticeList.php');
?>